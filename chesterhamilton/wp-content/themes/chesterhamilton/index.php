<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<script>
                $(document).ready(function(){
                    $('#about-us>div>div>div>div>div:first-child').addClass("active");
                    $('#blog>div>div>div>div>div:first-child').addClass("active");
                    $('#projects>div>div>div>div:first-child').addClass("active");
                    $('.carousel-indicators>li:first-child').addClass("active");
                    $('#top-slide>div>div>div:first-child').addClass("active");
                });
            </script>
<!--top-slide-->
<section id="top-slide" class="np"> 
    <!-- carousel -->           
    <div id="carousel-example-generic" class="carousel slide generic-carousel" data-ride="carousel" data-interval="7000000">
      <!-- Wrapper for slides -->
      <div class="carousel-inner text-center">
        <?php
            global $post;
            $args = array('numberposts'=>100, 'category'=>17);
            $page_id = 15;
            $custom_posts = get_posts($args);
            foreach($custom_posts as $post):setup_postdata($post);?>
                <div class="item" >
                     <?php
                        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                     ?>
                  <img class="bg-img img-responsive" src="<?php echo $url;?>" alt="image of slider" />
                  <div class="container">
                    <div class="text-slide">
                        <h2 ><?php the_title();?></h2>
                        <?php the_content();?>
                    </div>
                  </div>
                </div>
            <?php endforeach; wp_reset_postdata(); ?>
      </div>
      <!-- end Wrapper for slides -->
      <div class="controls">
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <i class="icon-up-open"></i>      
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <i class="icon-down-open"></i>
          </a>
          <div class="clearThis"></div>
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <?php
                global $post;
                $args = array('numberposts'=>100, 'category'=>17);
                $page_id = 15;
                $custom_posts = get_posts($args);
                $i=0;
            foreach($custom_posts as $post):setup_postdata($post);?>
            <?php
                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                
             ?>
             <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i;?>" class="active"><img src="<?php echo $url;?>" alt="//" /></li>
             <?php ++$i; endforeach; wp_reset_postdata(); ?>
          </ol>
      </div>
    </div><!-- end carousel -->   
    <a href="#about-us" class="scroll-lnk anchor"></a>
    </section>
    <!--End top-slide-->

<!-- About us -->
<section id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <!-- Nav tabs -->
                <ul class="tabs-left">
                    <?php
                    global $post;
                    $args = array('numberposts'=>100, 'category'=>15);
                    $page_id = 15;
                    $custom_posts = get_posts($args);
                    foreach($custom_posts as $post):setup_postdata($post);?>
                        <li><a href="#<?php the_title();?>" data-toggle="tab"><?php the_title();?></a></li>
                    <?php endforeach; wp_reset_postdata(); ?>
                </ul>
            </div><!-- .col -->
            
            <div class="col-sm-6 text-center">
                <!-- Tab panes -->
                <div class="tab-content">
                    <?php
                    global $post;
                    $args = array('numberposts'=>100, 'category'=>15);
                    $page_id = 15;
                    $custom_posts = get_posts($args);
                    foreach($custom_posts as $post):setup_postdata($post);?>
                    <div class="tab-pane " id="<?php the_title();?>">
                        <h1><small>OUR</small><?php the_title();?></h1>
                        <p class="text-left"><?php the_excerpt();?></p>
                        <a href="#" data-toggle="modal" data-target="#modal-<?php echo $post->ID;?>" class="btn btn-default btn-radius">
                            Read More
                        </a>
                        <!-- modals -->
                        <div id="modal-<?php echo $post->ID;?>" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <a href="#" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span></a>
                                        <h1><small>OUR</small><?php the_title();?></1>
                                    </div>
                                    <div class="modal-body">
                                        <div class="niceScroll">
                                           <?php the_content();?>
                                            <?php
                                                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                                            ?>
                                            <img src="<?php echo $url;?>" alt="//" class="sign pull-left" />
                                        </div>
                                    </div>

                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <!-- end modals -->
                    </div>
                    <?php endforeach; wp_reset_postdata(); ?>
                </div>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section>
