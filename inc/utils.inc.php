<?php

session_start();
if (isset($_SESSION['flb'])) {
	//If session is not expired, update expiration or end session
	if (time()<$_SESSION['flb']['expire']) {
		$_SESSION['flp']['expire'] = time()+SESSION_EXPIRY;
	}
	else {
		//Session has expired
		header('location: logout.php');
	}
}

function processForDBEntry($db, $data) {
	if (is_array($data)) {
		foreach ($data as $k=>&$v) {
			$v = mysqli_real_escape_string($db, $v);
		}
	}
	else {
		$data = mysqli_real_escape_string($db, $data);
	}	
	return $data;
}

function nl2p($string) {
    $paragraphs = '';
    foreach (explode("\n", $string) as $line) {
        if (trim($line)) {
            $paragraphs .= '<p>' . $line . '</p>';
        }
    }
    return $paragraphs;
}

?>