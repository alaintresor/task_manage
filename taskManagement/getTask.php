<?php
include "connection.php";
$item = $_POST['item'];

$query = "SELECT *  FROM `tasks` WHERE `proj_id`='$item'";

$data = mysqli_query($connect, "$query");

?>

<option value="#">Select Task</option>
<?php
while ($row = mysqli_fetch_array($data)) {
?>
    <option value="<?php echo $row[0] ?>">
        <?php
        echo $row[1]
        ?></option>

<?php
}

?>