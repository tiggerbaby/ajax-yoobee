<?php 

// Allow requests from certain websites
header('Access-Control-Allow-Origin: http://tiggerbaby.github.io');

//Connect to the databse
$dbc = new mysqli('localhost','alicewu_ajax','yoobee01','alicewu_ajax_yoobee');

//Filter the note
$note = $dbc->real_escape_string( $_GET['note'] );

//Prepare insert query
$sql = "INSERT INTO notes VALUES ( NULl , '$note', CURRENT_TIMESTAMP )";

// Run the SQL
$dbc->query( $sql );

//Grab all the notes
// $sql = "SELECT note, created FROM notes";

// Run the query
// $result = $dbc->query( $sql ); same as below

$result = $dbc->query("SELECT note, created FROM note");

// Extract all the data from the response
$result = $result->fetch_all( MYSQLI_ASSOC );

// Convert the assoc array into JSON and send back to AJAX
header('Content-Type: application/json');

echo json_encode( $result );

