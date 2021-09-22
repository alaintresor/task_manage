<?php
include 'connection.php';
$id = $_GET['id'];
$query = "UPDATE  `assigned_tasks` SET status='approved' WHERE `id`='$id'";
$done = mysqli_query($connect, "$query");
if ($done) {
    echo "<script>alert('task approved')</script>";
?>
    <script>
        window.history.go(-1);
    </script>
<?php
    // header("Location:All_Users.php");
} else {
    echo "noo";
}
