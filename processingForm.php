<?php
    session_start();
?>
<?php
    if(!empty($_POST)){
		$_SESSION['person'][] = $_POST;
		
		//array_push($_SESSION['cart'],$_POST);
	}
	header('Location: confirmation.php');
?>