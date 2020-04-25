<?php
/* Database connection start */
include("../conn.php");
/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
	
	0 => 'name', 
	1 => 'dob', 
	2 => 'smobile',
	3 => 'category',
	4 => 'email',
	5 => 'fname',
	6 => 'aadhar',
	7 => 'address',
	8 => 'pmobile', 
	9 => 'course', 
	10 => 'amount',
	11 => 'date'
	
	
);

// getting total number records without any search
$sql = "SELECT *";
$sql.=" FROM registration order by id desc";
$query=mysqli_query($conn, $sql) or die("grid-data.php: get employees");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


$sql = "SELECT *";
$sql.=" FROM registration where 1=1";
if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.=" AND ( name LIKE '".$requestData['search']['value']."%' ";    
	$sql.=" OR dob LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR smobile LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR category LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR email LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR fname LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR aadhar LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR address LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR pmobile LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR course LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR amount LIKE '".$requestData['search']['value']."%' ";
	
	$sql.=" OR date LIKE '".$requestData['search']['value']."%' )";
}
$query=mysqli_query($conn, $sql) or die("grid-data.php: get employees");
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
$query=mysqli_query($conn, $sql) or die("grid-data.php: get employees");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array

 $nestedData = array();
 $nestedData[] =$row["name"];
 
 $nestedData[] =  $row["dob"];

 $nestedData[] =  $row["smobile"];
 $nestedData[] =  $row["category"];
 $nestedData[] =  $row["email"];
 $nestedData[] =  $row["fname"];
 $nestedData[] =  $row["aadhar"];
 $nestedData[] =  $row["address"];
 $nestedData[] =  $row["pmobile"];
 $nestedData[] =  $row["course"];
 $nestedData[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="amount">' . $row["amount"] . '</div>';
 $nestedData[] =  $row["date"];
 $nestedData[] = '<button data-trigger="hover" title="Delete Student" type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["id"].'"><i class="ti-trash"></i></button><a href="student.php?id='.$row["id"].'"><button data-trigger="hover" title="View Student" type="button" class="btn btn-primary btn-xs"><i class="ti-eye"></i></button></a>';
 $data[] = $nestedData;
}



$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);

echo json_encode($json_data);  // send data as json format

?>
