<?php
get_header();
?>

<section class="posthero">
    <div class="displayhero container-fluid">
        <div class="container">
            <div class="title col-md-12 text-center">
                <h5>Blog Post</h5>
            </div>
            <div class="page col-md-12 text-center">
                <a href="index.html">Home</a><span> / </span><a href="post.html">Blog Post</a>
            </div>
        </div>
    </div>
</section>

<div class="blog article container-fluid">
    <div class="container">
        <div class="row">
            <div class="posts col-12 col-md-8">
                <div class="row">

                    <section class="post col-12">
                        <div class="wrapper">
                            <img class="topseller card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/images/post/haleem.png" alt="Haleem">
                            <div class="sub text-uppercase">Top Seller</div>
                        </div>
                        <div class="post-header">
                            <h5 class="title">Throw away the guidebook and rely on the people
                                that know a city best - the locals.</h5>
                        </div>
                        <div class="post-body">
                            <div class="row">
                                <div class="col-12">
                                    <p>Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed
                                        consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                        Curabitur blandit tempus porttitor.</p>
                                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas sed
                                        diam eget risus varius blandit sit amet non magna. Curabitur blandit tempus
                                        porttitor. Etiam porta sem malesuada magna mollis euismod.</p>
                                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget
                                        urna mollis ornare vel eu leo. Nullam id dolor id nibh ultricies
                                        vehicula ut id elit. Curabitur blandit tempus porttitor.</p>
                                    <p>Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed
                                        consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    </p>
                                    <blockquote class="blockquote">
                                        <p class="mb-0">&#8220;Nulla vitae elit libero, a pharetra augue. Aenean
                                            lacinia bibendum nulla sed consectetur crus justo odio dapibus ac
                                            facilisis in.&#8221;</p>
                                    </blockquote>
                                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas sed
                                        diam eget risus varius blandit sit amet non magna. Curabitur blandit tempus
                                        porttitor. Etiam porta sem malesuada magna mollis euismod.</p>
                                    <div class="pics text-center d-inline-block">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/post/food_trends_2018_1.png" class="float-left img-fluid img-responsive" alt="Food Trends 2018">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/post/food_trends_2018_2.png" class="float-right img-fluid img-responsive" alt="Food Trends 2018">
                                    </div>
                                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas sed
                                        diam eget risus varius blandit sit amet non magna. Curabitur blandit tempus
                                        porttitor. Etiam porta sem malesuada magna mollis euismod.</p>
                                    <hr />
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

                </div>
                <div class="row">
                    <div class="col-12 prevnext">
                        <div class="row">
                            <div class="left col-12 col-sm-6">
                                <div class="arrow-left"></div>
                                <a href="#" class="prev">
                                    Previous Post
                                </a>
                                <h5 class="sub">Using a food processor to pulse ingredients</h5>
                            </div>
                            <div class="right text-right col-12 col-sm-6">
                                <a href="#" class="prev">Next Post</a>
                                <div class="arrow-right"></div>
                                <h5 class="sub">Using a food processor to pulse ingredients</h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <aside class="sidebar col-sm-12 col-md-4">
                <?php get_sidebar(); ?>
            </aside>
        </div>
    </div>
</div>

<section class="comments container-fluid">
    <div class="container">
        <div class="intro row">
            <div class="col-12">
                <h4 class="title">Comments(4)</h4>
            </div>
        </div>
        <div class="item row">
            <div class="left col-12 col-sm-3 col-lg-1 d-flex flex-column align-items-start justify-content-start">
                <img class="img-responsive img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/post/profile.png" alt="Profile">
            </div>
            <div class="right col-12 col-sm-9 col-lg-11">
                <h5 class="name">Kusner Ivanka</h5>
                <h6 class="date">Dec 12, 2018</h6>
                <p class="commentpost">Maecenas sed diam eget risus varius blandit sit amet non magna. Curabitur
                    blandit tempus
                    porttitor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vestibulum id ligula
                    porta felis euismod semper. Maecenas sed diam eget risus varius blandit sit amet non magna.
                    Curabitur blandit tempus porttitor. Morbi leo risus, porta ac consectetur ac.</p>
                <a href="#" class="btn btn-reply">Reply</a>
            </div>
        </div>
        <div class="item row">
            <div class="left col-12 col-sm-3 col-lg-1 d-flex flex-column align-items-start justify-content-start">
                <img class="img-responsive img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/post/profile.png" alt="Profile">
            </div>
            <div class="right col-12 col-sm-9 col-lg-11">
                <h5 class="name">Diamante Rosinante</h5>
                <h6 class="date">Dec 12, 2018</h6>
                <p class="commentpost">Maecenas sed diam eget risus varius blandit sit amet non magna. Curabitur
                    blandit tempus
                    porttitor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vestibulum id ligula
                    porta felis euismod semper. Maecenas sed diam eget risus varius blandit sit amet non magna.
                    Curabitur blandit tempus porttitor. Morbi leo risus, porta ac consectetur ac.</p>
                <a href="#" class="btn btn-reply">Reply</a>
            </div>
        </div>
    </div>
</section>

<section class="comment-form container-fluid">
    <div class="container">
        <div class="intro row">
            <div class="col-12">
                <h4 class="title">Post a Comment</h4>
                <p class="subtitle">Your email address will not be published.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="form-group col-12">
                        <textarea class="field form-control" placeholder="Comment"></textarea>
                    </div>
                    <div class="form-group col-12 col-sm-6 col-md-4">
                        <input type="text" class="field form-control" placeholder="Name" />
                    </div>
                    <div class="form-group col-12 col-sm-6 col-md-4">
                        <input type="text" class="field form-control" placeholder="Email" />
                    </div>
                    <div class="form-group col-12 col-md-4">
                        <input type="text" class="field form-control" placeholder="Website" />
                    </div>
                    <div class="form-group col-12">
                        <a href="#" class="btn btn-send text-uppercase">Send Comment</a>
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
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/address/path.png" width="80" height="7" alt=s"">
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