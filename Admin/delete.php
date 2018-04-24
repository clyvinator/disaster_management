<?php 
      include("database.php");
      $fetch_calamities_sql = "SELECT * from calamity where active=1";
      $rs = mysql_query($fetch_calamities_sql);
      while($row = mysql_fetch_array($rs)) {
        $type = $row['type'];
        $place = $row['place'];
        $id = $row['id'];
        echo "<script type = 'text/javascript'>alert('$type,$id');</script>";
      }
	// echo "<script type = 'text/javascript'>alert('HI');</script>";
?>