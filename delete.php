<?php 
include "connection.php";

// Check if user_id is present in the request
if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];

    // Write delete query
    $sql = "DELETE FROM `users` WHERE `user_id`='$user_id'";

    // Execute the query
    $result = $con->query($sql);

    if ($result === TRUE) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $con->error;
    }
}
?>


