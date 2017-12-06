;(function ( $, window, document, undefined ) {

    var default_settings = {
        positionType : 'manual',
        lat : -34.397,
        lng : 150.644,
        zoom : 8,
        width : 640,
        height : 480,
        responsive : 1,
        searchQuery : '',
        language : 'en',
        markers : [],
        infoWindows : [],
        showInfoWindowsOn : 'click',
        animateMarkers : 1,
        style_type : 'preset',
        style_index : 0,
        style_array : undefined,
        style_array_custom : '[]',
        auto_sign_in : 0,
        fullscreen_enabled : 0,
        disable_scroll : 0,
        load_api : 1
    }

    var supportedLanguages = {
        'ar': 'ARABIC',
        'eu': 'BASQUE',
        'bg': 'BULGARIAN',
        'bn': 'BENGALI',
        'ca': 'CATALAN',
        'cs': 'CZECH',
        'da': 'DANISH',
        'de': 'GERMAN',
        'el': 'GREEK',
        'en': 'ENGLISH',
        'en-AU': 'ENGLISH (AUSTRALIAN)',
        'en-GB': 'ENGLISH (GREAT BRITAIN)',
        'es': 'SPANISH',
        'eu': 'BASQUE',
        'fa': 'FARSI',
        'fi': 'FINNISH',
        'fil': 'FILIPINO',
        'fr': 'FRENCH',
        'gl': 'GALICIAN',
        'gu': 'GUJARATI',
        'hi': 'HINDI',
        'hr': 'CROATIAN',
        'hu': 'HUNGARIAN',
        'id': 'INDONESIAN',
        'it': 'ITALIAN',
        'iw': 'HEBREW',
        'ja': 'JAPANESE',
        'kn': 'KANNADA',
        'ko': 'KOREAN',
        'lt': 'LITHUANIAN',
        'lv': 'LATVIAN',
        'ml': 'MALAYALAM',
        'mr': 'MARATHI',
        'nl': 'DUTCH',
        'no': 'NORWEGIAN',
        'pl': 'POLISH',
        'pt': 'PORTUGUESE',
        'pt-BR': 'PORTUGUESE (BRAZIL)',
        'pt-PT': 'PORTUGUESE (PORTUGAL)',
        'ro': 'ROMANIAN',
        'ru': 'RUSSIAN',
        'sk': 'SLOVAK',
        'sl': 'SLOVENIAN',
        'sr': 'SERBIAN',
        'sv': 'SWEDISH',
        'tl': 'TAGALOG',
        'ta': 'TAMIL',
        'te': 'TELUGU',
        'th': 'THAI',
        'tr': 'TURKISH',
        'uk': 'UKRAINIAN',
        'vi': 'VIETNAMESE',
        'zh-CN': 'CHINESE (SIMPLIFIED)',
        'zh-TW': 'CHINESE (TRADITIONAL)'
    };

    var editor = undefined;
    var settings = undefined;
    var markers = {};
    var info_windows = {};
    var item_to_delete = undefined;
    var item_id = undefined;
    var hover_item_id = undefined;
    var default_marker_icon_url = undefined;

    $.uber_google_maps_init_editor = function() {
        markers = {};
        info_windows = {};
        editor = undefined;

        settings = $.extend(true, {}, default_settings);

        if ($.uber_google_maps_get_stored_settings != undefined) {
            var stored_settings = $.uber_google_maps_get_stored_settings();

            if (stored_settings != undefined) {
                settings = $.extend(true, settings, stored_settings);
            }

            for (var i=0; i<settings.infoWindows.length; i++) {
                settings.infoWindows[i].content = settings.infoWindows[i].content.replace(/\\"/g, '"');
                console.log(settings.infoWindows[i].content);
            }
        }

        // Error correction
        settings.style_array = uber_google_maps_styles[settings.style_index];

        // Error correction
        settings.style_array_custom = settings.style_array_custom.replace(/\\+/g, '');

        editor = new Editor();
    }
    $.uber_google_maps_get_current_settings = function() {
        if (editor.edit_markers_mode) {
            editor.add_marker_mode_quit();
        }

        if (editor.edit_info_windows_mode) {
            editor.add_info_window_mode_quit();
        }

        return $.extend(true, {}, settings);
    }
    $.uber_google_maps_uploaded_image = function(sender, url) {
        if (sender == 'custom-marker-icon') {
            $('#input-marker-icon-url').val(url);
            editor.update_marker_form();
        }
    }

    function Editor() {
        this.root = $('#map-editor-wrap');
        this.edit_markers_mode = false;
        this.edit_info_windows_mode = false;
        this.init();
    }

    Editor.prototype.init = function() {
        var self = this;

        self.disable_events();

        // Init languages form
        var selectLanguage = document.getElementById('select-language');
        var i = 0;
        for (var langCode in supportedLanguages) {
            var language = supportedLanguages[langCode];
            selectLanguage.options[i] = new Option(language, langCode, false, false);
            i += 1;
        }

        self.redraw(function() {
            // Load markers
            for (var i=0; i<settings.markers.length; i++) {
                var marker = new Marker(settings.markers[i].lat, settings.markers[i].lng);
                marker.title = settings.markers[i].title;
                marker.icon = settings.markers[i].icon;
                marker.icon_url = settings.markers[i].icon_url;
            }
            // Load info windows
            for (var i=0; i<settings.infoWindows.length; i++) {
                var info_window = new InfoWindow(settings.infoWindows[i].content);
                info_window.marker_id = settings.infoWindows[i].marker_id;
                info_window.title = settings.infoWindows[i].title;
                info_window.subtitle = settings.infoWindows[i].subtitle;
                info_window.phone = settings.infoWindows[i].phone;
                info_window.address = settings.infoWindows[i].address;
                info_window.email = settings.infoWindows[i].email;
                info_window.web = settings.infoWindows[i].web;
                info_window.content = settings.infoWindows[i].content;
                info_window.open = settings.infoWindows[i].open;
            }

            self.update_form();
        });

        // Load marker icons
        var url = $('#img-folder-url').data('url');
        var html = '';

        var marker_icon_index = 1;
        for (var i=1; i<=96; i++) {
            html += '<div class="marker-icon-wrap">';
            html += '   <img class="marker-icon" src="'+ url +'icons/'+ i +'.png">';
            html += '</div>';
        }
        default_marker_icon_url = url + 'icons/66.png';

        $('#preset-icons-container').html(html);
        $('#preset-icons-container').find('.marker-icon-wrap').first().addClass('selected');

        // Place the placeholder image(s)
        var url = $('#img-folder-url').data('url');
        $('#marker-custom-icon').attr('src', url + 'admin/placeholder_image.png');

        // Init style presets
        var url = $('#img-folder-url').data('url');
        var html = '';
        var len = uber_google_maps_styles.length;
        for (var i=0; i<len; i++) {
            html += '<div class="style-preset" data-index="' + i + '"><img src="' + url + 'admin/styles/' + i + '.png"></div>';
        }

        $('#styles-container').html(html);

        // Load settings
        self.load_settings();
        self.update_form();

        // Enable events
        self.enable_events();
    };
    Editor.prototype.disable_events = function() {
        var self = this;

        // Disable events
        $(document).off('change', '#map-form input, #map-form select, #map-form textarea');
        $(document).off('change', '#modal-edit-marker input');
        $(document).off('change', '#modal-edit-window input, #modal-edit-window textarea');
        $(document).off('click', '#button-sample-position');
        $(document).off('click', '#button-search');
        $(document).off('click', '#button-add-marker');
        $(document).off('click', '#button-add-info-window');
        $(document).off('click', '#button-finish-adding-markers');
        $(document).off('click', '#marker-custom-icon-container');
        $(document).off('click', '#button-finish-adding-info-windows');

        $(document).off('click', '.style-preset');

        $(document).off('click', '.button-list-item-delete');
        $(document).off('click', '.button-list-item-edit');
        $(document).off('click', '#button-confirm-delete');

        $(document).off('click', '#button-confirm-edit-marker');
        $(document).off('click', '#button-confirm-edit-window');
        $(document).off('click', '.marker-icon-wrap');

        $(document).off('mouseover', '.list-item');
        $(document).off('mouseout', '.list-item');
    },
    Editor.prototype.enable_events = function() {
        var self = this;

        // Enable events

        // Main form
        $(document).on('change', '#map-form input, #map-form select, #map-form textarea', function() {
            self.update_form();
            self.update_settings();
            self.redraw();
        });

        // Marker form
        $(document).on('change', '#modal-edit-marker input', function() {
            self.update_marker_form();
        });
        $(document).on('click', '.marker-icon-wrap', function() {
            $('.marker-icon-wrap').removeClass('selected');
            $(this).addClass('selected');
            $('#input-marker-icon-url').val($(this).find('img').attr('src'));
        });

        // Info window form
        $(document).on('change', '#modal-edit-window input, #modal-edit-window textarea', function() {
            self.update_window_form();
        });

        // 1. Map position
        $(document).on('click', '#button-sample-position', function() {
            self.sample_position();
            self.load_settings();
            self.update_settings();
            self.redraw();
        });
        $(document).on('click', '#button-search', function() {
            self.place_search();
        });

        // 2. Markers
        $(document).on('click', '#button-add-marker', function() {
            self.add_marker_mode();
        });
        $(document).on('click', '#button-finish-adding-markers', function() {
            self.add_marker_mode_quit();
        });
        $(document).on('click', '#marker-custom-icon-container', function() {
            $.uber_google_maps_open_image_upload('custom-marker-icon');
        });

        // 3. Info windows
        $(document).on('click', '#button-add-info-window', function() {
            self.add_info_window_mode();
        });
        $(document).on('click', '#button-finish-adding-info-windows', function() {
            self.add_info_window_mode_quit();
        });

        // 4. Style
        $(document).on('click', '.style-preset', function() {
            $('.style-preset').removeClass('selected');
            $(this).addClass('selected');

            self.update_settings();
            self.redraw();
        });

        // Marker, Info Window lists

        $(document).on('click', '.button-list-item-delete', function(e) {
            $('#modal-confirm-delete').modal();

            if ($(e.target).closest('.list-item-marker').length > 0) {
                var marker_id = $(e.target).closest('.list-item-marker').data('marker-id');

                item_to_delete = 'marker';
                item_id = marker_id;
            }

            if ($(e.target).closest('.list-item-window').length > 0) {
                var window_id = $(e.target).closest('.list-item-window').data('window-id');

                item_to_delete = 'window';
                item_id = window_id;
            }
        });
        $(document).on('click', '#button-confirm-delete', function() {
            if (item_to_delete == 'marker') {
                self.delete_marker_from_list(item_id);
            }
            if (item_to_delete == 'window') {
                self.delete_window_from_list(item_id);
            }
        });
        $(document).on('click', '.button-list-item-edit', function(e) {
            if ($(e.target).closest('.list-item-marker').length > 0) {
                item_id = $(e.target).closest('.list-item-marker').data('marker-id');
                self.redraw();
                self.load_marker_settings(item_id);
                self.update_marker_form();
                $('#modal-edit-marker').modal();
            }
            if ($(e.target).closest('.list-item-window').length > 0) {
                item_id = $(e.target).closest('.list-item-window').data('window-id');
                self.redraw();
                self.load_window_settings(item_id);
                self.update_window_form();
                $('#modal-edit-window').modal();
            }
        });
        $(document).on('click', '#button-confirm-edit-marker', function() {
            self.update_marker_settings(item_id);
            self.update_marker_form();
            self.update_form();
            self.redraw();
        });
        $(document).on('click', '#button-confirm-edit-window', function() {
            self.update_window_settings(item_id);
            self.update_marker_form();
            self.update_form();
            self.redraw();
        });
        $(document).on('mouseover', '.list-item', function(e) {
            // get id
            var id = $(this).data('marker-id');

            if (hover_item_id != id) {
                hover_item_id = id;
                self.bounce_marker(hover_item_id);
            }
        });
        $(document).on('mouseout', '.list-item', function(e) {
            if ($(e.toElement).closest('.list-item').length > 0 &&
                $(e.toElement).closest('.list-item').data('marker-id') == hover_item_id)
            {
                return;
            }

            self.bounce_marker_stop(hover_item_id);
            hover_item_id = 0;
        });
    },
    Editor.prototype.redraw = function(cb) {
        var self = this;

        if (self.edit_markers_mode) {
            self.add_marker_mode_quit();
        }

        if (self.edit_info_windows_mode) {
            self.add_info_window_mode_quit();
        }

        $('#map-container').UberGoogleMaps(settings, function(map) {
            self.map = map;
            if (cb) {
                cb();
            }
        }, true);
    }

    // Main Form
    Editor.prototype.load_settings = function() {
        $('#input-instance-title').val(settings.title);
        $('#input-instance-shortcode').val(settings.shortcode);

        // 1. Map Position =====================

        // Position type
        if (settings.positionType == 'search') {
            $('#radio-map-position-manual').get(0).checked = false;
            $('#radio-map-position-search').get(0).checked = true;

            $('#radio-map-position-search').parent().button('toggle');

            $('#settings-group-position-search-query').show();
            $('#settings-group-position-manual').hide();
        }

        if (settings.positionType == 'manual') {
            $('#radio-map-position-manual').get(0).checked = true;
            $('#radio-map-position-search').get(0).checked = false;

            $('#radio-map-position-manual').parent().button('toggle');

            $('#settings-group-position-search-query').hide();
            $('#settings-group-position-manual').show();
        }

        // Lat
        $('#input-lat').val(settings.lat);

        // Lng
        $('#input-lng').val(settings.lng);

        // Zoom
        $('#input-zoom').val(settings.zoom);

        // Search query
        $('#input-search-query').val(settings.searchQuery);

        // 2. Markers ======================
        $('#checkbox-animate-markers').get(0).checked = parseInt(settings.animateMarkers, 10);

        // 3. Info Windows ======================
        $('#select-info-windows-open').val(settings.showInfoWindowsOn);

        // 4. Style ======================

        // Style type
        if (settings.style_type == 'default') {
            $('#radio-style-default').get(0).checked = true;
            $('#radio-style-preset').get(0).checked = false;
            $('#radio-style-custom').get(0).checked = false;

            $('#radio-style-default').parent().button('toggle');
        }
        if (settings.style_type == 'preset') {
            $('#radio-style-default').get(0).checked = false;
            $('#radio-style-preset').get(0).checked = true;
            $('#radio-style-custom').get(0).checked = false;

            $('#radio-style-preset').parent().button('toggle');
        }
        if (settings.style_type == 'custom') {
            $('#radio-style-default').get(0).checked = false;
            $('#radio-style-preset').get(0).checked = false;
            $('#radio-style-custom').get(0).checked = true;

            $('#radio-style-custom').parent().button('toggle');
        }

        // Style preset
        $('.style-preset').removeClass('selected');
        $('.style-preset[data-index="' + settings.style_index + '"]').addClass('selected');

        // Custom style array
        $('#textarea-style-array').val(settings.style_array_custom);

        // 5. Map size =====================
        $('#input-width').val(parseInt(settings.width, 10));
        $('#input-height').val(parseInt(settings.height, 10));
        if (parseInt(settings.responsive, 10) == 1) {
            $('#checkbox-responsive').get(0).checked = true;
        } else {
            $('#checkbox-responsive').get(0).checked = false;
        }

        // 6. Settings =====================
        // Language
        $('#select-language').val(settings.language);

        // Auto Sign-In
        if (parseInt(settings.auto_sign_in, 10) == 1) {
            $('#checkbox-auto-sign-in').get(0).checked = true;
        } else {
            $('#checkbox-auto-sign-in').get(0).checked = false;
        }

        // Fullscreen enabled
        if (parseInt(settings.fullscreen_enabled, 10) == 1) {
            $('#checkbox-fullscreen-enabled').get(0).checked = true;
        } else {
            $('#checkbox-fullscreen-enabled').get(0).checked = false;
        }

        // Disable Scroll
        if (parseInt(settings.disable_scroll, 10) == 1) {
            $('#checkbox-disable-scroll').get(0).checked = true;
        } else {
            $('#checkbox-disable-scroll').get(0).checked = false;
        }

        // Load API
        if (parseInt(settings.load_api, 10) == 1) {
            $('#checkbox-load-api').get(0).checked = true;
        } else {
            $('#checkbox-load-api').get(0).checked = false;
        }
    };
    Editor.prototype.update_form = function() {
        var self = this;

        $('#help-block-shortcode').html('Full shortcode: <br><code>[ubergooglemaps name="' + $('#input-instance-shortcode').val() + '"]</code>');

        // Map position
        if ($('#radio-map-position-manual').get(0).checked == true) {
            $('#settings-group-position-manual').show();
            $('#settings-group-position-search-query').hide();
        }

        if ($('#radio-map-position-search').get(0).checked == true) {
            $('#settings-group-position-manual').hide();
            $('#settings-group-position-search-query').show();
        }

        // Markers list
        var html = '';
        for (marker_id in markers) {
            html += '<div class="list-item list-item-marker" data-marker-id="' + marker_id + '">' +
                    '   <div class="list-item-title pull-left">' + markers[marker_id].title + '</div>' +
                    '   <span class="glyphicon glyphicon-remove pull-right button-list-item-delete"></span>' +
                    '   <span class="glyphicon glyphicon-edit pull-right button-list-item-edit"></span>' +
                    '</div>';
        }

        $('#marker-list-container').html(html);

        // Info Windows list
        var html = '';
        for (window_id in info_windows) {
            html += '<div class="list-item list-item-window" data-window-id="' + window_id + '" data-marker-id="' + info_windows[window_id].marker_id + '">' +
                    '   <div class="list-item-title pull-left">Attached to: ' + info_windows[window_id].title + '</div>' +
                    '   <span class="glyphicon glyphicon-remove pull-right button-list-item-delete"></span>' +
                    '   <span class="glyphicon glyphicon-edit pull-right button-list-item-edit"></span>' +
                    '</div>';
        }

        // Style
        if ($('#radio-style-default').get(0).checked) {
            $('#container-style-default').show();
            $('#container-style-preset').hide();
            $('#container-style-custom').hide();
        }
        if ($('#radio-style-preset').get(0).checked) {
            $('#container-style-default').hide();
            $('#container-style-preset').show();
            $('#container-style-custom').hide();
        }
        if ($('#radio-style-custom').get(0).checked) {
            $('#container-style-default').hide();
            $('#container-style-preset').hide();
            $('#container-style-custom').show();
        }

        $('#window-list-container').html(html);
    };
    Editor.prototype.update_settings = function() {
        var self = this;

        settings.title = $('#input-instance-title').val();
        settings.shortcode = $('#input-instance-shortcode').val();

        // Map position
        if ($('#radio-map-position-manual').get(0).checked == true) {
            settings.positionType = 'manual';
        }

        if ($('#radio-map-position-search').get(0).checked == true) {
            settings.positionType = 'search';
        }

        settings.lat = $('#input-lat').val();
        settings.lng = $('#input-lng').val();
        settings.zoom = $('#input-zoom').val();

        settings.searchQuery = $('#input-search-query').val();

        // Markers

        // Info Windows
        // Clean the current array of markers and info windows
        settings.markers = new Array();
        settings.infoWindows = new Array();

        // Copy the markers to settings
        for (marker_id in markers) {
            settings.markers.push(markers[marker_id].get_model());
        }

        // Copy the info windows to settings
        for (window_id in info_windows) {
            settings.infoWindows.push(info_windows[window_id].get_model());
        }

        // 2. Markers ======================
        if ($('#checkbox-animate-markers').get(0).checked) {
            settings.animateMarkers = 1;
        } else {
            settings.animateMarkers = 0;
        }

        // 3. Info Windows ======================
        settings.showInfoWindowsOn = $('#select-info-windows-open').val();

        // 4. Style ======================
        // Style type
        if ($('#radio-style-default').get(0).checked) {
            settings.style_type = 'default';
        }
        if ($('#radio-style-preset').get(0).checked) {
            settings.style_type = 'preset';
        }
        if ($('#radio-style-custom').get(0).checked) {
            settings.style_type = 'custom';
        }

        // Style array
        settings.style_index = $('.style-preset.selected').data('index');
        settings.style_array = uber_google_maps_styles[settings.style_index];

        // Custom style array
        settings.style_array_custom = $('#textarea-style-array').val();

        // 5. Map Size ======================
        settings.width = parseInt($('#input-width').val(), 10);
        settings.height = parseInt($('#input-height').val(), 10);
        if ($('#checkbox-responsive').get(0).checked) {
            settings.responsive = 1;
        } else {
            settings.responsive = 0;
        }

        // 6. Settings =====================

        // Language
        settings.language = $('#select-language').val();

        // Auto Sign-In
        if ($('#checkbox-auto-sign-in').get(0).checked) {
            settings.auto_sign_in = 1;
        } else {
            settings.auto_sign_in = 0;
        }

        // Fullscreen
        if ($('#checkbox-fullscreen-enabled').get(0).checked) {
            settings.fullscreen_enabled = 1;
        } else {
            settings.fullscreen_enabled = 0;
        }

        // Disable scroll
        if ($('#checkbox-disable-scroll').get(0).checked) {
            settings.disable_scroll = 1;
        } else {
            settings.disable_scroll = 0;
        }

        // Disable scroll
        if ($('#checkbox-load-api').get(0).checked) {
            settings.load_api = 1;
        } else {
            settings.load_api = 0;
        }
    };

    // Marker form
    Editor.prototype.load_marker_settings = function(marker_id) {
        var self = this;
        var marker = markers[marker_id];

        // Title
        $('#input-marker-title').val(marker.title);

        // Icon type
        if (marker.icon == 'default') {
            $('#radio-marker-icon-default').get(0).checked = true;
            $('#radio-marker-icon-preset').get(0).checked = false;
            $('#radio-marker-icon-custom').get(0).checked = false;

            $('#radio-marker-icon-default').parent().button('toggle');
        }
        if (marker.icon == 'preset') {
            $('#radio-marker-icon-default').get(0).checked = false;
            $('#radio-marker-icon-preset').get(0).checked = true;
            $('#radio-marker-icon-custom').get(0).checked = false;

            $('#radio-marker-icon-preset').parent().button('toggle');
        }
        if (marker.icon == 'custom') {
            $('#radio-marker-icon-default').get(0).checked = false;
            $('#radio-marker-icon-preset').get(0).checked = false;
            $('#radio-marker-icon-custom').get(0).checked = true;

            $('#radio-marker-icon-custom').parent().button('toggle');
        }

        // Icon URL
        $('#input-marker-icon-url').val(marker.icon_url);

        // Select the icon
            $('.marker-icon-wrap').removeClass('selected');
            $('.marker-icon-wrap').each(function() {
                if ($(this).find('img').attr('src') == marker.icon_url) {
                    $(this).addClass('selected');
                }
            });
    }
    Editor.prototype.update_marker_form = function() {
        if ($('#radio-marker-icon-default').get(0).checked) {
            $('#marker-icons-preset').hide();
            $('#marker-icons-custom').hide();
        }
        if ($('#radio-marker-icon-preset').get(0).checked) {
            $('#marker-icons-preset').show();
            $('#marker-icons-custom').hide();
        }
        if ($('#radio-marker-icon-custom').get(0).checked) {
            $('#marker-icons-preset').hide();
            $('#marker-icons-custom').show();
        }

        if ($('#input-marker-icon-url').val() && $('#input-marker-icon-url').val().length > 0) {
            $('#marker-custom-icon').attr('src', $('#input-marker-icon-url').val());
        }
    }
    Editor.prototype.update_marker_settings = function(marker_id) {
        var marker = markers[marker_id];

        // Title
        marker.title = $('#input-marker-title').val();

        // Icon type
        if ($('#radio-marker-icon-default').get(0).checked) {
            marker.icon = 'default';
        }
        if ($('#radio-marker-icon-preset').get(0).checked) {
            marker.icon = 'preset';
        }
        if ($('#radio-marker-icon-custom').get(0).checked) {
            marker.icon = 'custom';
        }

        // Icon URL
        marker.icon_url = $('#input-marker-icon-url').val();

        this.update_settings();
    }

    // Info Window form
    Editor.prototype.load_window_settings = function(marker_id) {
        var info_window = info_windows[marker_id];

        $('#input-window-title').val(info_window.title);
        $('#input-window-subtitle').val(info_window.subtitle);
        $('#input-window-phone').val(info_window.phone);
        $('#input-window-address').val(info_window.address);
        $('#input-window-email').val(info_window.email);
        $('#input-window-web').val(info_window.web);
        $('#textarea-window-content').val(info_window.content);

        $('#checkbox-window-open-on-load').get(0).checked = parseInt(info_window.open, 10);
    }
    Editor.prototype.update_window_form = function() {

    }
    Editor.prototype.update_window_settings = function(marker_id) {
        var info_window = info_windows[marker_id];

        info_window.title = $('#input-window-title').val();
        info_window.subtitle = $('#input-window-subtitle').val();
        info_window.phone = $('#input-window-phone').val();
        info_window.address = $('#input-window-address').val();
        info_window.email = $('#input-window-email').val();
        info_window.web = $('#input-window-web').val();
        info_window.content = $('#textarea-window-content').val();

        if ($('#checkbox-window-open-on-load').get(0).checked) {
            info_window.open = 1;
        } else {
            info_window.open = 0;
        }

        this.update_settings();
    }

    // Map position actions
    Editor.prototype.sample_position = function() {
        var pos = this.map.getCenter();
        settings.lat = pos.lat();
        settings.lng = pos.lng();
        settings.zoom = this.map.getZoom();
    }
    Editor.prototype.place_search = function() {
        var self = this;

        var request = {
            query : $('#input-search-query').val()
        }

        service = new google.maps.places.PlacesService(self.map);
        service.textSearch(request, function(response) {
            if (response.length > 0) {
                $('#input-search-query').val(response[0].formatted_address);
                settings.searchQuery = response[0].formatted_address;
                settings.lat = response[0].geometry.location.lat();
                settings.lng = response[0].geometry.location.lng();

                self.load_settings();
                self.redraw();
            }
        });
    }

    // Marker actions
    Editor.prototype.add_marker_mode = function() {
        if (this.edit_markers_mode) {
            this.add_marker_mode_quit();
            return;
        }

        if (this.edit_info_windows_mode) {
            this.add_info_window_mode_quit();
        }

        $('.button-active').removeClass('button-active');
        $('#button-add-marker').addClass('button-active');

        $('#map-container-wrap').addClass('add-marker-mode');

        // Clean the current array of markers
        settings.markers = new Array();
        settings.infoWindows = new Array();

        // Redraw the map to erase the current markers
        this.redraw();

        // Place the markers on the map
        for (marker_id in markers) {
            markers[marker_id].attach(true);
            google.maps.event.clearInstanceListeners(markers[marker_id].marker);
            google.maps.event.addListener(markers[marker_id].marker, 'rightclick', editor.remove_marker);
        }

        // Close all windows
        for (window_id in info_windows) {
            info_windows[window_id].hide();
        }

        google.maps.event.addListener(this.map, 'click', this.add_marker);

        this.edit_markers_mode = true;
    }
    Editor.prototype.add_marker_mode_quit = function() {
        $('.button-active').removeClass('button-active');
        $('#map-container-wrap').removeClass('add-marker-mode');

        // Rebuild the marker and info_windows arrays with the new marker ids
        for (marker_id in markers) {
            var marker = markers[marker_id];
            marker.lat = marker.marker.getPosition().lat();
            marker.lng = marker.marker.getPosition().lng();
            marker.id = marker.lat + '_' + marker.lng;

            delete markers[marker_id];
            markers[marker.id] = marker;

            for (window_id in info_windows) {
                if (info_windows[window_id].marker_id == marker_id) {
                    info_windows[window_id].marker_id = marker.id;
                }
            }
        }

        this.update_form();
        this.update_settings();

        this.edit_markers_mode = false;
        this.redraw();
    }
    Editor.prototype.add_marker = function(event) {
        var position = event.latLng;

        var marker = new Marker(position.lat(), position.lng());
        marker.attach(true);
        google.maps.event.addListener(marker.marker, 'rightclick', editor.remove_marker);

        editor.update_form();
    }
    Editor.prototype.remove_marker = function(event) {
        var position = event.latLng;
        var marker_id = position.lat() + '_' + position.lng();

        markers[marker_id].delete();
        editor.update_form();
    }
    Editor.prototype.delete_marker_from_list = function(marker_id) {
        var self = this;
        markers[marker_id].delete();
        self.update_form();
        self.update_settings();
        self.redraw();
    }
    Editor.prototype.bounce_marker = function(marker_id) {
        if (this.edit_markers_mode || this.edit_info_windows_mode) {
            markers[marker_id].marker.setAnimation(google.maps.Animation.BOUNCE);
        } else {
            $.uber_google_maps_markers[marker_id].setAnimation(google.maps.Animation.BOUNCE);
        }
    }
    Editor.prototype.bounce_marker_stop = function(marker_id) {
        if (this.edit_markers_mode || this.edit_info_windows_mode) {
            markers[marker_id].marker.setAnimation(null);
        } else {
            $.uber_google_maps_markers[marker_id].setAnimation(null);
        }
    }

    // Window actions
    Editor.prototype.add_info_window_mode = function() {
        if (this.edit_markers_mode) {
            this.add_marker_mode_quit();
        }

        if (this.edit_info_windows_mode) {
            this.add_info_window_mode_quit();
            return;
        }

        $('.button-active').removeClass('button-active');
        $('#button-add-info-window').addClass('button-active');

        $('#map-container-wrap').addClass('add-info-windows-mode');

        // Clean the current array of markers
        settings.markers = new Array();
        settings.infoWindows = new Array();

        // Redraw the map to erase the current markers
        this.redraw();

        // Place the markers on the map
        for (marker_id in markers) {
            markers[marker_id].attach(false);
            google.maps.event.clearInstanceListeners(markers[marker_id].marker);
            google.maps.event.addListener(markers[marker_id].marker, 'click', editor.add_info_window);
            google.maps.event.addListener(markers[marker_id].marker, 'rightclick', editor.remove_info_window);
        }

        // Open all windows
        for (window_id in info_windows) {
            info_windows[window_id].show();
        }

        this.edit_info_windows_mode = true;
    }
    Editor.prototype.add_info_window_mode_quit = function() {
        $('.button-active').removeClass('button-active');
        $('#map-container-wrap').removeClass('add-info-windows-mode');

        this.update_settings();

        this.edit_info_windows_mode = false;
        this.redraw();
    }
    Editor.prototype.add_info_window = function(event) {
        var position = event.latLng;
        var marker_id = position.lat() + '_' + position.lng();

        // does a window exist for that marker?
        for (window_id in info_windows) {
            if (info_windows[window_id].marker_id == marker_id) {
                info_windows[window_id].show();
                return;
            }
        }

        var info_window = new InfoWindow(marker_id);
        info_window.show();

        editor.update_form();
    }
    Editor.prototype.remove_info_window = function(event) {
        var position = event.latLng;
        var marker_id = position.lat() + '_' + position.lng();

        for (window_id in info_windows) {
            if (info_windows[window_id].marker_id == marker_id) {
                info_windows[window_id].delete();
            }
        }

        editor.update_form();
    }
    Editor.prototype.delete_window_from_list = function(window_id) {
        var self = this;
        info_windows[window_id].delete();
        self.update_form();
        self.update_settings();
        self.redraw();
    }

    function Marker(lat, lng) {
        this.id = undefined;
        this.lat = lat;
        this.lng = lng;
        this.title = "Untitled Marker";
        this.marker = undefined;

        this.icon = 'default';
        this.icon_url = default_marker_icon_url;

        this.clickListener = undefined;
        this.rightClickListener = undefined;

        this.init();
    }
    Marker.prototype.init = function() {
        this.id = this.lat + '_' + this.lng;
        markers[this.id] = this;

        var options = {
            position : { lat : parseFloat(this.lat), lng : parseFloat(this.lng) },
            title : this.title,
            draggable : true
        };

        if (this.icon != 'default') {
            options.icon = this.icon_url;
        }

        this.marker = new google.maps.Marker(options);
    }
    Marker.prototype.get_model = function() {
        this.lat = this.marker.getPosition().lat();
        this.lng = this.marker.getPosition().lng();

        return {
            id : this.id,
            lat : parseFloat(this.lat),
            lng : parseFloat(this.lng),
            icon : this.icon,
            icon_url : this.icon_url,
            title : this.title
        }
    }
    Marker.prototype.attach = function(draggable) {
        var options = {
            position : { lat : parseFloat(this.lat), lng : parseFloat(this.lng) },
            title : this.title,
            draggable : true
        };

        if (this.icon != 'default') {
            options.icon = this.icon_url;
        }

        this.marker = new google.maps.Marker(options);

        this.marker.setMap(editor.map);
        this.marker.setDraggable(draggable);
    }
    Marker.prototype.delete = function() {
        // Remove the window attached to this marker
        for (window_id in info_windows) {
            if (info_windows[window_id].marker_id == this.id) {
                info_windows[window_id].hide();
                delete info_windows[window_id];
            }
        }

        this.marker.setMap(null);
        delete markers[this.id];
    }

    function InfoWindow(marker_id) {
        this.id = undefined;
        this.marker_id = marker_id;
        this.info_window = undefined;
        this.open = 0;

        this.title = 'Title';
        this.subtitle = 'Subtitle';
        this.phone = '++2 1234 5678';
        this.address = 'John Smith Str. 1, Melbourne';
        this.email = 'john@smith.com';
        this.web = 'johnsmith.com';
        this.content = '<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>';

        this.init();
    }
    InfoWindow.prototype.init = function() {
        this.id = Math.floor(Math.random() * 100000) + 1;
        info_windows[this.id] = this;

        var content = '<div class="uber-google-maps-info-window-content-wrap">';

        if (this.title.length > 0) {
            content += '<div class="uber-google-maps-info-window-field uber-google-maps-title">' + this.title + '</div>';
        }
        if (this.subtitle.length > 0) {
            content += '<div class="uber-google-maps-info-window-field uber-google-maps-subtitle">' + this.subtitle + '</div>';
        }
        if (this.phone.length > 0) {
            content += '<div class="uber-google-maps-info-window-field uber-google-maps-phone">' + this.phone + '</div>';
        }
        if (this.address.length > 0) {
            content += '<div class="uber-google-maps-info-window-field uber-google-maps-address">' + this.address + '</div>';
        }
        if (this.email.length > 0) {
            content += '<div class="uber-google-maps-info-window-field uber-google-maps-email">' + this.email + '</div>';
        }
        if (this.web.length > 0) {
            content += '<div class="uber-google-maps-info-window-field uber-google-maps-web">' + this.web + '</div>';
        }
        if (this.content.length > 0) {
            content += this.content;
        }

        content += '</div>';

        this.info_window = new google.maps.InfoWindow({
            content : content
        });
    }
    InfoWindow.prototype.get_model = function() {
        return {
            id : this.id,
            marker_id : this.marker_id,
            title : this.title,
            subtitle : this.subtitle,
            phone : this.phone,
            address : this.address,
            email : this.email,
            web : this.web,
            content : this.content,
            open : this.open
        }
    }
    InfoWindow.prototype.show = function() {
        this.info_window.open(editor.map, markers[this.marker_id].marker);
    }
    InfoWindow.prototype.hide = function() {
        this.info_window.close();
    }
    InfoWindow.prototype.delete = function() {
        this.hide();
        delete info_windows[this.id];
    }

})( jQuery, window, document );
