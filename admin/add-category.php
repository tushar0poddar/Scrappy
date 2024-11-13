<?php
include 'header.php';
?>

  <!-- START: Main Content-->
  <main>
            <div class="container-fluid site-width">
                <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0"><b>Add Category</b></h4></div>
                            
                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                               <li class="breadcrumb-item"><a href="user-index.php">Home</a></li>
                               
                                <li class="breadcrumb-item active"><a href="#">Basic</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->

                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12 mt-4">
                        <div class="card">
                            
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">                                           
                                        <div class="col-12">
                                            <form action="save-category.php" method="post" >
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4">Category Name</label>
                                                        <input type="text" name="name" class="form-control rounded" id="inputEmail4" placeholder="Category name">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4">Category Type</label>
                                                        <select name="type" class="form-control rounded">
                                                            <option>Scrap</option>
                                                            <option>Creative</option>
                                                            
</select>
                                                    </div>
                                                   
                                                </div>
                                                

                                                <button type="submit" class="btn btn-primary">Add Category</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Card DATA-->
            </div>
        </main>
        <!-- END: Content-->

        <?php

        include 'footer.php';

        ?>
