<?php

//enroll_exam.php

include('master/Examination.php');

$exam = new Examination;

$exam->user_session_private();

$exam->Change_exam_status($_SESSION['user_id']);

// $exam->query = "SELECT * FROM user_exam_enroll_table INNER JOIN online_exam_table ON online_exam_table.online_exam_id =user_exam_enroll_table.exam_id WHERE user_exam_enroll_table.user_id = '".$_SESSION['user_id']."'";
// 		//$this->execute_query();
// 		$result = $exam->query_result();
// 		date_default_timezone_set('Asia/Kolkata');
// 		$current_datetime = date("Y-m-d") . ' ' . date("H:i:s", STRTOTIME(date('h:i:sa')));
// 		echo $current_datetime;

// 		foreach($result as $row)
// 		{
// 			$exam_start_time = $row["online_exam_datetime"];

// 			$duration = $row["online_exam_duration"] . ' minute';

// 			$exam_end_time = strtotime($exam_start_time . '+' . $duration);

// 			$exam_end_time = date('Y-m-d H:i:s', $exam_end_time);

// 			$examid = $row["online_exam_id"];

// 			//$view_exam = '';

// 			if($current_datetime >= $exam_start_time && $current_datetime <= $exam_end_time)
// 			{
// 				//exam started
// 				$exam->data = array(
// 					':online_exam_status'	=>	'Started',
// 					// ':exam_id'              =>	$examid
// 					':online_exam_id'	=>  $examid
// 				);

// 				$exam->query = "
// 				UPDATE online_exam_table 
// 				SET online_exam_status = :online_exam_status 
// 				WHERE online_exam_id = :online_exam_id
// 				";

// 				$exam->execute_query();
// 				// if($st)
// 				// {
// 				// 	echo "worked";
// 				// }
// 				// else
// 				// 	echo "didnt worked";
// 			}
// 			else
// 			{
// 				if($current_datetime > $exam_end_time)
// 				{
// 					//exam completed
// 					$exam->data = array(
// 						':online_exam_status'	=>	'Completed',
// 						':online_exam_id'	=>  $examid
// 					);

// 					$exam->query = "
// 					UPDATE online_exam_table 
// 					SET online_exam_status = :online_exam_status 
// 					WHERE online_exam_id = :online_exam_id
// 					";

// 					$exam->execute_query();
// 					// if($this->query -> rowCount() > 0)
// 					// {
// 					// //$count = $query -> rowCount();
// 					// echo " rows were affected.";
// 					// }
// 					// else
// 					// {
// 					// echo "No affected rows.";
// 					// }
// 				}					
// 			}
// 		}
// 	//}


include('header.php');

?>

<br />
<div class="card">
	<div class="card-header">Online Exam List</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover" id="exam_data_table">
				<thead>
					<tr>
						<th>Exam Title</th>
						<th>Date & Time</th>
						<th>Duration</th>
						<th>Total Question</th>
						<th>Right Answer Mark</th>
						<th>Wrong Answer Mark</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
</div>
</div>
</body>
</html>

<script>

$(document).ready(function(){

	var dataTable = $('#exam_data_table').DataTable({
		"processing" : true,
		"serverSide" : true,
		"order" : [],
		"ajax" : {
			url:"user_ajax_action.php",
			type:"POST",
			data:{action:'fetch', page:'enroll_exam'}
		},
		"columnDefs":[
			{
				"targets":[7],
				"orderable":false,
			},
		],
	});

});

</script>