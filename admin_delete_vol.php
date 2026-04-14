<?php
include('config/db_connect.php');

if (isset($_GET['student_id'])) {
    $student_id = mysqli_real_escape_string($conn, $_GET['student_id']);

    // Delete the event with the given ID
    $deleteQuery = "DELETE FROM volunteer WHERE student_id = '$student_id'";
    
    $deleteQuery1 = "DELETE FROM vol_participate_event where student_id = '$student_id'";
    $result = mysqli_query($conn, $deleteQuery1);
    
    $deleteQuery2 = "DELETE FROM posts where student_id ='$student_id' ";
    $result2 = mysqli_query($conn, $deleteQuery2);
    
    $deleteQuery3 = "DELETE from comments where user_id = '$student_id'";
    $result3 = mysqli_query($conn, $deleteQuery3);

    if (mysqli_query($conn, $deleteQuery)) {
        // Redirect to the previous page after deletion
        header("Location: admin_vol_page.php");
        exit();
    } else {
        // Handle deletion error
        echo "Error deleting event: " . mysqli_error($conn);
    }
} else {
    // If no student_id is provided in the URL, redirect to admin_vol_page.php
    header("Location: admin_vol_page.php");
    exit();
}
?>