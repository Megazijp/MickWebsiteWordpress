<html><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo get_template_directory_uri(); ?>/mickstyle.css" rel="stylesheet" type="text/css">
    </head><body>
        <div class="navbar navbar-default navbar-static-top menutop">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand brandtype" href="/home"><span>MICK</span></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li <?php if ( is_page_template( 'index.php' ) ) {echo 'class="active"';} ?>>
                            <a href="/home">Home</a>
                        </li>
                        <li <?php if ( is_page_template( 'mickmuziek.php' ) ) {echo 'class="active"';} ?>>
                            <a href="/muziek" class="mickcolor">Muziek<br></a>
                        </li>
                        <li <?php if ( is_page_template( 'mickagenda.php' ) ) {echo 'class="active"';} ?>>
                            <a href="/agenda" class="timcolor">Agenda</a>
                        </li>
                        <li <?php if ( is_page_template( 'mickmedia.php' ) ) {echo 'class="active"';} ?>>
                            <a href="/media" class="markcolor">Media</a>
                        </li>
                        <li <?php if ( is_page_template( 'mickcontact.php' ) ) {echo 'class="active"';} ?>>
                            <a href="/contact" class="erikcolor">Contact<br class="erikcolor"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>