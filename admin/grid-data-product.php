<?php
/* Database connection start */
include("../conn.php");
/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
	
	0 => 'username', 
	1 => 'category', 
	2 => 'subcategory',
	3 => 'subsubcategory',
	4 => 'name',
	5 => 'description',
	6 => 'price',
	7 => 'size',
	8 => 'color', 
	9 => 'discount', 
	10 => 'commission', 
	11 => 'totalprice', 
	12 => 'quantity' 
	
	
);

// getting total number records without any search
$sql = "SELECT *";
$sql.=" FROM product";
$query=mysqli_query($conn, $sql) or die("grid-data.php: get employees");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


$sql = "SELECT *";
$sql.=" FROM product where 1=1";
if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.=" AND ( username LIKE '".$requestData['search']['value']."%' ";    
	$sql.=" OR category LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR subcategory LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR subsubcategory LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR name LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR description LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR price LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR size LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR color LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR discount LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR commission LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR totalprice LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR quantity LIKE '".$requestData['search']['value']."%' )";
}
$query=mysqli_query($conn, $sql) or die("grid-data.php: get employees");
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
$query=mysqli_query($conn, $sql) or die("grid-data.php: get employees");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array

 $nestedData = array();
 $nestedData[] =$row["username"];
 $nestedData[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="category">' . $row["category"] . '</div>';
 $nestedData[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="subcategory">' . $row["subcategory"] . '</div>';
 $nestedData[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="subsubcategory">' . $row["subsubcategory"] . '</div>';
 $nestedData[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="name">' . $row["name"] . '</div>';
 $nestedData[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="description">' . $row["description"] . '</div>';
 $nestedData[] =  $row["price"];
 $nestedData[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="size">' . $row["size"] . '</div>';
 $nestedData[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="color">' . $row["color"] . '</div>';
 $nestedData[] =  $row["discount"];
 $nestedData[] =  $row["commission"];
 $nestedData[] =  $row["totalprice"];
 $nestedData[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="quantity">' . $row["quantity"] . '</div>';
 $nestedData[] = '<button data-trigger="hover" title="Delete Office" type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["id"].'"><i class="ti-trash"></i></button>';
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
