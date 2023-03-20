<?php get_header('blog'); ?>
<div class="page-banner">
    <div class="page-banner__bg-image"
        style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg')?>"></div>
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title">Blog Page</h1>
        <div class="page-banner__intro">
            <p>Learn how the school of your dreams got started.</p>
        </div>
    </div>
</div>
<div class="container container--narrow page-section">
    <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
            <a class="metabox__blog-home-link" onclick="window.location.href='details';"><i class="fa fa-home"
                    aria-hidden="true"></i> Back to About Us</a>
            <span class="metabox__main">Our History</span>
        </p>
    </div>
    <h1 id="one">Free Transportation</h1>
    <div class="page-section">
        <div class="container container--narrow generic-content">
            <img src="<?php echo get_theme_file_uri('images/1.jpg')?>" alt="" class="posts">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid
                possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis,
                consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora
                alias
                atque
                vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad
                quod
                sed.
            </p>
            <span onclick="window.location.href='details';">More Details..</span>
        </div>
    </div>
    <hr>
    <h1 id="two">An Apple a Day</h1>
    <div class="page-section page-section--white">
        <div class="container container--narrow generic-content">
            <img src="<?php echo get_theme_file_uri('images/1.jpg')?>" alt="" class="posts">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid
                possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis,
                consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora
                alias
                atque
                vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad
                quod
                sed.
            </p>
            <span onclick="window.location.href='details';">More Details..</span>
        </div>
    </div>
    <hr>
    <h1 id="three">Free Food</h1>
    <div class="page-section page-section--white">
        <div class="container container--narrow generic-content">
            <img src="<?php echo get_theme_file_uri('images/1.jpg')?>" alt="" class="posts">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid
                possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis,
                consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora
                alias
                atque
                vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad
                quod
                sed.
            </p>
            <span onclick="window.location.href='details';">More Details..</span>
        </div>
    </div>
    <hr>
    <?php get_footer(); ?>