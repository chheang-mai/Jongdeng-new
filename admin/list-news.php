<?php 
    include('sidebar.php');
?>
                <div class="col-10">
                    <div class="content-right">
                        <div class="top">
                            <h3>All Posts</h3>
                        </div>
                        <div class="bottom view-post">
                            <figure>
                                <form method="post" enctype="multipart/form-data">
                                    <table class="table" border="1px">
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>thumbnail</th>
                                            <th>pined</th>
                                            <th>cate_name</th>
                                            <th>Author</th>
                                            <th>viewer</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                        <?php listNews(); ?>
                                    </table>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModel1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure to remove this post?</h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="" method="post">
                                                        <input type="hidden" class="value_remove" name="remove_id" value="1">
                                                        <button type="submit" class="btn btn-danger" name="btn-remove-news">Yes</button>
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>  
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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