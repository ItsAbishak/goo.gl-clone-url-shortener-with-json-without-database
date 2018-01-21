<?php

	if (isset($_GET['url'])) {
		$urls = file_get_contents("urls.json");
		$urls = json_decode($urls, true);

		if (isset($urls[$_GET['url']])) {
			$urls = "{$urls[$_GET['url']]}";
			header("Location: {$urls}");

		} else {
			header('Location: index.php');
		}

	} else {
		die("ERROR: REQUIRED PARAMETERS NOT GIVEN");
	}






?>