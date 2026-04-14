<?php
include('config/db_connect.php');

if (isset($_GET['event_id'])) {
    $event_id = mysqli_real_escape_string($conn, $_GET['event_id']);

    //Delete from announcements
    $deleteQuery6 = "DELETE FROM announcements WHERE event_id = '$event_id'";
    $deleteQuery6Result = mysqli_query($conn,$deleteQuery6);
    
    // Delete from vol_participate_event
    $deleteQuery1 = "DELETE FROM vol_participate_event WHERE event_id = '$event_id'";
    if (mysqli_query($conn, $deleteQuery1)) {

        // Delete from club_host_event or authority_host_event based on conditions
        $getHostEventTable = "SELECT req_club_id, faculty_id FROM event_details WHERE id = $event_id";
        $result = $conn->query($getHostEventTable);

        if ($result !== false) {
            $row = $result->fetch_assoc();
            $reqClubId = $row['req_club_id'];
            $reqAuthorityId = $row['faculty_id'];

            if ($reqAuthorityId == 0) {
                $deleteQuery2 = "DELETE FROM club_host_event WHERE event_id = '$event_id' AND club_id = '$reqClubId'";
            } elseif ($reqClubId == 0) {
                $deleteQuery2 = "DELETE FROM authority_host_event WHERE event_id = '$event_id' AND authority_id = '$reqAuthorityId'";
            }

            // Execute the second delete query
            if (isset($deleteQuery2) && mysqli_query($conn, $deleteQuery2)) {

                // Finally, delete from event_details
                $deleteQuery3 = "DELETE FROM event_details WHERE id = '$event_id'";
                
                if (mysqli_query($conn, $deleteQuery3)) {
                    // Redirect to the previous page after successful deletion
                    header("Location: admin_manage_event.php");
                    exit();
                } else {
                    // Handle deletion error for event_details
                    echo "Error deleting event_details: " . mysqli_error($conn);
                }
            } else {
                // Handle deletion error for club_host_event or authority_host_event
                echo "Error deleting host event: " . mysqli_error($conn);
            }
        } else {
            // Handle error in fetching data from event_details
            echo "Error fetching data from event_details: " . mysqli_error($conn);
        }
    } else {
        // Handle deletion error for vol_participate_event
        echo "Error deleting participation records: " . mysqli_error($conn);
    }
} else {
    // If no event_id is provided in the URL, redirect to admin_manage_event.php
    header("Location: admin_manage_event.php");
    exit();
}
?>