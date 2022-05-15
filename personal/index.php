<?php session_start(); 
if(!isset($_SESSION['id'])) {
header('Location: ../login.php');
}
include("../path.php");
include(ROOT_PATH . "/app/database/connect.php");
$result = mysqli_query($conn, "SELECT * FROM datas WHERE users_id=".$_SESSION['id']." ORDER BY id ASC");
include(ROOT_PATH . "/includes/header.php");
// include(ROOT_PATH . "/app/controllers/topics.php");
include(ROOT_PATH . "/includes/userside.php");
?>
<?php include(ROOT_PATH . "/includes/messages.php"); ?>

         


   
              
                <div class="py-4">
              
                <div class="d-flex justify-content-between w-100 flex-wrap">
                    <div class="mb-3 mb-lg-0">
                        <h1 class="h4">Store Your Links</h1>
                        <p class="mb-0">Hey <font color="red"><?php echo  $_SESSION['username'] ?></font> Welcome, Save your personal link in here. Dont worry about privacy we will care it all!.</p>
                    </div>
                </div>
                <div class="py-4">
            <div class="row">
        
                <div class="col-12 col-sm-6 col-xl-4 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                    <div class="icon-shape icon-shape-secondary rounded me-4 me-sm-0">
                                        <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                                    </div>
                                    <div class="d-sm-none">
                                        <h2 class="fw-extrabold h5">Number of your Links</h2>
                                        <h3 class="mb-1">  <?php 

include_once(ROOT_PATH . "/app/database/connect.php");

$query = "SELECT id FROM datas WHERE users_id=".$_SESSION['id']." ORDER BY id";
$query_run = mysqli_query($conn, $query);
$row = mysqli_num_rows($query_run);
 
echo '<h5> '.$row.'</h5>';
?></h3>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-7 px-xl-0">
                                    <div class="d-none d-sm-block">
                                        <h2 class="h6 text-gray-400 mb-0">Number of your Links</h2>
                                        <h3 class="fw-extrabold mb-2">  <?php 

include_once(ROOT_PATH . "/app/database/connect.php");

$query = "SELECT id FROM datas WHERE users_id=".$_SESSION['id']." ORDER BY id";
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
            </div>

                                <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

            <div class="dropdown py-0">
                <div class="col">
                    
                    <a href="#" class="btn btn-gray-800 d-inline-flex align-items-center me-2" data-bs-toggle="modal" data-bs-target="#modal-form-signup">
                        Add Links
                    </a>
                    <a href="../index.php" class="btn btn-gray-800 d-inline-flex align-items-center me-2">
                        Back to home
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
                                    <th class="border-0">Actions</th>
                                   
                                </tr>
                            </thead>
<tbody>

<?php
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td><a class='btn btn-primary' href=".$user_data['email']." target='_blank'>Click Here</a></td>";

        echo "<td><div class='dropdown'>
        <button class='btn btn-danger d-inline-flex align-items-center me-2 dropdown-toggle' data-bs-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
            Actions</button><div class='dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1'> 
            <a class='dropdown-item d-flex align-items-center' href='edit.php?id=$user_data[id]'>
            <svg class='dropdown-icon text-gray-400 me-2' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path d='M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z'></path></svg>                            
            View
        </a>
            <a class='dropdown-item d-flex align-items-center' href='delete.php?id=$user_data[id]'>
                <svg class='dropdown-icon text-gray-400 me-2' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path d='M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z'></path></svg>                            
                Delete
            </a>
           
        </div>
    </div></td>     
        </tr>";
    }
    ?>
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

