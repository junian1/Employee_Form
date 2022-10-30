<?php
    include_once 'db.php';
    include_once 'header.php';

    $sql="SELECT * FROM EMPLOYEE;";
    $result=mysqli_query($conn, $sql);
    $resultcheck=mysqli_num_rows($result);

    // if ($resultcheck>0) {
    //     while ($row=mysqli_fetch_assoc($result)){
    //         print_r($row['EMP_ID']);
    //     }
    // }

?>

<div class="wrapper">
    <table style="width:100%" border="1px" solid black>
        <tr>
            <th>Userid</th>
            <th>Full Name</th>
            <th>Country</th>
        </tr>
        <?php
            if ($resultcheck>0) {
                while ($row=mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $row['EMP_ID']; ?></td>
            <td><?php echo $row['EMP_FNAME'].' '.$row['EMP_LNAME']; ?></td>
            <td><?php echo $row['EMP_COUNTRY']; ?></td>
        </tr>
        <?php
                }
            }
        ?>
    </table>
</div>