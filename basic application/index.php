<?php include "header.php" ;?>
    <section class="std_data">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center"> All students data </h2>


                    <!-- table start -->
                    <table id="students" class="table table-striped table-bordered" >
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#Sl</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Email Address</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Present Address</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                $query = "SELECT * FROM students ORDER BY name ASC";
                                $allData = mysqli_query($connect, $query);
                                $i = 0;

                                while( $row = mysqli_fetch_assoc($allData)){
                                  $id       = $row['id'];
                                  $name     =  $row['name'];
                                  $phone    =  $row['phone'];
                                  $email    =  $row['email'];
                                  $address  =  $row['address'];
                                  $i++;
                            ?>

                                <tr>
                                  <th scope="row"><?php echo $i; ?></th>
                                  <td><?php echo $name; ?></td>
                                  <td><?php echo $phone; ?></td>
                                  <td><?php echo $email; ?></td>
                                  <td><?php echo $address; ?></td>
                                    <td>
                                        <div class="action-btn">
                                            <ul>
                                                <li>
                                                    <!-- edit fuatured -->
                                                    <a href="update.php?id=<?php echo $id; ?>"><i class="fa fa-edit"></i></a>
                                                    <!-- delate fuatured -->
                                                    <a href="" data-bs-toggle="modal" data-bs-target="#delete<?php echo $id; ?>"><i class="fa fa-trash"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- modal start -->
                                        <div class="modal fade" id="delete<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Are you sure delete this data?</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <div class="modal-btn">
                                                            <ul>
                                                                <li> <a href="" data-bs-dismiss="modal" class="btn btn-success"> Cancel</a></li>

                                                                <li><a href="index.php?did=<?php echo $id; ?>" class="btn btn-danger" >Confirm</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->
                                    </td>
                                </tr>
                            <?php
                                }
                            ?>
                            
                        </tbody>
                    </table>

                    <a href="create.php" class="btn btn-outline-info">Register new student</a>

                    <!-- table end -->
                </div>
            </div>

        </div>
    </section>

    <?php
      if(isset($_GET['did'])){
        $deleteID = $_GET['did'];

        //delete command from database 
        $query = "DELETE FROM students WHERE id= '$deleteID'";

        $deleteData = mysqli_query( $connect, $query);

        if( $deleteData )
        {
          header("Location: index.php");
        }
        else{
          echo "Opps!!! Something went Wrong";
        }

      }
    ?>

<?php include "footer.php" ?>