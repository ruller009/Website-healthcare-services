<div class="col-lg-4 col-md-6 wow fadeInUp" >
    <div class="blog-item">
        <div class="blog-img">
            <img src="<?php echo $data["save"][$no]["intro_img"]; ?>" alt="Blog">
        </div>
        <div class="blog-text">
            <h2><?php echo $data["save"][$no]["short_title"]; ?></h2>
            <div class="blog-meta">
                <p><i class="far fa-list-alt"></i>Body Fitness</p>
                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                <p><i class="far fa-comments"></i>5</p>
            </div>
            <p>
                <?php echo $data["save"][$no]["short_heading"]; ?>
            </p>
            <a class="btn" href="<?php echo "http://localhost/prj2/News/NewsDetail/".$data["save"][$no]["id"]; ?>">Read More <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</div>   
