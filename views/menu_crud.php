<?php
	session_start();
	if(isset($_SESSION['user_id']) || $_SESSION['user_id'] != 0){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
    }
	else{
		echo "<h1>GO AWAY HACKER</p>";
        exit;
	}
?>