<?php 

//Connect to the databse
$dbc = new mysqli('localhost','alicewu_ajax','yoobee01','alicewu_ajax_yoobee');

//Filter the note
$note = $dbc->real_escape_string( $_GET['note'] );

//Prepare insert query
$sql = "INSERT INTO notes VALUES ( NULl , '$note', CURRENT_TIMESTAMP )";

// Run the SQL
$dbc->query( $sql );