<!-- end about us -->

<!-- Services -->
<section id="services">
    <div class="container text-center">
        <h2><span>our services</span></h2>
        <div class="container-carousel">
            <div id="owl-demo" class="owl-carousel owl-theme">
                <?php
                global $post;
                $args = array('numberposts'=>100,'category'=>3);
                $custom_posts = get_posts($args);
                foreach($custom_posts  as $post) :setup_postdata($post);?>

                    <div class="item">
                        <div class="thumb has-arrow">
                            <div class="frame">
                                <?php
                                    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                                ?>
                                <img data-type="mText" src="<?php echo $url;?>" class="img-responsive" alt="//" />
                                <div class="hover">
                                    <h5><?php the_title();?></h5>
                                    <p>Demolition</p>
                                    <a href="<?php echo $url;?>" class="btn btn-default fancy" title="<?php echo get_post(get_post_thumbnail_id($post->ID))->post_title; ?>">View</a>
                                </div>
                            </div>
                        </div>
                        <?php
                        $category = get_the_category();
                        ?>
                        <h2> <?php echo $category[0]->cat_name; ?></h2>
                        <p><?php the_content();?></p>
                    </div>

                <?php endforeach; wp_reset_postdata();?>
    </div><!-- .container -->
</section>
<!-- end services -->


<!-- Project Slider -->
<section id="slide-sec" class="np">
    <!-- carousel -->
    <div id="sec-carousel" class="carousel slide generic-carousel" data-ride="carousel" data-interval="7000000">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active" >
                <div class="container">
                    <img class="bg-img img-responsive" src="<?php echo get_template_directory_uri();?>/img/projects-slider/01.jpg" alt="//" />
                    <div class="cont">
                        <h3>Residential Project</h3>
                        <p>Integer urna tortor, mollis quis diam gravida, lobortis commodo leo. Nulla porta ante eu pretium tristique. Ut a quam libero. Aenean molestie turpis non turpis porttitor tincidunt. Nullam convallis et quam ut rutrum.</p>
                        <div class="btn btn-default"><strong>More</strong></div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <img class="bg-img img-responsive" src="<?php echo get_template_directory_uri();?>/img/projects-slider/02.jpg" alt="//" />
                    <div class="cont">
                        <h3>Kitchen Reformation</h3>
                        <p>Nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum</p>
                        <div class="btn btn-default"><strong>More</strong></div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <img class="bg-img img-responsive" src="<?php echo get_template_directory_uri();?>/img/projects-slider/03.jpg" alt="//" />
                    <div class="cont">
                        <h3>Bedroom Design</h3>
                        <p>Pellentesque molestie porta mauris, in volutpat lacus commodo in. Proin vestibulum enim imperdiet eros aliquet, eget convallis augue pharetrin vestibulum enim imperdiet eros aliquet, eget convallis augue pharetra.</p>
                        <div class="btn btn-default"><strong>More</strong></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Wrapper for slides -->
        <div class="controls">
            <!-- Controls -->
            <a class="left carousel-control" href="#sec-carousel" data-slide="prev">
                <i class="icon-up-open"></i>
            </a>
            <a class="right carousel-control" href="#sec-carousel" data-slide="next">
                <i class="icon-down-open"></i>
            </a>
            <div class="clearThis"></div>
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#sec-carousel" data-slide-to="0" class="active"><img src="<?php echo get_template_directory_uri();?>/img/projects-slider/thumbnail-01.jpg" alt="//" /></li>
                <li data-target="#sec-carousel" data-slide-to="1"><img src="<?php echo get_template_directory_uri();?>/img/projects-slider/thumbnail-02.jpg" alt="//" /></li>
                <li data-target="#sec-carousel" data-slide-to="2"><img src="<?php echo get_template_directory_uri();?>/img/projects-slider/thumbnail-03.jpg" alt="//" /></li>
            </ol>
        </div>
    </div><!-- end carousel -->

