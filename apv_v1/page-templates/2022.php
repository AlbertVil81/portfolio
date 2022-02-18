<?php /* Template Name: 2022 */ ?>

<?php get_header(); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col s12 m12 l10 offset-l1">
                <div class="col s12 m12 l6">
                    <div class="box-stats">
                        <div class="center-align">
                            <span><b>Campeonato de constructores</b></span>
                            <div class="divider"></div>
                        </div>
                        <?php  $count = 0 ?>
                        <?php  $team = get_field( "escuderia", 149 ); ?>
                        <?php  $teams = json_decode($team, true); ?>
                            <?php foreach ($teams as $row){ ?>
                                <?php $count++ ?>
                                <div class="row no-margin">
                                    <div class="col s6 m6 l6">
                                        <p><?php echo $count; echo "- "  ?><?php echo $row["escuderia"]; ?></p>
                                    </div>
                                    <div class="col s6 m6 l6">
                                        <div class="center-align">
                                            <p class="align-left"><?php echo $row['puntaje']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <?php
                            $args = array(
                                'numberposts' => 1
                            );
                            
                            $latest = get_posts( $args );
                        ?>
                        <div class="">
                        <h4>Te podría interesar</h4>
                            <?php foreach ($latest as $row){ ?>
                                <div class="box-blog-carousel">
                                    <a class="" href="<?php echo get_permalink( $row->ID ); ?>">
                                        <img src="<?php echo get_the_post_thumbnail_url( $row->ID, $size = 'full' ); ?>" class="responsive-img blog-img">
                                        <div class="box-blog-text">
                                            <div class="space20"></div>
                                            <span class="bold box"><?php echo $row->post_title; ?></span>
                                            <div class="space20"></div>
                                            <span class="truncate"><?php echo $row->post_excerpt; ?></span>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="box-stats">
                        <div class="center-align">
                            <span><b>Campeonato de Pilotos</b></span>
                            <div class="divider"></div>
                        </div>
                        <?php  $count = 0 ?>
                        <?php  $driver = get_field( "piloto", 148 ); ?>
                        <?php  $drivers = json_decode($driver, true); ?>
                        <?php foreach ($drivers as $row){ ?>
                            <?php $count++ ?>
                            <div class="row no-margin">
                                <div class="col s6 m6 l6">
                                    <p><?php echo $count; echo "- "  ?><?php echo $row["piloto"]; ?></p>
                                </div>
                                <div class="col s6 m6 l6">
                                    <div class="center-align">
                                        <p class="align-left"><?php echo $row['puntaje']; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>