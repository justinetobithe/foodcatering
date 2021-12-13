<?php
/*
get_sidebar_widget()
-Calls the widget sidebar (by widget id, found on the configuration)
*/
//get_widget_sidebar('primary-sidebar');


?>

<div class="sidebar-block row">
    <div class="categories block col-12">
        <h5 class="title">Categories</h5>
        <hr />
        <div class="box">
            <ul class="list list-unstyled">
                <?php
                $categories = get_by_categories();
                foreach ($categories as $category) {
                    echo $category;
                }
                ?>
                <!--
                <li><a href="#">Entertainment<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                <li><a href="#">Life Style<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </li>
                <li><a href="#">Sport<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                <li><a href="#">Natural<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </li>
                <li><a href="#">Photography<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                <li><a href="#">Journal<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </li>
                <li><a href="#">Uncategorized<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
            -->
            </ul>
        </div>
    </div>

    <div class="latest block col-12">
        <h5 class="title">Latest Posts</h5>
        <hr />
        <div class="box">
            <ul class="list list-unstyled">
                <?php
                $posts = get_by_recent_post();
                foreach ($posts as $post) {
                    echo $post;
                }
                ?>
                <!--
                <li class="row no-gutters">
                    <div class="col-12 col-lg-4">
                        <img class="img-responsive img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/blog/food1.png" alt="Food 1" />
                    </div>
                    <div class="col-12 col-lg-8">
                        <h5 class="cat"><img class="vertical" src="<?php bloginfo('template_directory'); ?>/assets/images/blog/vertical-line.png" alt="Vertical Line">
                            Entertainment</h5>
                        <h5><a class="subtitle" href="#">How music can support
                                mental health</a class="subtitle"></h5>
                        <h6 class="date">May 15, 2017</h6>
                    </div>
                    <hr />
                </li>
                <li class="row no-gutters">
                    <div class="col-12 col-lg-4">
                        <img class="img-responsive img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/blog/food2.png" alt="Food 2" />
                    </div>
                    <div class="col-12 col-lg-8">
                        <h5 class="cat"><img src="<?php bloginfo('template_directory'); ?>/assets/images/blog/vertical-line.png" alt="Vertical Line"> Journal</h5>
                        <h5><a class="subtitle" href="#">Working at home could
                                harm your career</a></h5>
                        <h6 class="dat">May 15, 2017</h6>
                    </div>
                    <hr />
                </li>
                <li class="row no-gutters">
                    <div class="col-12 col-lg-4">
                        <img class="img-responsive img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/blog/food3.png" alt="Food 3" />
                    </div>
                    <div class="col-12 col-lg-8">
                        <h5 class="cat"><img src="<?php bloginfo('template_directory'); ?>/assets/images/blog/vertical-line.png" alt="Vertical Line"> Food</h5>
                        <h5><a class="subtitle" href="#">Living a tart with a
                                cartouche (baking blind)</a></h5>
                        <h6 class="date">May 15, 2017</h6>
                    </div>
                    <hr />
                </li>
                <li class="row no-gutters">
                    <div class="col-12 col-lg-4">
                        <img class="img-responsive img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/blog/food4.png" alt="Food 4" />
                    </div>
                    <div class="col-12 col-lg-8">
                        <h5 class="cat"><img src="<?php bloginfo('template_directory'); ?>/assets/images/blog/vertical-line.png" alt="Vertical Line"> Travel</h5>
                        <h5><a class="subtitle" href="#">Where would you go if
                                you were five?</a></h5>
                        <h6 class="date">May 15, 2017</h6>
                    </div>
                    <hr />
                </li>
            -->
            </ul>
        </div>
    </div>
</div>