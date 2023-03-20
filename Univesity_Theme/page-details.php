<?php get_header('blog'); ?>
<div class="page-banner">
    <div class="page-banner__bg-image"
        style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg')?>"></div>
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title">Details Page</h1>
        <div class="page-banner__intro">
        </div>
    </div>
</div>
<div class="details">
    <h1>%Test%</h1>
    <span>March 20, 2023 / by Mohammad KaraBala</span>
    <hr>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia placeat expedita quibusdam asperiores et ad
        delectus rem eum quisquam cumque soluta, provident labore mollitia consequuntur, laboriosam autem totam
        reiciendis fugit?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia placeat expedita quibusdam asperiores et ad
        delectus rem eum quisquam cumque soluta, provident labore mollitia consequuntur, laboriosam autem totam
        reiciendis fugit?</p>
    <ul>
        <li>Hello World</li>
        <li>Hello World</li>
        <li>Hello World</li>
        <li>Hello World</li>
        <li>Hello World</li>
    </ul>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia placeat expedita quibusdam asperiores et ad
        delectus rem eum quisquam cumque soluta, provident labore mollitia consequuntur, laboriosam autem totam
        reiciendis fugit?</p>
    <img src="<?php echo get_theme_file_uri('images/1.jpg')?>" alt="" class="posts">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia placeat expedita quibusdam asperiores et ad
        delectus rem eum quisquam cumque soluta, provident labore mollitia consequuntur, laboriosam autem totam
        reiciendis fugit?</p>
    <span class="back" onclick="window.location.href='interior-page.html';">Back To Blog Page</span>
</div>
<?php get_footer(); ?>