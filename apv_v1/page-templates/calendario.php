<?php /* Template Name: Calendario */ ?>

<?php get_header(); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col s12 m12 l6 offset-l3">
                <h4>Siguiente carrera</h4>
                <div class="box-blog">
                    <div class="row">
                        <div class="col s4 m4 l4 center-align">
                            <h1><?php echo get_field( "emoji", 93); ?></h1>
                        </div>
                        <div class="col s8 m8 l8">
                            <div class="space40"></div>
                            <span><?php echo get_field( "nombre", 93); ?></span><br>
                            <span>Fecha: <b><?php echo get_field( "fecha", 93); ?></b></span><br>
                            <span>Lugar: <b><?php echo get_field( "lugar", 93); ?></b></span><br>
                            <span>Carrera: <b><?php echo get_field( "horario", 93); ?></b></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12 l8 offset-l2">
                <h4>Próximas fechas</h4>
                <div class="row slick-calendar hide-on-med-and-down">
                    <div class="box-blog-carousel">
                        <div class="row">
                            <div class="col s4 m4 l4 center-align">
                                <h1><?php echo get_field( "emoji", 95); ?></h1>
                            </div>
                            <div class="col s8 m8 l8">
                                <div class="space40"></div>
                                <span><?php echo get_field( "nombre", 95); ?></span><br>
                                <span>Fecha: <b><?php echo get_field( "fecha", 95); ?></b></span><br>
                                <span>Lugar: <b><?php echo get_field( "lugar", 95); ?></b></span><br>
                                <span>Carrera: <b><?php echo get_field( "horario", 95); ?></b></span>
                            </div>
                        </div>
                    </div>
                    <div class="box-blog-carousel">
                        <div class="row">
                                <div class="col s4 m4 l4 center-align">
                                    <h1><?php echo get_field( "emoji", 96); ?></h1>
                                </div>
                                <div class="col s8 m8 l8">
                                    <div class="space40"></div>
                                    <span><?php echo get_field( "nombre", 96); ?></span><br>
                                    <span>Fecha: <b><?php echo get_field( "fecha", 96); ?></b></span><br>
                                    <span>Lugar: <b><?php echo get_field( "lugar", 96); ?></b></span><br>
                                    <span>Carrera: <b><?php echo get_field( "horario", 96); ?></b></span>
                                </div>
                            </div>
                    </div>
                    <div class="box-blog-carousel">
                        <div class="row">
                                <div class="col s4 m4 l4 center-align">
                                    <h1><?php echo get_field( "emoji", 97); ?></h1>
                                </div>
                                <div class="col s8 m8 l8">
                                    <div class="space40"></div>
                                    <span><?php echo get_field( "nombre", 97); ?></span><br>
                                    <span>Fecha: <b><?php echo get_field( "fecha", 97); ?></b></span><br>
                                    <span>Lugar: <b><?php echo get_field( "lugar", 97); ?></b></span><br>
                                    <span>Carrera: <b><?php echo get_field( "horario", 97); ?></b></span>
                                </div>
                            </div>
                    </div>
                    <div class="box-blog-carousel">
                        <div class="row">
                                <div class="col s4 m4 l4 center-align">
                                    <h1><?php echo get_field( "emoji", 98); ?></h1>
                                </div>
                                <div class="col s8 m8 l8">
                                    <div class="space40"></div>
                                    <span><?php echo get_field( "nombre", 98); ?></span><br>
                                    <span>Fecha: <b><?php echo get_field( "fecha", 98); ?></b></span><br>
                                    <span>Lugar: <b><?php echo get_field( "lugar", 98); ?></b></span><br>
                                    <span>Carrera: <b><?php echo get_field( "horario", 98); ?></b></span>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="row hide-on-large-only">
                    <div class="box-blog-carousel">
                        <div class="row">
                            <div class="col s4 m4 l4 center-align">
                                <h1><?php echo get_field( "emoji", 95); ?></h1>
                            </div>
                            <div class="col s8 m8 l8">
                                <div class="space40"></div>
                                <span><?php echo get_field( "nombre", 95); ?></span><br>
                                <span>Fecha: <b><?php echo get_field( "fecha", 95); ?></b></span><br>
                                <span>Lugar: <b><?php echo get_field( "lugar", 95); ?></b></span><br>
                                <span>Carrera: <b><?php echo get_field( "horario", 95); ?></b></span>
                            </div>
                        </div>
                    </div>
                    <div class="box-blog-carousel">
                        <div class="row">
                                <div class="col s4 m4 l4 center-align">
                                    <h1><?php echo get_field( "emoji", 96); ?></h1>
                                </div>
                                <div class="col s8 m8 l8">
                                    <div class="space40"></div>
                                    <span><?php echo get_field( "nombre", 96); ?></span><br>
                                    <span>Fecha: <b><?php echo get_field( "fecha", 96); ?></b></span><br>
                                    <span>Lugar: <b><?php echo get_field( "lugar", 96); ?></b></span><br>
                                    <span>Carrera: <b><?php echo get_field( "horario", 96); ?></b></span>
                                </div>
                            </div>
                    </div>
                    <div class="box-blog-carousel">
                        <div class="row">
                                <div class="col s4 m4 l4 center-align">
                                    <h1><?php echo get_field( "emoji", 97); ?></h1>
                                </div>
                                <div class="col s8 m8 l8">
                                    <div class="space40"></div>
                                    <span><?php echo get_field( "nombre", 97); ?></span><br>
                                    <span>Fecha: <b><?php echo get_field( "fecha", 97); ?></b></span><br>
                                    <span>Lugar: <b><?php echo get_field( "lugar", 97); ?></b></span><br>
                                    <span>Carrera: <b><?php echo get_field( "horario", 97); ?></b></span>
                                </div>
                            </div>
                    </div>
                    <div class="box-blog-carousel">
                        <div class="row">
                                <div class="col s4 m4 l4 center-align">
                                    <h1><?php echo get_field( "emoji", 98); ?></h1>
                                </div>
                                <div class="col s8 m8 l8">
                                    <div class="space40"></div>
                                    <span><?php echo get_field( "nombre", 98); ?></span><br>
                                    <span>Fecha: <b><?php echo get_field( "fecha", 98); ?></b></span><br>
                                    <span>Lugar: <b><?php echo get_field( "lugar", 98); ?></b></span><br>
                                    <span>Carrera: <b><?php echo get_field( "horario", 98); ?></b></span>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        $args = array(
            'numberposts' => 4
        );
        
        $latest = get_posts( $args );
        ?>
    <div class="row">
        <div class="col s12 m12 l10 offset-l1">
        <h4 class="center-align">Te podría interesar</h4>
            <div class="row slick-blog hide-on-med-and-down">
            <?php  $ban = 0 ?>
            <?php  $display = "display:none" ?>
                            <?php foreach ($latest as $row){ ?>
                                <?php if($ban == 1){ $display = "";} ?>
                                <div class="box-blog-carousel" style="<?php echo $display ?>">
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
                                <?php  $ban = 1 ?>
                            <?php } ?>
            </div>
            <div class="row hide-on-large-only">
            <?php  $ban = 0 ?>
            <?php  $display = "display:none" ?>
                            <?php foreach ($latest as $row){ ?>
                                <?php if($ban == 1){ $display = "";} ?>
                                <div class="box-blog-carousel" style="<?php echo $display ?>">
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
                                <?php  $ban = 1 ?>
                            <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>