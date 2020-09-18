<?php

if (empty($_COOKIE['randomNumber'])) {
    var_dump("Setting the cookie");
    setcookie('randomNumber', rand(1, 10), time()+3600);
}

if ($_POST['guess']) {
    
    $randomNumber = (int)$_COOKIE['randomNumber'];
    
    $number = $_POST['number'];
    
    if ($randomNumber == $number) {
        echo "You guessed it!";
    } else {
        echo "Try again. The number was " . $randomNumber;
    }
    
}

?>
<html>
	<body>
		<form method="POST">
			<label for="number">Guess a number between 1 and 10.</label>
			<input type="number" name="number" />
			<input type="submit" name="guess" value="Guess" />
		</form>
	</body>
</html>
