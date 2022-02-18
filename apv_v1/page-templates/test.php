<?php
	//Create JSON Request
	//Create JSON Request
	$array = array(
		'msg' => 'teamStandings'
	);
	$json_array = json_encode($array);

	//Request Call
	$response = callAPI($json_array);
	$response_row = json_decode($response, true);
	
	//Check Request Call Status
	if ((int)$response_row['status'] == 1)
	{
		//Read Jobs
		$job = $response_row['data'];
        echo "Estamos en la temporada: ";
        echo $job['season'];
	} 	else
	{
		//Redirect Dashboard
	}
?>