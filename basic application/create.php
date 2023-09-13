<?php include "header.php" ?>
<section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h1>Register Students information</h1>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="">Full Name</label>
                            <input type="text" name="fullname" class="form-control" required="required">
                        </div>
                        <div class="mb-3">
                            <label for="">Email Address</label>
                            <input type="text" name="email" class="form-control" required="required">
                        </div>
                        <div class="mb-3">
                            <label for="">Phone Number</label>
                            <input type="text" name="phone" class="form-control" required="required">
                        </div>
                        <div class="mb-3">
                            <label for="">Present Address</label>
                            <input type="text" name="address" class="form-control" required="required">
                        </div>
                        <div class="mb-3">
                            <input type="submit" name="register" class="btn btn-success" value="Register">
                        </div>
                        <?php
                            if(isset($_POST['register'])){

                                $fullname = $_POST['fullname'];
                                $phone    = $_POST['phone'];
                                $email    = $_POST['email'];
                                $address  = $_POST['address'];

                                // This is SQL command line insert a data into the database
                                $query = "INSERT INTO students( name, phone, email, address) VALUES('$fullname', '$phone', '$email', '$address')";

                                $add_student = mysqli_query($connect, $query);

                                if($add_student){
                                    header("Location: index.php");
                                }
                                else{
                                    echo "something went wrong!!!!";
                                }
                            }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
<?php include "footer.php" ?>