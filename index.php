<?php
	require_once "start.php";
	/*include class*/
	require_once "url.php";

	$url = new URL();
	$view = $url->getView();

	$class = mb_strtolower($view."Content");
	if ($url->fileExists($class."_class.php")) {
		require_once $class."_class.php";
		new $class();
	}
	else {
		header("Location: ".$url->notFound());
		exit;
	}

?>
