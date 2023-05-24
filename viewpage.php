<?php
include "connection.php";

$sql = "SELECT * FROM task";
$result = mysqli_query($conn, $sql);

// if (isset($_GET['firstname'])) {
//     $firstname= $_GET['firstname'];
//     $delete=mysqli_query($conn,"DELETE FROM 'task' WHERE 'firstname'='$firstname'");
//     // if (mysqli_query($conn, $sql)) {
//     //     echo "Record deleted successfully.";
//     // } else {
//     //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//     // }
// }
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Users</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['firstname']; ?></td>
                            <td><?php echo $row['lastname']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td>
                            
                                <a class="btn btn-info" href="update.php?firstname=<?php echo $row['firstname']; ?>">Edit</a>
                                <a class="btn btn-danger" href="delete.php?firstname=<?php echo $row['firstname'];?>">Delete</a>
                                
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "<tr><td colspan='6'>No users found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
