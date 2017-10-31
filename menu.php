<!-- Code menu -->
<div class="container">
    <div class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <!-- Sandwich button for mobile -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                <a class="navbar-brand">Titre</a>
            </div>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav">
                    <li><a href="accueil.html">Accueil</a></li>
                    <li><a href="culture.html">Culture</a></li>
                    <li><a href="activites.html">Activités</a></li>
                    <li><a href="ouManger.html">Où manger ?</a></li>
                    <li><a href="ouDormir.html">Où dormir ?</a></li>
                    <li><a href="galeriePhoto.html">Galerie photos</a></li>
                </ul>
            </div>
        </div> <!-- end container-fluid -->
    </div>
</div> <!-- end container -->

<script>
    $('a[href^="#"]').click(function () {
        var elemId = $(this).attr("href");
        var parentLi = $(this).parent();

        //Change active item for animation
        if (!$(parentLi).hasClass('active')) {
            $('li.active').removeClass('active');
            $(parentLi).addClass('active');
        }

        //Navbar animation
        offsetTop = $(parentLi).offset().top - $('#btn').offset().top;
        offsetLeft = $(parentLi).offset().left - $('#btn').offset().left;

        $('.li-background').animate({
            top: offsetTop,
            left: offsetLeft,
            right: $('#btn').width() - $(parentLi).width() - offsetLeft,
            bottom: $('#btn').height() - $(parentLi).height() - offsetTop
        }, 'slow', 'linear');

        $('.li-underline').animate({
            top: offsetTop,
            left: offsetLeft,
            right: $('#btn').width() - $(parentLi).width() - offsetLeft,
            bottom: $('#btn').height() - $(parentLi).height() - offsetTop
        }, 'slow', 'linear');
    }
</script>