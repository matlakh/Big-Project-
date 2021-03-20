<?php
	
	$name      = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
	$email     = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
	$phone 	   = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
	$errors;


	if (empty($name)) {
			$errors = "Введите имя";
	}
	if (empty($email)) {
			$errors = "Введите email";
	}
	if (empty($phone)) {
			$errors = "Введите номер телефона";
	}
	
	
	

	$to = "testovichPeace@gmail.com";
	$mailBody = "JS. ДЗ номер 4\n";
	$mailBody .= "Поле имя: " . $name . "\n";
	$mailBody .= "Поле почта: " . $email . "\n";
	$mailBody .= "Поле телефон: " . $phone . "\n";
	
	if (mail($to, 'Форма обратной связи', $mailBody)) {
			$output = "send";
			die($output);
			
	} else {
			$output = $errors;
			die($output);
	}
?>