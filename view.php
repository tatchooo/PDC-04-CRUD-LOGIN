<?php 
include "db_connection.php"; 

// Retrieve users from the database
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Page</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Users</h2>
            <a class="btn btn-success" href="create.php">
                <i class="fas fa-plus"></i> Add New Record
            </a>
        </div>
        
        <br>

        <table class="table">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                if($result->num_rows > 0)
                {
                    while ($row = $result->fetch_assoc())
                    {
                        ?>
                        <tr>
                            <td><?php echo $row['user_id']; ?></td>
                            <td><?php echo $row['first_name']; ?></td>
                            <td><?php echo $row['last_name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo ($row['level'] == 1) ? 'Admin' : 'User'; ?></td>
                            <td>
                                <a class="btn btn-info" href="update.php?user_id=<?php echo $row['user_id']; ?>">Edit</a>
                                <a class="btn btn-danger" href="delete.php?user_id=<?php echo $row['user_id']; ?>">Delete</a>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>

        </table>
        <a href="admin-page.php" class="btn btn-primary mt-4">Back to Admin Page</a>

    </div>
    
</body>
</html>
