<?php 
//die('w');
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['email'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>User Page</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h2 class="mt-5">Welcome User !</h2>
                <h1 class="display-4 mt-4">Hello, <?php echo $_SESSION['email']; ?></h1>
                <h1 class="fs-6">First Name: <?php echo $_SESSION['first_name'];?></h1>
                <h1 class="fs-6">Last Name: <?php echo $_SESSION['lastname'];?></h1>
                <a href="logout.php" class="btn btn-primary mt-4">Logout</a>
            </div>
        </div>
    </div>
</body>

</html>

<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>