<?php 
    include('sidebar.php');
    $postID = $_GET['id'];
    $tableName = 'category';
    $currentPost = getCurrentPost($postID, $tableName);
   
?>
                <div class="col-10">
                    <div class="content-right">
                        <div class="top">
                            <h3>Update cate</h3>
                        </div>
                        <div class="bottom">
                            <figure>
                                <form method="post" enctype="multipart/form-data">
            
                                    <input type="hidden" name="id" value="<?php echo $currentPost['id'] ?>">
                                    <input type="hidden" name="name" value="<?php echo $currentPost['name'] ?>">
                                    <div class="form-group">
                                        <label>category</label> <br>
                                        <select name="category" class="form-select">
                                            <?php 
                                                $currentCateID = $currentPost['category_id'];
                                                echo getAllCategory($currentCateID) 
                                            ?>
                                        </select>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <button type="submit" name="btn-update-cate" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>