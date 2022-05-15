

    <?php
    include("../path.php");
    include(ROOT_PATH . "/app/database/connect.php");

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];

        $name=$_POST['name'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];

        // update user data
        $result = mysqli_query($conn, "UPDATE datas SET name='$name',email='$email',mobile='$mobile' WHERE id=$id");
        header("Location: index.php");
    }
    ?>
    <?php
    $id = $_GET['id'];

    $result = mysqli_query($conn, "SELECT * FROM datas WHERE id=$id");

    while($user_data = mysqli_fetch_array($result))
    {
        $name = $user_data['name'];
        $email = $user_data['email'];
        $mobile = $user_data['mobile'];
    }
    ?>
    <html>
    <head>
        <title>Edit User Data</title>
    </head>

    <body>
    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body p-0">
                                                        <div class="card p-3 p-lg-4">
                                                            <!-- <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                                            <div class="text-center text-md-center mb-4 mt-md-0">
                                                                <h1 class="mb-0 h4">Copy <?php echo $name; ?></h1>
                                                            </div>
                                                            <form name="update_user" method="post" action="edit.php" class="mt-4">
                                                                <!-- Form -->
                                                                <!-- <div class="form-group ">
                                                                    <label for="email">Title</label>
                                                                    <div class="input-group">
                                                                    
                                                                        <input type="text" class="form-control" placeholder="" id="" name="name" autofocus required><?php echo $name; ?></input>
                                                                    </div>  
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label for="email">Category</label>
                                                                    <div class="input-group">
                                                                    
                                                                        <input type="text" class="form-control" placeholder="" id="" name="mobile" autofocus required><?php echo $mobile; ?></input>
                                                                    </div>  
                                                                </div> -->
                                                                <!-- End of Form -->
                                                                <div class="form-group">
                                                                    <!-- Form -->
                                                                    <div class="form-group mb-4">
                                                                        <label for="password">Link</label><br><br>
                                                                        <div class="input-group">
                                                                        
                                                                            <input type="text" placeholder="" class="form-control" name="email" id="myInput" value="<?php echo $email; ?>" required>
                                                                        </div><br><br>
                                                                        <div class="col mt-3">
                                                                        <button type="button" class="btn btn-sm btn-primary" onclick="myFunction()">Copy the link</button>
                                                                        <!-- <button class="btn btn-sm  btn-primary" name="update">Share the link</button> -->
                                                                        <script>
                                                                        function myFunction() {
                                                                        var copyText = document.getElementById("myInput");
                                                                        copyText.select();
                                                                        copyText.setSelectionRange(0, 99999)
                                                                        document.execCommand("copy");
                                                                        }
                                                                        </script>

                                                                        </div>
                                                                    </div>
                                                                    <!-- End of Form -->
                                                                
                                                                </div>
                                                            
                                                            </form>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

    </body>
    </html>