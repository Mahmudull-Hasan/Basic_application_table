<?php include "header.php" ?>
<section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h1>Update Students information</h1>


                <?php
                    if(isset($_GET['id']))
                    
                    {
                        $updateID = $_GET['id'];
                        $query    = "SELECT * FROM students WHERE id='$updateID'";

                        $data     = mysqli_query($connect, $query);

                        while( $row = mysqli_fetch_assoc($data)){
                            $id       =  $row['id'];
                            $name     =  $row['name'];
                            $phone    =  $row['phone'];
                            $email    =  $row['email'];
                            $address  =  $row['address'];
                ?>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="">Full Name</label>
                                <input type="text" name="fullname" class="form-control" required="required" value="<?php echo $name;?>">
                            </div>
                            <div class="mb-3">
                                <label for="">Email Address</label>
                                <input type="text" name="email" class="form-control" required="required" value="<?php echo $email;?>">
                            </div>
                            <div class="mb-3">
                                <label for="">Phone Number</label>
                                <input type="text" name="phone" class="form-control" required="required" value="<?php echo $phone;?>">
                            </div>
                            <div class="mb-3">
                                <label for="">Present Address</label>
                                <input type="text" name="address" class="form-control" required="required" value="<?php echo $address;?>">
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="update" class="btn btn-success" value="save changes">
                            </div>
                            
                        </form>

                <?php
                        }
                    }
                ?>


                <?php
                    if(isset($_POST['update'])){

                        $fullname = $_POST['fullname'];
                        $phone    = $_POST['phone'];
                        $email    = $_POST['email'];
                        $address  = $_POST['address'];

                        // SQL command line to existing data

                        $query = "UPDATE students SET name='$fullname', phone='$phone', email='$email', address='$address' WHERE id='$updateID' ";

                        //create data process from sql database
                        //$query = "INSERT INTO students( name, phone, email, address) VALUES('$fullname', '$phone', '$email', '$address')";

                        $update_student = mysqli_query($connect, $query);

                        if($update_student){
                            header("Location: index.php");
                        }
                        else{
                            echo "something went wrong!!!!";
                        }
                    }
                ?>

                </div>
            </div>
        </div>
    </section>
    
<?php include "footer.php" ?>