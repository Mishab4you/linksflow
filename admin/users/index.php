<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
include(ROOT_PATH . "/includes/adminheader.php");
adminOnly();
?>


                    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

                 

                    <div class="py-4">
            <div class="row">
                <div class="col-12 col-sm-6 col-xl-4 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                    <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                                        <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>
                                    </div>
                                    <div class="d-sm-none">
                                        <h2 class="h5">Users</h2>
                                        <h3 class="fw-extrabold mb-1"><?php 

include_once(ROOT_PATH . "/app/database/connect.php");

$query = "SELECT id FROM users WHERE id";
$query_run = mysqli_query($conn, $query);
$row = mysqli_num_rows($query_run);

echo '<h5> '.$row.'</h5>';
?></h3>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-7 px-xl-0">
                                    <div class="d-none d-sm-block">
                                        <h2 class="h6 text-gray-400 mb-0">Users</h2>
                                        <h3 class="fw-extrabold mb-2">
                                        <?php 

include_once(ROOT_PATH . "/app/database/connect.php");

$query = "SELECT id FROM users WHERE id";
$query_run = mysqli_query($conn, $query);
$row = mysqli_num_rows($query_run);

echo '<h5> '.$row.'</h5>';
?>
                                        </h3>
                                    </div>
                                   
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
        
             
            </div>
        </div>
              
                <div class="py-1">
            
            </div>
            <a href="<?php echo BASE_URL . '/admin/users/create.php'; ?>" class="btn btn-gray-800 d-inline-flex">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                        Add Admin
</a>
            <div class="card border-0 shadow mb-4 mt-3">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-0 rounded-start">No.</th>
                                    <th class="border-0">Name</th>
                                    <th class="border-0">Admin = 1</th>
                                    <th class="border-0">Email</th>
                                    <th class="border-0" colspan="2">Actions</th>
                                


                                   
                                </tr>
                            </thead>

                            <tbody>
                            <?php foreach ($admin_users as $key => $user): ?>
                                <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?php echo $user['username']; ?></td>
                                    <td><?php echo $user['admin']; ?></td>

                                    <td><?php echo $user['email']; ?></td>
                                    <td><a class="btn btn-primary" href="edit.php?id=<?php echo $user['id']; ?>" class="edit">edit</a></td>
                                    <td><a class="btn btn-danger" href="index.php?delete_id=<?php echo $user['id']; ?>" class="delete">delete</a></td>
                                </tr>
                            <?php endforeach; ?>

                        </table>
                    </div>
                </div>
            </div>
            <div class="theme-settings card bg-gray-800 pt-2 collapse" id="theme-settings">
    <div class="card-body bg-gray-800 text-white pt-4">
        <button type="button" class="btn-close theme-settings-close" aria-label="Close" data-bs-toggle="collapse"
            href="#theme-settings" role="button" aria-expanded="false" aria-controls="theme-settings"></button>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <p class="m-0 mb-1 me-4 fs-7">Open source <span role="img" aria-label="gratitude">💛</span></p>
            <a class="github-button" href="https://github.com/themesberg/volt-bootstrap-5-dashboard"
                data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-star"
                data-size="large" data-show-count="true"
                aria-label="Star themesberg/volt-bootstrap-5-dashboard on GitHub">Star</a>
        </div>
        <a href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard" target="_blank"
            class="btn btn-secondary d-inline-flex align-items-center justify-content-center mb-3 w-100">
            Download 
            <svg class="icon icon-xs ms-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 9.5A3.5 3.5 0 005.5 13H9v2.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 15.586V13h2.5a4.5 4.5 0 10-.616-8.958 4.002 4.002 0 10-7.753 1.977A3.5 3.5 0 002 9.5zm9 3.5H9V8a1 1 0 012 0v5z" clip-rule="evenodd"></path></svg>
        </a>
        <p class="fs-7 text-gray-300 text-center">Available in the following technologies:</p>
        <div class="d-flex justify-content-center">
            <a class="me-3" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard"
                target="_blank">
                <img src="../assets/img/technologies/bootstrap-5-logo.svg" class="image image-xs">
            </a>
            <a href="https://demo.themesberg.com/volt-react-dashboard/#/" target="_blank">
                <img src="../assets/img/technologies/react-logo.svg" class="image image-xs">
            </a>
        </div>
    </div>
</div>

<div class="card theme-settings bg-gray-800 theme-settings-expand" id="theme-settings-expand">
    <div class="card-body bg-gray-800 text-white rounded-top p-3 py-2">
        <span class="fw-bold d-inline-flex align-items-center h6">
            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
            Settings
        </span>
    </div>
</div>


<!-- Modal ADD LINKS Content -->
<div class="modal fade" id="addlink" tabindex="-1" role="dialog" aria-labelledby="modal-form-signup" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body p-0">
                                                    <div class="card p-3 p-lg-4">
                                                        <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        <div class="text-center text-md-center mb-4 mt-md-0">
                                                            <h1 class="mb-0 h4">Add Links </h1>
                                                        </div>
                                                        <form action="index.php" method="post" enctype="multipart/form-data" class="mt-4">
                                                            <!-- Form -->
                                                          
                                                            <div class="form-group mb-4">
                                                                <label>Name</label>
                                                                <div class="input-group">
                                                                   
                                                                    <input type="text" class="form-control" name="title" value="<?php echo $title ?>"  required>
                                                                </div>  
                                                            </div>
                                                            <div class="form-group mb-4">
                                                                <label>Link</label>
                                                                <div class="input-group">
                                                                   
                                                                    <textarea name="body" class="form-control" id="body"><?php echo $body ?></textarea>
                                                                </div>  
                                                            </div>
                                                            <div class="form-group mb-4">
                                                                <label>Category Name</label>
                                                                <div class="input-group">
                                                                   
                                                                    <input type="text" class="form-control" name="cat" value="<?php echo $cat ?>"  required>
                                                                </div>  
                                                            </div>
                                                            <div class="form-group mb-4">
                            <label>Select Category</label>
                            <select name="topic_id" class="form-control">
                                <option value="">Select</option>
                                <?php foreach ($topics as $key => $topic): ?>
                                    <?php if (!empty($topic_id) && $topic_id == $topic['id'] ): ?>
                                        <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                                    <?php endif; ?>

                                <?php endforeach; ?>

                            </select>
                        </div>
                       
                      
                                                            <div class="form-group">
                                                                <!-- End of Form -->
                                                                <div class="mb-4">
                                                                    <div class="form-check">
                            <?php if (empty($published)): ?>
                                <label class="form-check-label fw-normal mb-0" for="remember">
                                    <input class="form-check-input" type="checkbox"  name="published">
                                    Publish
                                </label>
                            <?php else: ?>
                                <label class="form-check-label fw-normal mb-0" for="remember">
                                    <input  class="form-check-input" type="checkbox" name="published" checked>
                                    Publish
                                </label>
                            <?php endif; ?>
                           

                                                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-grid">
                                                                <button type="submit"  name="add-post" class="btn btn-gray-800">Add Link</button>
                                                            </div>
                                                        </form>
                                                       
                                                    
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

<?php 
include(ROOT_PATH . "/includes/footer.php");
?>

              