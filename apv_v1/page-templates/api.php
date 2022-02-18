<?php /* Template Name: API */     
	
	date_default_timezone_set('America/Mexico_City');      
	
	//Read Param Field    
	$json = (isset($_POST['param'])) ? $_POST['param'] : NULL; $output = FALSE;    
	$json = str_replace('\\', '', $json);     
	
	//Check JSON    
	if ($json != NULL){

        //Decode Data JSON        
		$json_decode = json_decode($json, true);         
		
		//Read Action JSON        
		$msg = (isset($json_decode['msg'])) ? (string)trim($json_decode['msg']) : '';         
		
		//Read Fields JSON        
		$fields = (isset($json_decode['fields'])) ? $json_decode['fields'] : array(); 

        //getURL        
		if ($msg == 'getURL')
		{
			//Build Response Array
			$array = array(
				'status' => (int)1,
				'msg' => 'success',
				'data' => get_bloginfo("url")
			);

			//Print JSON Array
			printJSON($array);
			$output = TRUE;
		}

        //TeamStandings        
		if ($msg == 'teamStandings')
		{

			$teams = array(
				'1' => array(
					'escuderia' => "MERCEDES AMG F1",
					'puntaje'  => "460.5"
				),
				'2' => array(
					'escuderia' => "RED BULL",
					'puntaje'  => "437.5"
				),
				'3' => array(
					'escuderia' => "MCLAREN",
					'puntaje'  => "254"
				),
				'4' => array(
					'escuderia' => "FERRARI",
					'puntaje'  => "250.5"
				),
				'5' => array(
					'escuderia' => "ALPINE F1 TEAM",
					'puntaje'  => "104"
				),
				'6' => array(
					'escuderia' => "ALPHATAURI",
					'puntaje'  => "94"
				),
				'7' => array(
					'escuderia' => "MASTON MARTIN",
					'puntaje'  => "94"
				),
				'8' => array(
					'escuderia' => "WILLIAMS",
					'puntaje'  => "23"
				),
				'9' => array(
					'escuderia' => "ALFA ROMEO RACING",
					'puntaje'  => "7"
				),
				'10' => array(
					'escuderia' => "HAAS F1 TEAM",
					'puntaje'  => "0"
				),
			);

			foreach ($teams as $key => $row) {
				$aux[$key] = $row['puntaje'];
			}

			array_multisort($aux, SORT_DESC, $teams);

			$data_json = json_encode($teams);
						
			update_field( "escuderia", $data_json, "53" );

				//Build Response Array
				$array = array(
					'status' => (int)0,
					'msg' => 'success',
					'data' => $teams
				);

			//Print JSON Array
			printJSON($array);
			$output = TRUE;
		}

		        //TeamStandings        
				if ($msg == 'DriverStandings')
				{
		
					$teams = array(
						'1' => array(
							'piloto' => "Max Verstappen",
							'puntaje'  => "287.5",
							'escuderia'  => "RED BULL"
						),
						'2' => array(
							'piloto' => "Lewis Hamilton",
							'puntaje'  => "275.5",
							'escuderia'  => "MERCEDES AMG F1"
						),
						'3' => array(
							'piloto' => "Valtteri Bottas",
							'puntaje'  => "185",
							'escuderia'  => "MERCEDES AMG F1"
						),
						'4' => array(
							'piloto' => "Lando Norris",
							'puntaje'  => "149",
							'escuderia'  => "MCLAREN"
						),
						'5' => array(
							'piloto' => "Sergio Perez",
							'puntaje'  => "150",
							'escuderia'  => "RED BULL"
						),
						'6' => array(
							'piloto' => "Carlos Sainz",
							'puntaje'  => "122.5",
							'escuderia'  => "FERRARI"
						),
						'7' => array(
							'piloto' => "Charles Leclerc",
							'puntaje'  => "128",
							'escuderia'  => "FERRARI"
						),
						'8' => array(
							'piloto' => "Daniel Ricciardo",
							'puntaje'  => "105",
							'escuderia'  => "MCLAREN"
						),
						'9' => array(
							'piloto' => "Pierre Gasly",
							'puntaje'  => "74",
							'escuderia'  => "ALPHATAURI"
						),
						'10' => array(
							'piloto' => "Fernando Alonso",
							'puntaje'  => "58",
							'escuderia'  => "ALPINE F1 TEAM"
						),
						'11' => array(
							'piloto' => "Esteban Ocon",
							'puntaje'  => "46",
							'escuderia'  => "ALPINE F1 TEAM"
						),
						'12' => array(
							'piloto' => "Sebastian Vettel",
							'puntaje'  => "36",
							'escuderia'  => "ASTON MARTIN"
						),
						'13' => array(
							'piloto' => "Lance Stroll",
							'puntaje'  => "26",
							'escuderia'  => "ASTON MARTIN"
						),
						'14' => array(
							'piloto' => "Yuki Tsunoda",
							'puntaje'  => "20",
							'escuderia'  => "ALPHATAURI"
						),
						'15' => array(
							'piloto' => "George Russell",
							'puntaje'  => "16",
							'escuderia'  => "WILLIAMS"
						),
						'16' => array(
							'piloto' => "Nicholas Latifi",
							'puntaje'  => "7",
							'escuderia'  => "WILLIAMS"
						),
						'17' => array(
							'piloto' => "Kimi Raikkonen",
							'puntaje'  => "6",
							'escuderia'  => "ALFA ROMEO RACING"
						),
						'18' => array(
							'piloto' => "Antonio Giovinazzi",
							'puntaje'  => "1",
							'escuderia'  => "ALFA ROMEO RACING"
						),
						'19' => array(
							'piloto' => "Mick Schumacher",
							'puntaje'  => "0",
							'escuderia'  => "HAAS F1 TEAM"
						),
						'20' => array(
							'piloto' => "Robert Kubica",
							'puntaje'  => "0",
							'escuderia'  => "ALFA ROMEO RACING"
						),
						'21' => array(
							'piloto' => "Nikita Mazepin",
							'puntaje'  => "0",
							'escuderia'  => "HAAS F1 TEAM"
						),
					);
		
					foreach ($teams as $key => $row) {
						$aux[$key] = $row['puntaje'];
					}
		
					array_multisort($aux, SORT_DESC, $teams);
		
					$data_json = json_encode($teams);
								
					update_field( "piloto", $data_json, "48" );
		
						//Build Response Array
						$array = array(
							'status' => (int)0,
							'msg' => 'success',
							'data' => $teams
						);
		
					//Print JSON Array
					printJSON($array);
					$output = TRUE;
				}
	}
	else
	{
		//Show Error
		$array = array(
			'status' => (int)0,
			'msg' => (string)'API Call Invalid.'
		);

		//Print JSON Array
		printJSON($array);
		$output = TRUE;
	}

	//Check Output
	if (!$output)
	{
		//Show Error
		$array = array(
			'status' => (int)0,
			'msg' => (string)'API Error.'
		);

		//Print JSON Array
		printJSON($array);
		$output = TRUE;
	}
?>