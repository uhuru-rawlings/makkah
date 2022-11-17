<?php
    include_once("../../config.php");
    include_once("../database/Database.php");
    include_once("../models/Registration.php");
    $_SESSION['active'] = "users";
    if(isset($_COOKIE['adminuser'])){

    }else{
        header("Location: ../auth/index.php");
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../assets/images/logo (2).png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/all.css">
    <link rel="stylesheet" href="../assets/css/brands.css">
    <link rel="stylesheet" href="../assets/css/solid.css">
    <link rel="stylesheet" href="../assets/css/regular.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>Al-Ihsan Tours & Travel Ltd</title>
</head>
<body>
    <section class="top-nav">
        <?php
            include("../includes/topnav.php");
        ?>
    </section>
    <section class="fullbody-content">
        <section class="sidenav" id="sidenavbar">
            <?php
                include("../includes/sidenav.php");
            ?>
        </section>
        <section class="body-content">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL."admin/index.php" ?>">Home</a></li>
                    <li class="breadcrumb-item active">List Users</li>
                </ol>
                <div class="card" style="margin-top: 15px;">
                    <div class="card-header">
                        List Users
                    </div>
                    <div class="card-body">
                            <?php
                                if(isset($_GET['delete-success'])){
                                    echo "<div class='alert alert-success'>".$_GET['delete-success']."</div>";
                                }else if(isset($_GET['delete-error'])){
                                    echo "<div class='alert alert-danger'>".$_GET['delete-error']."</div>";
                                }
                            ?>
                        <table class="table table-hover table-bordered">
                            <thead class="bg-primary text-light">
                                <tr>
                                    <th>Id</th>
                                    <th>Fist Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Roles</th>
                                    <th>Date Added</th>
                                    <th>Last Modified</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $conn = new Database();
                                    $db = $conn -> connection();
                                    $user = new Registration($db);
                                    $update = $user -> getAllUsers();
                                    if($update){
                                        foreach($update as $user){
                                ?>
                                <tr>
                                    <td><?php echo $user['id'] ?></td>
                                    <td><?php echo $user['Fname'] ?></td>
                                    <td><?php echo $user['Lname'] ?></td>
                                    <td><?php echo $user['Email'] ?></td>
                                    <td><?php echo $user['Phone'] ?></td>
                                    <td>
                                        <?php 
                                        if($user['Roles'] == "Admin"){ 
                                            echo "<button class='btn btn-success'>Admin</button>";
                                        }else{
                                          echo "<button class='btn btn-info text-light'>User</button>";
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo $user['Date_added'] ?></td>
                                    <td><?php echo $user['Last_Modified'] ?></td>
                                    <td>
                                        <a href="update-destination.php?update=<?php echo $destination['id'] ?>"><i class="fa-solid fa-pen"></i></a>
                                        <a class="text-danger" href="delete-destination.php?delete=<?php echo $destination['id'] ?>"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php
                                        }
                                    }else{
                                        echo '<tr>
                                                <td colspan="5">No Location Available</td>
                                              </tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <section class="footer">
            <?php
                include("../includes/footer.php");
            ?>
        </section>
    </section>
</body>
<script src="../assets/js/index.js"></script>
<script src="../assets/js/main.d810cf0ae7f39f28f336.js"></script>
<script src="../assets/js/all.js"></script>
<script src="../assets/js/brands.js"></script>
<script src="../assets/js/solid.js"></script>
<script src="../assets/js/regular.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
</html>