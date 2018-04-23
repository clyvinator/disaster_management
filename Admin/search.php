<?php
include('connect.php');
$output = '';
$result = mysql_query("SELECT `p_id` , `name` , `mobile` , `d_id`, `case_id` , `status` FROM `patient` INNER JOIN `case` ON patient.p_id = case.pat_id AND `d_id`='FA_160002' AND `status`='Approved' WHERE `p_id` LIKE '%".$_POST['search']."%'  ");
if(mysql_num_rows($result)>0) {
	  
	  $output .='<h4 align="center">Search Result</h4>';
         $output .='   <div class="table-responsive mailbox-messages"> 
		        <table class="table table-hover table-striped">
				<thead>
				 <tr>
                    <th>Select</th>
                    <th>Patient ID</th>
                    <th>Patient Name</th>
                    <th>Case ID</th>
                    <th>Contact Details</th>
					<th>Case Status</th>
                    <th>View More</th>
                  </tr>
				</thead>';
				while($br = mysql_fetch_assoc($result)) {
	  $output .='
                  <tbody>       
		         <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star">'.$br['p_id'].'</td>
                    <td class="mailbox-name">'.$br['name'].'</td>
                    <td class="mailbox-subject">'.$br['case_id'].'</td>
					<td class="mailbox-subject">'.$br['mobile'].'</td>
					<td class="mailbox-name">'.$br['status'].'</td>
                    <td class="mailbox-date"><a name="view" type="button" href="ViewCreated.php?pid='.$br['p_id'].'" class="btn btn-default btn-sm"><i class="fa fa-plus-square"></i></a></td>
                  </tr></tbody></table></div>';
  }
  echo $output;
}
  else
  {
	  echo 'Data Not Found';
  }
?>