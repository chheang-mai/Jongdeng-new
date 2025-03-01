<?php include('header.php') ?>  
<?php 
    if (isset($_GET['id'])) {
        require_once ("function.php");
        $id = $_GET['id'];
        $news = detailNews($id);

        viewerCounter($news['id'], $news['viewer']);
    } else {
        header("Location: index.php");
    }


?>
<section class="article">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <figure>
                    <div class="thumbnail">
                        <img src="http://localhost/jongdeng-news/admin/assets/image/<?php echo $news['thumbnail'] ?>" alt="">
                    </div>
                </figure>
                <figcaption>
                    <h3><?php echo $news['title'] ?></h3>
                    <div class="date">
                        <img src="assets/icons/date.svg" alt="">
                        <h6><?php echo $news['created_at'] ?></h6>
                    </div>
                    <div class="date">
                        <img src="assets/icons/eye.svg" alt="">
                        <h6><?php echo $news['viewer'] ?></h6>
                    </div>
                    <div class="line"></div>
                    <div class="description">
                    <?php echo $news['description'] ?>
                    </div>
                </figcaption>
            </div>
        </div>
    </div>
</section>

<section class="news">



    <div class="container">
        <div class="top">
            <h2>Related News</h2>
        </div>
        <div class="row">
        <?php
            $rs = getRelateNews($news['category_id'], $news['id']);

            while($row = mysqli_fetch_assoc($rs) ){
                echo '
                    <div class="col-4">
                    <figure>
                        <div class="thumbnail">
                            <a href="">
                                <img src="http://localhost/jongdeng-news/admin/assets/image/'.$news['thumbnail'].'" alt="">
                            </a>
                        </div>
                    </figure>
                    <figcaption>
                        <h3>
                            <a href="">
                                1990 World Cup Finals 3rd Shirt
                            </a>
                        </h3>
                        <div>
                            <img src="assets/icons/date.svg" alt="">
                            <span>19 Jun, 2023</span>
                        </div>
                    </figcaption>
                </div>';
            }
        ?>
            

        </div>
    </div>
</section>
<?php include('footer.php') ?>