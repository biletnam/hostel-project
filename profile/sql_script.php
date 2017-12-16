
<?php
require 'db_connect.php';
$qu="select * from `".$tablename."`";
$res=mysqli_query($db, $qu);
if (!$res) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}?>
<table class="table-bordered table-hover">
    <thead>
    <tr>
        <th>Sno.</th><th>sid1</th><th>sid2</th><th>sid3</th><th>roomno</th></tr></thead>
    <tbody>
    <?php 
        while($row=mysqli_fetch_array($res))
{   ?>
        <tr><td><?php echo $row[0];?></td>
        <td><?php echo $row[1];?></td>
    <td><?php echo $row[2];?></td>
    <td><?php echo $row[3];?></td>
    <td><?php echo $row[4];?></td></tr>
        <?php };?>
    </tbody>
</table>