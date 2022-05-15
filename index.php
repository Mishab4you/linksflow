
<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");
include(ROOT_PATH . "/includes/header.php");
include(ROOT_PATH . "/includes/sidebar.php");



$posts = array();
$postsTitle = 'Recent Posts';

if (isset($_GET['t_id'])) {
  $posts = getPostsByTopicId($_GET['t_id']);
  $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
} else if (isset($_POST['search-term'])) {
  $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
  $posts = searchPosts($_POST['search-term']);
} else {
  $posts = getPublishedPosts();
}

?>
          <?php include(ROOT_PATH . "/includes/messages.php"); ?>


         


   
              
          <div class="py-4">
            <div class="row">
            <div class="col-12 col-sm-6 col-xl-4 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                    <div class="icon-shape icon-shape-tertiary rounded me-4 me-sm-0">
                                        <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                    </div>
                                    <div class="d-sm-none">
                                        <h2 class="fw-extrabold h5">Working Links</h2>
                                        <h3 class="mb-1">98%</h3>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-7 px-xl-0">
                                    <div class="d-none d-sm-block">
                                        <h2 class="h6 text-gray-400 mb-0">Working Links</h2>
                                        <h3 class="fw-extrabold mb-2">98%</h3>
                                    </div>
                                  
                                </div>          
                            </div>
                        </div>
                    </div>
                </div>
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

$query = "SELECT id FROM users ORDER BY id";
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

$query = "SELECT id FROM users ORDER BY id";
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
                
                        <div class="col-12 col-sm-6 col-xl-4 mb-4">
                            <div class="card border-0 shadow">
                                <div class="card-body">
                                    <div class="row d-block d-xl-flex align-items-center">
                                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                            <div class="icon-shape icon-shape-secondary rounded me-4 me-sm-0">
                                                <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                                            </div>
                                            <div class="d-sm-none">
                                                <h2 class="fw-extrabold h5">Number of Links</h2>
                                                <h3 class="mb-1">  <?php 

        include_once(ROOT_PATH . "/app/database/connect.php");

        $query = "SELECT id FROM posts ORDER BY id";
        $query_run = mysqli_query($conn, $query);
        $row = mysqli_num_rows($query_run);
        
        echo '<h5> '.$row.'</h5>';
        ?></h3>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-7 px-xl-0">
                                            <div class="d-none d-sm-block">
                                                <h2 class="h6 text-gray-400 mb-0">Number of Links</h2>
                                                <h3 class="fw-extrabold mb-2">  <?php 

        include_once(ROOT_PATH . "/app/database/connect.php");

        $query = "SELECT id FROM posts ORDER BY id";
        $query_run = mysqli_query($conn, $query);
        $row = mysqli_num_rows($query_run);
        
        echo '<h5> '.$row.'</h5>';
        ?></h3>
                                            </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
              
                <div class="py-0">
              
                <div class="d-flex justify-content-between w-100 flex-wrap">
                    <div class="mb-3 mb-lg-0">
                        <h1 class="h4">Find your Links</h1>
                        <p class="mb-0">Now on days its very difficult to find some website's links that you want, now there is a way to find your links. we are indroducing our website to find your links. Search it now.</p>
                    </div>
                  
                </div>
            </div>
            <div class="dropdown py-3">
                <div class="col">
                    <button class="btn btn-gray-800 d-inline-flex align-items-center me-2 dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                    </button>
                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1">
                    <a class="dropdown-item d-flex align-items-center" href="<?php echo BASE_URL . '/index.php'?>">All</a>
                    <?php foreach ($topics as $key => $topic): ?>
                        <a class="dropdown-item d-flex align-items-center" href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"> <?php echo $topic['name']; ?> </a>
                        <?php endforeach; ?>
                        
                    </div>
                    
                    <a href="personal/index.php" class="btn btn-gray-800 d-inline-flex align-items-center me-2">
                        My Links
                    </a>
                 
                </div>
                </div>
   


    
    <div class="card border-0 shadow mb-4 mt-3">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="thead-light">
                                <tr>
                                <th class="border-0 rounded-start">No.</th>
                                    <th class="border-0">Name</th>
                                    <th class="border-0">Category</th>
                                    <th class="border-0">Link</th>
                                    <th class="border-0">Date</th>
                                   
                                </tr>
                            </thead>

<tbody>
<?php foreach ($posts as $post): ?>
    <tr>
        <td><a href="<?php echo $post['body']; ?>" class="text-primary fw-bold"><?php echo $post ['id']; ?></a> </td>
        <td class="fw-bold d-flex align-items-center"><a href="index.php?id=<?php echo $post['id']; ?>" class="text-primary fw-bold" data-bs-toggle="modal" data-bs-target="#modal-form"><?php echo $post['title']; ?></td>
        <td><?php echo $post['cat'] ?></td>
        <td><a href="<?php echo $post['body']; ?>" class="btn btn-primary" target="_blank">Click</a></td>
        <td> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></td>                                                               
    </tr>       
    <?php endforeach; ?>
                    
</tbody>
</table>
</div>
</div>
</div>






   <!-- Modal Content -->
   <div class="modal fade" id="modal-form-signup" tabindex="-1" role="dialog" aria-labelledby="modal-form-signup" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body p-0">
                                                    <div class="card p-3 p-lg-4">
                                                        <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        <div class="text-center text-md-center mb-4 mt-md-0">
                                                            <h1 class="mb-0 h4">Create a New Link </h1>
                                                        </div>


                                                        <form action="add.php" method="post" name="form1" class="mt-4">
                                                            <!-- Form -->
                                                            <div class="form-group mb-4">
                                                                <label for="text">Title</label>
                                                                <div class="input-group">
                                                                    
                                                                    <input type="text" class="form-control" placeholder="Title of your link" name="name" autofocus required>
                                                                </div>  
                                                            </div>
                                                            <!-- End of Form -->
                                                            <div class="form-group">
                                                                <!-- Form -->
                                                                <div class="form-group mb-4">
                                                                    <label for="text">Category</label>
                                                                    <div class="input-group">
                                                                       
                                                                        <input type="text" placeholder="The purpose of your link" class="form-control"  name="mobile" required>
                                                                    </div>  
                                                                </div>
                                                                <!-- End of Form -->
                                                                <!-- Form -->
                                                                <div class="form-group mb-4">
                                                                    <label for="confirm_password">Link</label>
                                                                    <div class="input-group">
                                                                       
                                                                        <textarea type="text" placeholder="The working link" class="form-control" name="email" required></textarea>
                                                                    </div>  
                                                                </div>
                                                                <!-- End of Form -->
                                                               
                                                            </div>
                                                            <div class="d-grid">
                                                                <button type="submit" name="Submit" value="Add" class="btn btn-gray-800">Add the link</button>
                                                            </div>
                                                        </form>

                                                        <?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile']; 
    $users_id = $_SESSION['id'];
    

    ?>

    <?php
    include("../path.php");
    include(ROOT_PATH . "/app/database/connect.php"); ?>

    <?php
    // Insert user data into table
    $result = mysqli_query($conn, "INSERT INTO datas(name,email,mobile,users_id) VALUES('$name','$email','$mobile','$users_id')");

    // Show message when user added
    echo $_SESSION['message'] = "Post created successfully";
    echo $_SESSION['type'] = "success";
    
    header('Location: index.php');
    }
?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

      

                                   










    <?php 
include(ROOT_PATH . "/includes/footer.php");
?>

