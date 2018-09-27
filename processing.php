<?php
    session_start();
?>
<?php
    if(!empty($_POST)){
    	  		$loop = 0;
			$counter = count($_SESSION['cart']);
			while($counter > $loop){
				if(empty($_SESSION['cart'][$loop])){
					$loop++;
					$counter++;
					continue;
				}
				 echo $_POST['movie'];
				 echo $_SESSION['cart'][$loop]['session'];
				 echo $_SESSION['cart'][$loop]['movie'];
				 
				 echo $_POST['session'];
				if($_SESSION['cart'][$loop]['movie'] == $_POST['movie'] && $_SESSION['cart'][$loop]['session'] == $_POST['session']){
					unset($_SESSION['cart'][$loop]);
					echo $_SESSION['cart'][$loop]['movie']." ". $_POST['movie'];
					break;
				}
				$loop++;
				echo $loop;
			}
    	
		$_SESSION['cart'][] = $_POST;
		
		
	}
	header('Location: shoppingCart.php');
?>