</section>
<!--End Project Slider -->


<!-- Blog -->

<section id="blog">
<div class="container">

<h2 class="under-dot"><strong>In The News</strong> The Latest from the WG Construction Architecural Blog</h2>

<div class="row">
<div class="col-sm-9">
<!-- Tab panes -->
<div class="tab-content">
<?php
global $post;
$args = array('numberposts'=>4,'category'=>7);
$custom_posts = get_posts($args);
foreach($custom_posts  as $post) :setup_postdata($post);?>
<div class="tab-pane first" id="post-<?php echo $post->ID;?>">
    <div class="row">
        <div class="col-sm-4">
            <?php
            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            ?>
            <img class="img-responsive" src="<?php echo $url;?>" alt="" />
        </div>
        <div class="col-sm-7">
            <div class="titles">
                <h3><?php the_title();?></h3>
                <?php
                $category = get_the_category();
                ?>
                <h4 class="under-dot"><?php echo $category[0]->cat_name; ?></h4>
            </div>
            <p><?php the_excerpt();?></p>

            <a href="#" data-toggle="modal" data-target="#blog-1" class="btn btn-default">More</a>
            <!-- modal -->
            <div id="blog-<?php echo $post->ID;?>" class="modal post fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <a href="#" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span></a>
                        <div class="modal-body">

                            <div class="top-info">
                                <p>Posted by Nicholas Santiago on September 5th » 9 Comments</p>
                            </div>

                            <div class="post-item">
                                <h3>New Modern Chair</h3>
                                <h4 class="under-dot">Architectural design</h4>
                                <p>This is Photoshop's version Ipsum. Proin gravida nibh vel velit r a Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequatinor ipsum, nec sagittis sem nibh id elit. Odio sit amet nibh vulpe cursus  Premier Corp mauris. Morbi accumsan ipsum velit. Nam sllus accumsan ipsum en esora cano buenes eso vulpe carequis neque. Suspendisse in orci enim.</p>
                                <p class="count">4 Comments</p>
                            </div>

                            <div class="comments">
                                <div class="single">
                                    <img src="<?php echo get_template_directory_uri();?>/img/avatar-01.jpg" alt="" class="avatar"/>
                                    <div class="cont">
                                        <a href="#" class="lnk-reply">Reply</a>
                                        <h5>Dave Jenkins says:</h5>
                                        <h6>September 5, 2013 @ 4:58 am</h6>
                                        <p>ollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,  lorem quis bibendum auctor, nisi elit consequat ipsum,
                                        </p>
                                    </div>
                                </div>
                                <div class="single">
                                    <img src="<?php echo get_template_directory_uri();?>/img/avatar-02.jpg" alt="" class="avatar"/>
                                    <div class="cont">
                                        <a href="#" class="lnk-reply">Reply</a>
                                        <h5>Dave Jenkins says:</h5>
                                        <h6>September 5, 2013 @ 4:58 am</h6>
                                        <p>ollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,  lorem quis bibendum auctor, nisi elit consequat ipsum,
                                        </p>
                                    </div>
                                </div>
                                <div class="add-comments">

                                    <form action="http://constructors.mustachethemes.com/index_submit" method="get" accept-charset="utf-8">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input name="name" type="text" class="form-control" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label >Email</label>
                                                    <input name="email" type="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Message</label>
                                                    <textarea name="message" class="form-control" rows="5" placeholder="Message"> </textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 clearfix">
                                                <button class="btn btn-default pull-right">SEND</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- end comments -->

                        </div>

                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <!-- end modals -->
        </div>
    </div>
</div>
<?php endforeach; wp_reset_postdata();?>

</div>
</div><!-- .col -->

