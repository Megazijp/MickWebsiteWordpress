<?php /* Template Name: Agenda */ ?>
<?php 
$agenda = array();

global $post;
$args = array( 'category_name' => 'Agenda' );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post );


array_push($agenda, (object) array('datum' => get_field('datum'), 'tijd' => get_field('tijd'), 'locatie' => get_field('locatie')));

endforeach; 
wp_reset_postdata();

usort($agenda, function($a, $b) {
    return strtotime($a->datum) - strtotime($b->datum);
});
?> 
<?php get_header(); ?>
        <div class="section">
            <div class="container backcont timbg">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="timcolor">Agenda</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/tim.png" class="img-responsive piccentre">
                    </div>
                    <div class="col-md-9 col-sm-10">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="timcolor">Datum</th>
                                    <th class="timcolor">Tijd</th>
                                    <th class="timcolor">Event</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ( $agenda as $post ) : ?>

                                <tr>
                                    <td>
                                        <span class="dayofmonth"><?php echo date('d', strtotime($post->datum)); ?></span>
                                        <span class="dayofweek"><?php echo date('l', strtotime($post->datum)); ?></span>
                                        <br>
                                        <span class="shortdate text-muted"><?php echo date('F', strtotime($post->datum));?>, <?php echo date('o', strtotime($post->datum));?></span>
                                    </td>
                                    <td><?php echo $post->tijd ?></td>
                                    <td><?php echo $post->locatie; ?></td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    

</body></html>