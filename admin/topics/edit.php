<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/topics.php");
include(ROOT_PATH . "/includes/adminheader.php");
adminOnly();
?>


                    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

                <div class="py-1">
            
            </div>
                    <a href="<?php echo BASE_URL . '/admin/topics/index.php'; ?>" class="btn btn-gray-800 d-inline-flex">
                    <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
                        Back
</a>
                  
            
        
  <!-- Section -->
  <div class="container">
  <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center form-bg-image" data-background-lg=>
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 class="mb-0 h3">Edit : <font color="red"><?php echo $name; ?> </font></h1>
                                <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
                            </div>
                    <!-- Form -->
                        <form action="edit.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $id ?>"> 

                                <div class="form-group mb-4">
                                    <label>Title</label>
                                    <div class="input-group">                                       
                                        <input type="text" class="form-control"name="name" value="<?php echo $name; ?>" autofocus required>
                                    </div>  
                                </div>

                                <div class="form-group mb-4">
                                    <label for="email">Description</label>
                                    <div class="input-group">
                                    <textarea class="form-control" name="description" id="body"><?php echo $description; ?></textarea>

                                    </div>  
                                </div>
                                <!-- End of Form -->
                            
                                <div class="d-grid">
                                    <button type="submit"  name="update-topic" class="btn btn-gray-800">Update</button>
                                </div>
                            </form>
                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>





<?php 
include(ROOT_PATH . "/includes/footer.php");
?>

              