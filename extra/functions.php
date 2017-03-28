<?php

	function dd($data) {
		echo '<pre>';
		die(var_dump($data));
		echo '</pre>';		
	}
	/*function nightClub($age) {
		if($age>21):
			echo '<span>You are allowed to enter the website</span>';
		else:
			echo "<span>You are not allowed to enter the website</span>";
		endif;
	}*/