<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'includes/header.php'; ?>
</head>
	
	<body >
		
		<div class="contentWrap">
		<main>
			<nav id="navbar">
				<?php include 'includes/nav.php'; ?>
			</nav>
				<hr>
			<header class="HeadingBlock">
					<h1 >
						Shopping Cart
					</h1>
			</header>
			<hr id="Blink">
			<section id="divtable">
			
					<?php
					//unset($_SESSION['cart']);
					if (isset($_GET['query'])){
					
						if ($_GET['query']+1)
						{
							$del = $_GET['query'];
							
						unset($_SESSION['cart'][$del]);
						}
					}
						
						$total = 0;
						if(empty($_SESSION['cart'])){
							echo "<hr id=\"Empty\">";
							echo "<p id=\"total\">You currently do not have anything in your cart.</p>";
							echo "<hr id=\"Empty\">";
							echo "<hr id=\"Blue\">";
							echo "<table cellspacing=\"0\" cellpadding=\"10\" ><tr><th>Ticket Type</th><th>Cost</th><th>Qty</th><th>Subtotal</th></tr>";
							echo "<tr align=\"right\"><th></th><th></th><th>Total:</th><th align =\"left\">".$total."</th>";
							echo"</table>";
						}
						else{
							$grandtotal = 0;
							$loop = 0;
							$counter = count($_SESSION['cart']);
							while($counter > $loop){
								$total =0;
								if(empty($_SESSION['cart'][$loop])){
									$loop++;
									$counter++;
									continue;
								}
								$movie = $_SESSION['cart'][$loop]['movie'];
								$seats = $_SESSION['cart'][$loop]['seats'];
								$sesh = $_SESSION['cart'][$loop]['session'];
								if($movie == 'RC'){
									echo "<h4 id=\"movtitle\">The Proposal</h4><br>";
								}
								elseif($movie =='AC'){
									echo "<h4 id=\"movtitle\">Die Hard</h4><br>";
								}
								elseif($movie =='AF'){
									echo "<h4 id=\"movtitle\">Shin Godzilla</h4><br>";
								}
								else{
									echo "<h4 id=\"movtitle\">Lilo & Stitch</h4><br>";
								}
								
								echo "<a id=\"remove\" href=\"shoppingCart.php?query=$loop\">Delete</a><br/>";
								echo "<table cellspacing=\"0\" cellpadding=\"10\" id=\"carttable\"><tr><th>Ticket Type</th><th>Cost</th><th>Qty</th><th>Subtotal</th></tr>";
							
									foreach($seats as $key => $value){
										if($value > 0){
											if($sesh == 'SAT-06' || $sesh == 'SUN-06' || $sesh == 'WED-06' || $sesh == 'THU-06'|| 
												$sesh == 'FRI-06'|| $sesh == 'SAT-12'|| $sesh == 'SUN-12'|| $sesh == 'SAT-03'|| 
												$sesh == 'SUN-03'|| $sesh == 'WED-09'|| $sesh == 'THU-09'|| $sesh == 'FRI-09'|| 
												$sesh == 'SAT-09'|| $sesh == 'SUN-09' ){
												switch ($key) {
													case 'SF':
														$cost = 18.5;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">Standard(full)</th><th>$".$cost."</th><th>".$value."</th><th>$".$sub."</th></tr>";
														break;
													case 'SP':
														$cost = 15.5;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">Standard(Concession)</th><th>$".$cost."</th><th>".$value."</th><th>$".$sub."</th></tr>";										
														break;
													case 'SC':
														$cost = 12.5;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">Standard(Child)</th><th>$".$cost."</th><th>".$value."</th><th>$".$sub."</th></tr>";
														break;
													case 'FA':
														$cost = 30;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">First Class(Adult)</th><th>$".$cost."</th><th>".$value."</th><th>$".$sub."</th></tr>";
														break;
													case 'FC':
														$cost = 25;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">First Class(Child)</th><th>$".$cost."</th><th>".$value."</th><th>$".$sub."</th></tr>";
														break;
													case 'BA':
														$cost = 33;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">Beanbag(Adult)</th><th>$".$cost."</th><th>".$value."</th><th>$".$sub."</th></tr>";
														break;
													case 'BF':
														$cost = 30;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">Beanbag(Family)</th><th>$".$cost."</th><th>".$value."</th><th>$".$sub."</th></tr>";
														break;;
													case 'BC':
														$cost = 30;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">Beanbag(Child)</th><th>$".$cost."</th><th>".$value."</th><th>$".$sub."</th></tr>";
														break;
													default:
														
														break;
												}
												
											}
											else{
												switch ($key) {
													case 'SF':
														
														$cost = 12.5;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">Standard(full)</th><th>$".$cost."</th><th>".$value."</th><th>$".$sub."</th></tr>";
														break;
													case 'SP':
														$cost = 10.5;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">Standard(Concession)</th><th>$".$cost."</th><th>".$value."</th><th>$".$sub."</th></tr>";										
														break;
													case 'SC':
														$cost = 8.5;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">Standard(Child)</th><th>$".$cost."</th><th>".$value."</th><th>$".$sub."</th></tr>";
														break;
													case 'FA':
														$cost = 25;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">First Class(Adult)</th><th>$".$cost."</th><th>".$value."</th><th>$".$sub."</th></tr>";
														break;
													case 'FC':
														$cost = 20;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">First Class(Child)</th><th>$".$cost."</th><th>".$value."</th><th>$".$sub."</th></tr>";
														break;
													case 'BA':
														$cost = 22;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">Beanbag(Adult)</th><th>$".$cost."</th><th>".$value."</th><th>$".$sub."</th></tr>";
														break;
													case 'BF':
														$cost = 20;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">Beanbag(Family)</th><th>$".$cost."</th><th>".$value."</th><th>$".$sub."</th></tr>";
														break;;
													case 'BC':
														$cost = 20;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">Beanbag(Child)</th><th>$".$cost."</th><th>".$value."</th><th>$".$sub."</th></tr>";
														break;
													default:
														
														break;
												}//switch end
											}//else end
										}//if end
									 }//foreach end
								$loop++;
								unset($seats);
								unset($sesh);
								$total = number_format($total,2);
								$grandtotal = $grandtotal + $total;
								echo "<tr align=\"right\"><th></th><th></th><th>Total:</th><th align =\"left\">$".$total."</th>";
								echo"</table>";
							}//while end
								echo "<table><tr align=\"right\"><th></th><th></th><th>Grand Total:</th><th align =\"left\">$".$grandtotal."</th></table>";
								echo "<form id=\"movtitle\" action=\"checkout.php\"><input type=\"submit\" value=\"Check out!\" /></form>";
						}//else end
						
							
					?>
					<hr id="Empty">
					<hr id="Empty">
					<hr>
					<br>
					<hr id="Blue">
					 <form  action="showing.php"><input type="submit" value="Return to Showing" /></form>
			</section>
			<hr id="Empty">
			<hr id="Empty">

		</main>
	<footer>
		<?php include 'includes/footer.php'; ?>
	</footer>	
	</div>
	</body>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
</html>
