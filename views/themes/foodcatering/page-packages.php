<?php
/*
Template Name: Packages Page
*/
get_header('');
?>


<section class="packageshero">
    <div class="displayhero container-fluid">
        <div class="container">
            <div class="title col-md-12 text-center">
                <h5>Packages</h5>
            </div>
            <div class="page col-md-12 text-center">
                <a href="index.html">Home</a><span> / </span><a href="packages.html">Packages</a>
            </div>
        </div>
    </div>
</section>

<section class="foodbanner container-fluid">
    <div class="container">
        <div class="row no-gutters foodposition">
            <div class="col-12 shadow_wide">
                <h5 class="sub text-center text-uppercase">New Cake!!! <span>Get it for</span>
                    $12/Pax
                    <span>(limited)</span></h5>
                <h4 class="title text-center">Call us now! Get Exclusive Promos</h4>
                <a href="#" class="btn btn-center text-center text-uppercase btn-reserve">Reserve
                    Now</a>
            </div>
        </div>
    </div>
</section>

<section class="products color">
    <img class="img-responsive spaghetti" src="<?php bloginfo('template_directory'); ?>/assets/images/packages/spaghetti.png" alt="Spaghetti">
    <img class="img-responsive pasta" src="<?php bloginfo('template_directory'); ?>/assets/images/packages/pasta.png" alt="Pasta">
    <div class="container-fluid block">
        <div class="container">
            <div class="intro row">
                <div class="col-12">
                    <h5 id="sub" class="sub text-center text-uppercase">Premium Quality</h5>
                    <h4 class="title text-center">Our Chef's Delicacies</h4>
                </div>
            </div>
            <div class="row selections">
                <div class="col-12">
                    <ul class="list-unstyled list-inline choices">
                        <li class="list-inline-item">
                            <button class="btn all" data-filter="all">All Delicacies</button>
                        </li>
                        <li class="list-inline-item">
                            <button class="btn meal" data-filter="meal"></button>
                        </li>
                        <li class="list-inline-item">
                            <button class="btn pizza" data-filter="pizza"></button>
                        </li>
                        <li class="list-inline-item">
                            <button class="btn dessert" data-filter="dessert"></button>
                        </li>
                        <li class="list-inline-item">
                            <button class="btn fish" data-filter="fish"></button>
                        </li>
                        <li class="list-inline-item">
                            <button class="btn meat" data-filter="meat"></button>
                        </li>
                        <li class="list-inline-item">
                            <button class="btn burger" data-filter="burger"></button>
                        </li>
                        <li class="list-inline-item">
                            <button class="btn wine" data-filter="wine"></button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row items grid">
                <div class="item all meal col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <div class="block">
                            <img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/images/products/food1.png" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Progresso<sup>TM</sup> Italian Style</h5>
                            <p class="card-text text-center">$12.15 /oz</p>
                        </div>
                    </div>
                </div>
                <div class="item all pizza col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <div class="block">
                            <img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/images/products/food2.png" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Progresso<sup>TM</sup> Italian Style</h5>
                            <p class="card-text text-center">$12.15 /oz</p>
                        </div>
                    </div>
                </div>
                <div class="item dessert all col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <div class="block">
                            <img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/images/products/food3.png" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Progresso<sup>TM</sup> Italian Style</h5>
                            <p class="card-text text-center">$12.15 /oz</p>
                        </div>
                    </div>
                </div>
                <div class="item all fish col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <div class="block">
                            <img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/images/products/food4.png" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Progresso<sup>TM</sup> Italian Style</h5>
                            <p class="card-text text-center">$12.15 /oz</p>
                        </div>
                    </div>
                </div>
                <div class="item all meat col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <div class="block">
                            <img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/images/products/food5.png" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Progresso<sup>TM</sup> Italian Style</h5>
                            <p class="card-text text-center">$12.15 /oz</p>
                        </div>
                    </div>
                </div>
                <div class="item all burger col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <div class="block">
                            <img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/images/products/food6.png" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Progresso<sup>TM</sup> Italian Style</h5>
                            <p class="card-text text-center">$12.15 /oz</p>
                        </div>
                    </div>
                </div>
                <div class="item all wine col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <div class="block">
                            <img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/images/products/food7.png" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Progresso<sup>TM</sup> Italian Style</h5>
                            <p class="card-text text-center">$12.15 /oz</p>
                        </div>
                    </div>
                </div>
                <div class="item all meal col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <div class="block">
                            <img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/images/products/food8.png" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h5 class="text-center card-title">Progresso<sup>TM</sup> Italian Style</h5>
                            <p class="text-center card-text">$12.15 /oz</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="paginator row">
                <div class="col-12">
                    <ul class="pagination d-flex flex-row justify-content-center list-inline">
                        <li class="prev list-inline-item page-item">
                            <a class="page-link" href="">PREV</a>
                        </li>
                        <li class="num list-inline-item page-item"><a class="page-link" href=""><span>01</span></a>
                        </li>
                        <li class="num list-inline-item page-item"><a class="page-link" href=""><span>02</span></a>
                        </li>
                        <li class="num list-inline-item page-item"><a class="page-link" href=""><span>03</span></a>
                        </li>
                        <li class="next list-inline-item page-item">
                            <a class="page-link" href="">NEXT</a>
                        </li>
                    </ul>
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
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/address/path.png" width="80" height="7" alt="">
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
                                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/message/image-path.png" alt="" width="90" height="9">
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

<?php
get_footer();
?>