<div class="col-sm-3 tabs-right">
    <!-- Nav tabs -->
    <h3 class="under-dot">LATEST</h3>
    <ul>
    <?php
        global $post;
        $args = array('numberposts'=>4,'category'=>7);
        $custom_posts = get_posts($args);

        foreach($custom_posts  as $post) :setup_postdata($post);?>
            <li><a href="#post-<?php echo $post->ID;?>" data-toggle="tab"><?php the_title();?></a></li>
        <?php endforeach; wp_reset_postdata();?>
    </ul>

</div><!-- .col -->

</div><!-- .row -->
</div><!-- .container -->

</section>
<!-- end blog -->




<!-- Projects Gallery -->
<section id="projects" class="">
<div class="container text-center">
<h2><span>OUR PROJECTS</span></h2>
<h3>ARCHITECTURAL MASTERPIECE</h3>
<!-- carousel -->
<div id="slide-projects" class="carousel slide" data-ride="carousel" data-interval="7000000">
<!-- Wrapper for slides -->
<div class="carousel-inner text-center">

<!-- 8 items wall 01 -->

    <?php
    global $post;
    $args = array('numberposts'=>100,'category'=>16);
    $custom_posts = get_posts($args);
    foreach($custom_posts  as $post) :setup_postdata($post);?>
        <div class="item" >
            <div class="row">
                   <?php the_content();?>
            </div>
        </div>
    <?php endforeach; wp_reset_postdata();?>
<!-- 8 items wall 02 -->
</div>
<!-- end Wrapper for slides -->
<ol class="carousel-indicators">
    <?php
    global $post;
    $args = array('numberposts'=>100,'category'=>16);
    $custom_posts = get_posts($args);
    $i=0;
    $j=0;
    foreach($custom_posts  as $post) :setup_postdata($post);?>
    <li data-target="#slide-projects" data-slide-to="<?php echo $i;?>"><?php echo ++$j;?></li>
       <?php  $i++; ?>
    <?php endforeach; wp_reset_postdata();?>
</ol>

</div><!-- end carousel -->
</div>
</section>
<!-- End Projects Gallery -->



<!-- Team -->
<section id="team">
    <div class="container text-center">
        <h2 class="nmBot"><span>THE POWER TEAM</span></h2>
        <h3>ARECHITECTURAL GENIuses</h3>
        <div class="container-carousel">
            <div id="owl-services" class="owl-carousel owl-theme">
                <?php
                global $post;
                $args = array('numberposts'=>100,'category'=>10);
                $custom_posts = get_posts($args);

                foreach($custom_posts  as $post) :setup_postdata($post);?>
                    <div class="item">
                        <div class="thumb">
                            <div class="frame img-circle">
                                <?php
                                 $category = get_the_category();
                                  $custom_fields = get_post_custom($post->ID);
                                  $my_custom_field = $custom_fields['social-network'];
                                 if($my_custom_field==NULL){
                                    ?>
                                     <a href="#" class="img-circle"><span><?php echo $category[0]->cat_name; ?></span></a>
                                     <?php
                                 }
                                  else
                                  foreach ( $my_custom_field as $key => $value ) {
                                  ?>
                                        <a href="<?php echo $value;?>" class="img-circle"><span><?php echo $category[0]->cat_name; ?></span></a>
                                <?php
                                   }
                                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                                ?>
                                <img data-type="mText" src="<?php echo $url;?>" class="img-responsive img-circle" alt="//" />
                            </div>
                        </div>
                        <h2><a href="#"><?php the_title();?></a></h2>
                        <p><?php the_content();?></p>
                    </div>
                <?php endforeach; wp_reset_postdata();?>
            </div>
            <div class="customNavigation clearfix">
                <a class="prev"><i class="icon-left-open"></i></a>
                <a class="next"><i class="icon-right-open"></i></a>
            </div>
        </div><!-- .container-carousel -->
    </div><!-- .container -->
</section>
<!-- end Team -->



<!-- Contact -->
<section id="contact" class="np">
    <?php
    $page_id = 21;
    $page_data = get_page( $page_id );
    $content = apply_filters('the_content', $page_data->post_content);
    echo $content;
    ?>
</section>
<!-- end services -->
<?php get_footer();?>
