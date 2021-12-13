<?php
/*
Template Name: Blog Page
*/
get_header('');
?>

<section class="bloghero">
    <div class="displayhero container-fluid">
        <div class="container">
            <div class="title col-md-12 text-center">
                <h5>Blog Page</h5>
            </div>
            <div class="page col-md-12 text-center">
                <a href="index.html">Home</a><span> / </span><a href="blog.html">Blog Page</a>
            </div>
        </div>
    </div>
</section>
<?php
//DO POST QUERY HERE
cms_reset_query();
cms_query_posts("post_type=post"); // retrieving posts
cms_query_blog_posts(cms_get_post_category_ids(cms_get_post_id())); //reseting cms posts queries
cms_set_page_offset(isGet('page') ? intval(get('page')) - 1 : 0);
?>
<div class="blog container-fluid">
    <div class="container">
        <div class="row">
            <div class="posts col-12 col-md-8">
                <div class="row">
                    <?php if (cms_have_posts()) : ?>

                        <?php while (cms_have_posts()) : cms_the_post(); ?>
                            <?php
                            $post_data['permalink'] = cms_get_post_permalink();
                            $post_data['title'] = cms_get_post_title();
                            ?>
                            <section class="post col-12">
                                <div class="wrapper">
                                    <img class="topseller card-img-top" src="<?php echo get_post_featured($post_data['title'], $post_data['permalink']); ?>" alt="<?php echo cms_get_post_title(); ?>">
                                    <div class="sub text-uppercase">Top Seller</div>
                                </div>
                                <div class="post-header">
                                    <h5 class="title"><a href="<?php echo get_bloginfo("baseurl") . '' . cms_get_post_permalink(); ?>"><?php echo cms_get_post_title(); ?></a></h5>
                                    <ul class="list list-inline list-unstyled">
                                        <li class="list-inline-item">By <span>Zin Nguyen</span></li>
                                        <li class="list-inline-item">on <span><?php echo date('M d, Y', strtotime(cms_get_post_date())); ?></span></li>
                                    </ul>
                                </div>
                                <div class="post-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <p><?php echo get_post_excerpt($post_data['title'], $post_data['permalink']); ?></p>
                                            <a href="<?php echo get_bloginfo("baseurl") . '' . cms_get_post_permalink(); ?>" class="btn btn-more text-uppercase">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-footer">
                                    <ul class="list list-unstyled list-inline float-left">
                                        <li class="list-inline-item"><i class="fa fa-heart-o" aria-hidden="true"></i> 10
                                            Likes
                                        </li>
                                        <li class="list-inline-item"><i class="fa fa-comment-o" aria-hidden="true"></i> 2
                                            Comments</li>
                                    </ul>
                                    <ul class="social list-unstyled list-inline float-right">
                                        <li class="list-inline-item"><a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <li class="list-inline-item"><a href="https://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <li class="list-inline-item"><a href="https://accounts.google.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        <li class="list-inline-item"><a href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <li class="list-inline-item"><a href="https://www.behance.net"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                    </ul>
                                </div>
                            </section>
                        <?php endwhile; ?>

                    <?php else : ?>

                        <section class="post col-12">
                            <div class="post-header">
                                <h5 class="title">No Post Created.</h5>

                            </div>
                            <div class="post-body">
                                <div class="row">
                                    <div class="col-12">
                                        <p>Please create your new posts.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="post-footer">
                            </div>
                        </section>
                    <?php endif ?>
                </div>

                <div class="paginator row">
                    <div class="col-12 d-flex flex-column flex-row align-items-center justify-content-center">
                        <ul class="pagination text-uppercase">
                            <li class="prev page-item">
                                <a class="page-link" href="#"><span>Prev</span></a>
                            </li>
                            <li class="num page-item"><a class="page-link" href="#"><span>01</span></a></li>
                            <li class="num page-item"><a class="page-link" href="#"><span>02</span></a></li>
                            <li class="num page-item"><a class="page-link" href="#"><span>03</span></a></li>
                            <li class="next page-item">
                                <a class="page-link" href="#"><span>Next</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <aside class="sidebar col-sm-12 col-md-4">
                <?php get_sidebar(); ?>
            </aside>
        </div>
    </div>
</div>

<section class="message">
    <div class="imageChef">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/message/chef.png" alt="" width="250" height="580">
    </div>
    <div class="clearfix">
        <div class="container-fluid">
            <div class="container">
                <div id="keepTouch" class="text-center">
                    <p>KEEP IN TOUCH</p>
                </div>
                <div id="aMessage" class="text-center">
                    <h5>Send a Message</h5>
                </div>
                <div class="row">
                    <div class="col-12 text-center service-block">
                        <div id="form-transition" class="darkness text-center">
                            <div id="bgForm" class="text-center heading-wrap">
                                <form class="container text-center">
                                    <div id="formInput" class="row text-center">
                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <input type="text" id="name" name="name" placeholder="Your sure name">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <input type="email" id="email" name="email" placeholder="Your email address">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <input type="text" id="number" name="number" placeholder="Phone number">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea class="container" rows="5" id="message" name="message" placeholder="Your message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <a href="" class="text-center">SEND
                                                    MESSAGE</a>
                                                <div class="text-center">
                                                    <img src="assets/images/message/image-path.png" alt="" width="90" height="9">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="address">
    <div class="displayImageSeventh container-fluid">
        <div class="row">
            <div class="text-left col-12 col-md-12 col-lg-5 col-xl-6">
                <div id="leftContent">
                    <div class="text-left">
                        <h4>CATERING'S LOCATION</h4>
                    </div>
                    <div class="text-left">
                        <h5>Our Address</h5>
                    </div>
                    <div id="addresText" class="text-left">
                        <p>Lorem ipsum dolor sit amet, consetetuer adipiscing elit sed diam nonummy nibh euismod
                            tincidunt ut laoreet ipsum dolor sit amet, consecteteur adipiscing elit.</p>
                    </div>
                    <div id="locationText" class="text-left">
                        <ul>
                            <li>
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/address/icon-gps-final.png" alt="" width="45" height="45">
                                <br><span>Location: </span>
                                <p>2 Alnahas Building,2 Sangrilah St, Tanta Singapore</p>
                                <hr />
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/address/icon-call-final.png" alt="" width="45" height="45">
                                <br><span>Primary: </span>
                                <p>(65) 3434 5566</p>
                                <span>Second: </span>
                                <p>(65) 3434 9999</p>
                                <hr />
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/address/icon-message-final.png" alt="" width="45" height="45">
                                <br><span>Primary: </span>
                                <p>SingaporeCatering@gmail.com</p>
                                <span>Second: </span>
                                <p>CateringSG@gmail.com</p>
                            </li>
                            <li id="contact">
                                <br><br><br><br>
                                <a href="#">CONTACT US</a>
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/address/path.png" width="80" height="7.5" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="embedMap" class="text-right col-12 col-md-12 col-lg-7 col-xl-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7258670338497!2d103.9602976145726!3d1.3408259990220832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da3cdf3e1b04d7%3A0xc71dbd95a95b20cc!2sBuilding%202%2C%20Singapore%20486041!5e0!3m2!1sen!2sph!4v1579054621436!5m2!1sen!2sph" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>