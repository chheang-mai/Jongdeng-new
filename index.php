<?php include('header.php') ?>
<?php 
   require_once ("function.php");
?>
<section class="trending">
    <div class="container">
        <?php echo getPinedNews() ?>
    </div>

</section>

<section class="news">
    <div class="container">
        <div class="top">
            <h2>Latest News</h2>
        </div>
        <div class="row">
            <?php echo getLatestNews() ?>
        </div>
    </div>
</section>

<section class="news">
    <div class="container">
        <div class="top">
            <h2>Popular News</h2>
        </div>
        <div class="row">
        <?php
            $rs = getPopularNews();

            while($row = mysqli_fetch_assoc($rs) ){
                echo '
                    <div class="col-4">
                    <figure>
                        <div class="thumbnail">
                            <a href="">
                                <img src="http://localhost/jongdeng-news/admin/assets/image/'.$row['thumbnail'].'" alt="">
                            </a>
                        </div>
                    </figure>
                    <figcaption>
                        <h3>
                            <a href="">
                                '.$row['title'].'
                            </a>
                        </h3>
                        <div>
                            <img src="assets/icons/date.svg" alt="">
                            <span>'.$row['created_at'].'</span>
                        </div>
                    </figcaption>
                </div>';
            }
        ?>
        </div>
    </div>
</section>
<?php include('footer.php') ?>