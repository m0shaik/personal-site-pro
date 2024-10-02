<?php

	function getPage() {
		$page = 'home';
		if(isset($_GET['page']) ){
			$page = $_GET['page'];
		}

		return $page;
	}

	function convertJson($path){
		$getJson = file_get_contents("data/pages/$path.json");

		$convertJson = json_decode($getJson, true);

		return $convertJson;
	}

?>