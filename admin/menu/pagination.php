 <?php  
        require 'db_connect.php';
        $sql = "SELECT COUNT(*) FROM '".$tablename."'";  
        $rs_result = mysqli_query($db, $sql);  
        $row = mysqli_fetch_row($rs_result);  
        $total_records = $row[0];  
        $total_pages = ceil($total_records / $limit);  
        $pagLink = "<nav><ul class='pagination'>";  
        for ($i=1; $i<=$total_pages; $i++) {  
                     $pagLink .= "<li><a href='index.php?page=".$i."'>".$i."</a></li>";  
        };  
        echo $pagLink . "</ul></nav>";  
        ?>