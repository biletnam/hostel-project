<?php
require 'db_connect.php';
for($i=1;$i<=105;$i++){
    mysqli_query($db,"insert into bh3 (sno, roomno) values('$i','$i')") or die(mysqli_error($db));
}