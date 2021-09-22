<?php

include "connection.php";
$item = $_POST['item'];

$query = "SELECT *  FROM `tasks` WHERE `proj_id`='$item'";

$data = mysqli_query($connect, "$query");
if (mysqli_num_rows($data) <= 0) {
    echo 'No Task found';
} else {
?>
    <p>
        <!-- <h2>Select Task</h2> -->
        <th>Task Name</th>

        <th>Developer name</th>
        <th>Developer Contact</th>
        <th>Deadline</th>
        <th>status</th>

        <th>Action</th>
        <?php }
    while ($row = mysqli_fetch_array($data)) {
        $taskid = $row[0];
        $select_assigned_task = mysqli_query($connect, "SELECT * FROM assigned_tasks WHERE task_id='$taskid'");

        while ($row1 = mysqli_fetch_array($select_assigned_task)) {
            $userid = $row1['user_id'];
            $select_user_info = mysqli_query($connect, "SELECT * FROM users WHERE id='$userid'");
            while ($row2 = mysqli_fetch_array($select_user_info)) {
        ?>
                <tr>
                    <td><?php echo $row['task_name'] ?></td>
                    <td><?php echo $row2['names'] ?></td>
                    <td><?php echo "Tel: " . $row2['tel'] . " / email: " . $row2['email'] ?></td>
                    <td><?php echo $row1['deadline'] ?></td>
                    <td><?php echo $row1['status'] ?></td>
                    <td><?php if ($row1['link'] == null) {
                            echo "nothing to show";
                        } else { ?>
                            <a class="btn btn-primary" href="download.php?link=<?php echo $row1['link'] ?>">Download work</a>

                        <?php }

                        ?>
                    </td>
                    <?php if ($row1['status'] == 'pending') {
                    ?>
                        <td> <a class="btn btn-primary" href="approveTask.php?id=<?php echo $row1[0] ?>">Approve Task</a> </td>
                        <!-- <td> <a class="btn btn-secondary" href="approveTask.php?id=<?php echo $row1[0] ?>">Approve Task</a></td> -->
                    <?php
                    } ?>

                    <td><?php if ($row1['status'] == 'approved') {
                        ?>
                            <a class="btn btn-primary" href="pay.php?id=<?php echo $row1['id'] ?>">Pay Developer</a>
                        <?php
                        } ?>
                    </td>
                </tr>
        <?php
            }
        }
        ?>


    <?php
    }
    $data1 = mysqli_query($connect, "SELECT * FROM project WHERE id='$item'");
    while ($result1 = mysqli_fetch_array($data1)) { ?>
        <a class="btn btn-primary" href="downloadProject.php?link=<?php echo $result1[5] ?>">Download whole PROJECT</a>
    <?php }
    ?>

    </table>
    </p>