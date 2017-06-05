<?php /* Template Name: Homepage */ ?>
<?php get_header('home'); ?>
      <div class="cover-image" style="background-image : url('<?php echo get_template_directory_uri(); ?>/back.jpg')"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/logo.png" class="center-block img-responsive toplogo" width="30%" style="opacity: 0.85; margin-bottom: 10px;">
            <p><?php the_field('onder_titel'); ?></p>
            <br>
            <br>
            <a class="btn btn-lg btn-default" href="#pageBegin" id="scrollButton">Ontdek de band<br></a>
          </div>
        </div>
      </div>
    </div>
    <div class="section" id="pageBegin">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">De Band</h1>
            <p class="text-center"><?php the_field('band_ondertitel'); ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-2">
            <img src="<?php echo get_template_directory_uri(); ?>/roundmick.png" class="img-circle img-responsive piccentre">
          </div>
          <div class="col-sm-4">
            <h3 class="text-left">Mick Roche</h3>
            <p class="text-left"><?php the_field('mick_bio'); ?></p>
          </div>
          <div class="col-sm-2">
            <img src="<?php echo get_template_directory_uri(); ?>/roundtim.png" class="img-circle img-responsive piccentre">
          </div>
          <div class="col-sm-4">
            <h3 class="text-left">Tim Molleman</h3>
            <p class="text-left"><?php the_field('tim_bio'); ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-2">
            <img src="<?php echo get_template_directory_uri(); ?>/roundmark.png" class="img-circle img-responsive piccentre">
          </div>
          <div class="col-sm-4">
            <h3 class="text-left">Mark Zijp</h3>
            <p class="text-left"><?php the_field('mark_bio'); ?></p>
          </div>
          <div class="col-sm-2">
            <img src="<?php echo get_template_directory_uri(); ?>/rounderik.png" class="img-circle img-responsive piccentre">
          </div>
          <div class="col-sm-4 text-center">
            <h3 class="text-left">Erik Bloem</h3>
            <p class="text-left"><?php the_field('erik_bio'); ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="<?php echo get_template_directory_uri(); ?>/mickmuziek.html" class="linkb2b"><img src="<?php echo get_template_directory_uri(); ?>/menu1.jpg" class="img-responsive"></a>
            <h2 class="">
              <a href="<?php echo get_template_directory_uri(); ?>/mickmuziek.html" class="linkb2b">Muziek</a>
            </h2>
            <p><?php the_field('muziek_tekst'); ?></p>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="<?php echo get_template_directory_uri(); ?>/mickagenda.html" class="linkb2b"><img src="<?php echo get_template_directory_uri(); ?>/menu3.jpg" class="img-responsive"></a>
            <h2>
              <a href="<?php echo get_template_directory_uri(); ?>/mickagenda.html" class="linkb2b">Agenda</a>
            </h2>
            <p><?php the_field('agenda_tekst'); ?></p>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="<?php echo get_template_directory_uri(); ?>/mickmedia.html" class="linkb2b"><img src="<?php echo get_template_directory_uri(); ?>/menu2.jpg" class="img-responsive img-rounded"></a>
            <h2>
              <a href="<?php echo get_template_directory_uri(); ?>/mickmedia.html" class="linkb2b">Media</a>
            </h2>
            <p><?php the_field('media_tekst'); ?></p>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="<?php echo get_template_directory_uri(); ?>/mickcontact.html"><img src="<?php echo get_template_directory_uri(); ?>/menu4.jpg" class="img-responsive"></a>
            <h2>
              <a href="<?php echo get_template_directory_uri(); ?>/mickcontact.html" class="linkb2b">Contact</a>
            </h2>
            <p><?php the_field('contact_tekst'); ?></p>
          </div>
        </div>
      </div>
    </div>
    <footer class="section section-primary">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h1>MICK</h1>
            <p><?php the_field('footer_tekst'); ?></p>
          </div>
          <div class="col-sm-6">
            <p class="text-info text-right">
              <br>
              <br>
            </p>
            <div class="row">
              <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 hidden-xs text-right">
                <a href="#"><i class="fa fa-3x fa-fw text-inverse fa-facebook"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw text-inverse fa-instagram"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw hub text-inverse fa-envelope"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script>
      $(document).ready(function(){
                        $('body').scrollspy({target: ".navbar", offset: 50});   
                    
                        $("#scrollButton").on('click', function(event) {
                            if (this.hash !== "") {
                                event.preventDefault();
                                
                                var hash = this.hash;
                                $('html, body').animate({
                                    scrollTop: $(hash).offset().top
                                }, 800, 'swing', function(){
                                    //window.location.hash = hash;
                                });
                            }
                        });
                    });
    </script>
  

</body></html>
