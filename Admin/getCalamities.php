<?php 
      include("database.php");
      $result = array();
      $fetch_calamities_sql = "SELECT * from calamity where active=1";
      $rs = mysql_query($fetch_calamities_sql);
      while($row = mysql_fetch_array($rs)) {
        $type = $row['type'];
        $place = $row['place'];
        $id = $row['id'];
        $lat = $row['lat'];
        $lon = $row['lon'];
        array_push($result, [$id, $type, $place, $lat, $lon]);
      }
      echo json_encode($result);
?>