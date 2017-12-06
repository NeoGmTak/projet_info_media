;(function ( $, window, document, undefined ) {
    var settings = undefined;

    $.uber_google_maps_get_stored_settings = function() {
        return settings;
    }

    $.uber_google_maps_open_image_upload = function(name) {
        upload_image(name);
    }

    $(document).ready(function() {
        ui_add_buttons();
        ui_add_modals();
        ui_hide_shortcode();

        // Events
        $("#button-save").on('click', function() {
            save();
        });
        $("#button-load").on('click', function() {
            load();
        });
        $("#button-generate-jquery").on('click', function() {
            generate_jquery();
        });
        $('#button-load-confirm').on('click', function() {
            load_confirm();
        });
        $('#button-confirm-modal-image-url').on('click', function() {
            upload_image_confirm();
        });
    });

    function ui_add_buttons() {
        // Remove "Back" button
        $('#button-back-to-main-options').remove();

        // Add button - "Load"
        $('#button-save-instance').after('<button class="btn btn-default btn-lg pull-left" id="button-load">Load</button>');

        // Add button - "Save"
        $('#button-save-instance').after('<button class="btn btn-default btn-lg pull-left" id="button-save">Save</button>');

        // Add button - "Generate jQuery"
        $('#button-save-instance').after('<button class="btn btn-primary btn-lg pull-left" id="button-generate-jquery">Generate jQuery</button>');

        // Remove "Save Instance" button
        $('#button-save-instance').remove();
    }

    function ui_add_modals() {
        // Generate jQuery
        var modal = '';
        modal += '<div class="modal fade" id="modal-generate-jquery">';
        modal +=     '<div class="modal-dialog">';
        modal +=         '<div class="modal-content">';
        modal +=             '<div class="modal-header">';
        modal +=                 '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
        modal +=                 '<h4 class="modal-title">jQuery Code</h4>';
        modal +=             '</div>';
        modal +=             '<div class="modal-body">';
        modal +=                 '<textarea id="textarea-generated-jquery" style="width: 100%; height: 200px; font-family: monospace; font-size: 12px;"></textarea>';
        modal +=                 '<p class="bg-info" style="font-family: Roboto, sans-serif; font-size: 12px; padding: 10px; margin-top: 20px;"><span class="glyphicon glyphicon-info-sign"></span> Paste this code in your site\'s javascript file, or before the closing "body" tag inside a "script" tag.</p>';
        modal +=             '</div>';
        modal +=             '<div class="modal-footer">';
        modal +=                 '<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>';
        modal +=             '</div>';
        modal +=         '</div><!-- /.modal-content -->';
        modal +=     '</div><!-- /.modal-dialog -->';
        modal += '</div><!-- /.modal -->';
        $('body').append(modal);

        // Save
        var modal = '';
        modal += '<div class="modal fade" id="modal-save">';
        modal +=     '<div class="modal-dialog">';
        modal +=         '<div class="modal-content">';
        modal +=             '<div class="modal-header">';
        modal +=                 '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
        modal +=                 '<h4 class="modal-title">Save</h4>';
        modal +=             '</div>';
        modal +=             '<div class="modal-body">';
        modal +=                 '<textarea id="textarea-save" style="width: 100%; height: 200px; font-family: monospace; font-size: 12px;"></textarea>';
        modal +=                 '<p class="bg-info" style="font-family: Roboto, sans-serif; font-size: 12px; padding: 10px; margin-top: 20px;"><span class="glyphicon glyphicon-info-sign"></span> Save this code in a text file.</p>';
        modal +=             '</div>';
        modal +=             '<div class="modal-footer">';
        modal +=                 '<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>';
        modal +=             '</div>';
        modal +=         '</div><!-- /.modal-content -->';
        modal +=     '</div><!-- /.modal-dialog -->';
        modal += '</div><!-- /.modal -->';
        $('body').append(modal);

        // Load
        var modal = '';
        modal += '<div class="modal fade" id="modal-load">';
        modal +=     '<div class="modal-dialog">';
        modal +=         '<div class="modal-content">';
        modal +=             '<div class="modal-header">';
        modal +=                 '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
        modal +=                 '<h4 class="modal-title">Load</h4>';
        modal +=             '</div>';
        modal +=             '<div class="modal-body">';
        modal +=                 '<textarea id="textarea-load" style="width: 100%; height: 200px; font-family: monospace; font-size: 12px;"></textarea>';
        modal +=                 '<p id="error-invalid-code-paragraph" class="bg-danger" style="display: none; font-family: Roboto, sans-serif; font-size: 12px; padding: 10px; margin-top: 20px;"><span class="glyphicon glyphicon-remove"></span> This code is not valid.</p>';
        modal +=                 '<p class="bg-info" style="font-family: Roboto, sans-serif; font-size: 12px; padding: 10px; margin-top: 20px;"><span class="glyphicon glyphicon-info-sign"></span> Paste here code that you generated from the "Save" window.</p>';
        modal +=             '</div>';
        modal +=             '<div class="modal-footer">';
        modal +=                 '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
        modal +=                 '<button type="button" class="btn btn-primary" id="button-load-confirm">Load</button>';
        modal +=             '</div>';
        modal +=         '</div><!-- /.modal-content -->';
        modal +=     '</div><!-- /.modal-dialog -->';
        modal += '</div><!-- /.modal -->';
        $('body').append(modal);
    }

    function ui_hide_shortcode() {
        $('#input-instance-shortcode').closest('.form-group').hide();
    }

    function save() {
        $('#modal-save').modal();

        $('#textarea-save').val(JSON.stringify($.uber_google_maps_get_current_settings()));
    }

    function load() {
        $('#modal-load').modal();
    }

    function generate_jquery() {
        $('#modal-generate-jquery').modal();
        var generated_settings = JSON.stringify($.uber_google_maps_get_current_settings());
        var generated_jquery = '$("#map-container").UberGoogleMaps('+ generated_settings +');';
        var jquery = ';(function ( $, window, document, undefined ) { $(document).ready(function() {' + generated_jquery + '}); })( jQuery, window, document );';
        $('#textarea-generated-jquery').val(jquery);
    }

    function load_confirm() {
        var code = $('#textarea-load').val();
        var success = true;

        try {
            eval($.parseJSON(code));
        } catch(err) {
            console.log('Invalid Code!');
            console.log(err);

            success = false;
        }

        if (!success) {
            $('#error-invalid-code-paragraph').show();
        } else {
            $('#error-invalid-code-paragraph').hide();
            $('#modal-load').modal('hide');

            settings = $.parseJSON(code);
            $.uber_google_maps_init_editor();
        }
    }

    function upload_image(name) {
        $('#modal-image-url').modal();
        $('#modal-image-url').find('.btn-primary').data('input-id', name);
    }

    function upload_image_confirm() {
        console.log('confirm');
        var input_id = $('#modal-image-url').find('.btn-primary').data('input-id');
        // $('#' + input_id).val($('#input-modal-image-url').val());
        $.uber_google_maps_uploaded_image(input_id, $('#input-modal-image-url').val());
    }
})( jQuery, window, document );
