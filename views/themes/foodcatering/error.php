<?php
get_header('');
?>

<section class="errorhero">
    <div class="displayhero container-fluid">
        <div class="container">
            <div class="title col-md-12 text-center">
                <h5>404 Error</h5>
            </div>
            <div class="page col-md-12 text-center">
                <a href="index.html">Home</a><span> / </span><a href="404.html">404 Error</a>
            </div>
        </div>
    </div>
</section>

<section class="error content container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title text-center">4<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/images/error/hamburger.png" alt="Hamburger" /><span>4</span></h1>
                <h4 class="sub text-center">Ooops! Something went wrong</h4>
                <p>404 error dolor sit amet, consectetur adipiscing elit, sed do euismod tempor incididunt ut labore
                    et doloremagna aliqua Ut enim ad <a href="contact.html" class="link">Contact Us</a></p>
                <div class="button text-center">

                    <a href="index.html" class="btn btn-home btn-center text-uppercase">Homepage</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>