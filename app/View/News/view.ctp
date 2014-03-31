<div class="row" style="text-align: justify; margin-bottom: 20px; background-color: rgba(0, 0, 0, 0.75)">
    <div class="container">
        <div class="col-sm-8 blog-main">

            <div class="blog-post">
                <h2 class="blog-post-title"><?php echo $news['News']['titulo'] ?></h2>

                <p class="blog-post-meta"><?php echo $news['News']['created'] ?><a
                        href="#"><?php echo $news['Author']['nick'] ?></a></p>

                <p><?php echo $news['News']['body'] ?></p>

            </div>
        </div>
        <div class="col-sm-4">

        </div>
    </div>
</div>

