<?php
    session_start();
    include 'includes/functions.php';
?>
<!DOCTYPE html> 
<html>
    <head>
        <?php include 'includes/header.php'; ?>
    </head>
    <body>
        <div class="contentWrap">
            <main>
                <nav id="navbar">
				    <?php include 'includes/nav.php'; ?> 
                </nav>
                <hr>
                    <?php
                    //checking if cart is 'empty'
                    if(empty($_SESSION['cart']))
                    {
                        youShouldntBeHere();
                    }
                    ?>
                    <div class="HeadingBlock">
				<?php
					if(!empty($_SESSION['cart'])){
                            echo"<h1> Confirmation! </h1>
                                <hr id=\"Empty\">
                                <hr class=\"Blink\">
                                <h2> Your Order </h2>
                                <hr id=\"Blue\">
                                <div class=\"middleBoy\">
                                <p> Receipt located at bottom of page :^] </p>
                                </div>
                                <hr id=\"Empty\">
                            ";
                            
                            //setting all the varibles to go through cart
                            $counter = 0;
                            $deepCounter = 0;
                            $staticCounter = 0;
  							$arraySize = count($_SESSION['cart']);
  							$file = 'orders.txt';
  							$nl = "\n";
  							$break = '---------------------------';
						    $total = 0;
						    $fp = fopen($file, "a");
							$addHead = 1;
						    
							while($counter < $arraySize)
							{
							    $name = $_POST['name'];
							    $email = $_POST['email'];
							    $phone = $_POST['phone'];
							    
							    
							    if($addHead == 1)
							    {
							    	addToReceiptHeader($name, $email, $phone);
							    	addToOrderHeader($name, $email, $phone);
							    	$addHead++;
							    }
							    
							    if(empty($_SESSION['cart'][$counter]))
							    {
									$counter++;
									continue;
								}
							    
                                $movie = $_SESSION['cart'][$counter]['movie'];
						        $seats = $_SESSION['cart'][$counter]['seats'];
							    $sesh = $_SESSION['cart'][$counter]['session'];
							    
							    if($movie == 'RC')
							        $movie = "The Proposal";
							    else if($movie == 'AC')
							        $movie = "Die Hard";
							    else if($movie == 'AF')
							        $movie = "Shin Godzilla";
							    else
							        $movie = "Lilo & Stitch";
                                
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
														$spot = 'Standard (Full)';
														$count = $value;
														addToRecieptBody($movie, $spot, $sesh, $count, $cost, $sub);
														addToOrderBody($movie, $spot, $sesh, $count, $cost, $sub);
													    while($count > 0)
													    {
													        createTicket($name, $email, $phone, $movie, $spot, $sesh, $cost);
													        $count--;
													    }
													    
														break;
													case 'SP':
														$cost = 15.5;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														$spot = 'Standard (Concession)';
														$count = $value;
														addToRecieptBody($movie, $spot, $sesh, $count, $cost, $sub);
														addToOrderBody($movie, $spot, $sesh, $count, $cost, $sub);
													    while($count > 0)
													    {
													        createTicket($name, $email, $phone, $movie, $spot, $sesh, $cost);
													        $count--;
													    }
													    
														break;
													case 'SC':
														$cost = 12.5;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														$spot = 'Standard (Child)';
														$count = $value;
														addToRecieptBody($movie, $spot, $sesh, $count, $cost, $sub);
														addToOrderBody($movie, $spot, $sesh, $count, $cost, $sub);
													    while($count > 0)
													    {
													        createTicket($name, $email, $phone, $movie, $spot, $sesh, $cost);
													        $count--;
													    }
													    
														break;
													case 'FA':
														$cost = 30;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														$spot = 'First Class (Adult)';
														$count = $value;
														addToRecieptBody($movie, $spot, $sesh, $count, $cost, $sub);
														addToOrderBody($movie, $spot, $sesh, $count, $cost, $sub);
													    while($count > 0)
													    {
													        createTicket($name, $email, $phone, $movie, $spot, $sesh, $cost);
													        $count--;
													    }
													    
														break;
													case 'FC':
														$cost = 25;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														$spot = 'First Class (Child)';
														$count = $value;
														addToRecieptBody($movie, $spot, $sesh, $count, $cost, $sub);
														addToOrderBody($movie, $spot, $sesh, $count, $cost, $sub);
													    while($count > 0)
													    {
													        createTicket($name, $email, $phone, $movie, $spot, $sesh, $cost);
													        $count--;
													    }
											
														break;
													case 'BA':
														$cost = 33;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														$spot = 'Beanbag (Adult)';
														$count = $value;
														addToRecieptBody($movie, $spot, $sesh, $count, $cost, $sub);
														addToOrderBody($movie, $spot, $sesh, $count, $cost, $sub);
													    while($count > 0)
													    {
													        createTicket($name, $email, $phone, $movie, $spot, $sesh, $cost);
													        $count--;
													    }
													   
														break;
													case 'BF':
														$cost = 30;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														$spot = 'Beanbag (Concession)';
														$count = $value;
													    addToRecieptBody($movie, $spot, $sesh, $count, $cost, $sub);
													    addToOrderBody($movie, $spot, $sesh, $count, $cost, $sub);
													    while($count > 0)
													    {
													        createTicket($name, $email, $phone, $movie, $spot, $sesh, $cost);
													        $count--;
													    }
													    
														break;;
													case 'BC':
														$cost = 30;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														$spot = 'Beanbag (Child)';
														$count = $value;
														addToRecieptBody($movie, $spot, $sesh, $count, $cost, $sub);
														addToOrderBody($movie, $spot, $sesh, $count, $cost, $sub);
													    while($count > 0)
													    {
													        createTicket($name, $email, $phone, $movie, $spot, $sesh, $cost);
													        $count--;
													    }
													    
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
													    $spot = 'Standard (Full)';
													    $count = $value;
													    addToRecieptBody($movie, $spot, $sesh, $count, $cost, $sub);
													    addToOrderBody($movie, $spot, $sesh, $count, $cost, $sub);
													    while($count > 0)
													    {
													        createTicket($name, $email, $phone, $movie, $spot, $sesh, $cost);
													        $count--;
													    }
														
														break;
													case 'SP':
														$cost = 10.5;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														$spot = 'Standard (Concession)';
														$count = $value;
														addToRecieptBody($movie, $spot, $sesh, $value, $cost, $sub);
														addToOrderBody($movie, $spot, $sesh, $count, $cost, $sub);
													    while($count > 0)
													    {
													        createTicket($name, $email, $phone, $movie, $spot, $sesh, $cost);
													        $count--;
													    }
														break;
													case 'SC':
														$cost = 8.5;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														$spot = 'Standard (Child)';
														$count = $value;
														addToRecieptBody($movie, $spot, $sesh, $count, $cost, $sub);
														addToOrderBody($movie, $spot, $sesh, $count, $cost, $sub);
													    while($count > 0)
													    {
													        createTicket($name, $email, $phone, $movie, $spot, $sesh, $cost);
													        $count--;
													    }
													    
														break;
													case 'FA':
														$cost = 25;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														$spot = 'First Class (Adult)';
														$count = $value;
														addToRecieptBody($movie, $spot, $sesh, $count, $cost, $sub);
														addToOrderBody($movie, $spot, $sesh, $count, $cost, $sub);
													    while($count > 0)
													    {
													        createTicket($name, $email, $phone, $movie, $spot, $sesh, $cost);
													        $count--;
													    }
													    
														break;
													case 'FC':
														$cost = 20;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														$spot = 'First Class (Child)';
														$count = $value;
														addToRecieptBody($movie, $spot, $sesh, $count, $cost, $sub);
														addToOrderBody($movie, $spot, $sesh, $count, $cost, $sub);
													    while($count > 0)
													    {
													        createTicket($name, $email, $phone, $movie, $spot, $sesh, $cost);
													        $count--;
													    }
													    
														break;
													case 'BA':
														$cost = 22;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														$spot = 'Beanbag (Adult)';
														$count = $value;
														addToRecieptBody($movie, $spot, $sesh, $count, $cost, $sub);
														addToOrderBody($movie, $spot, $sesh, $count, $cost, $sub);
													    while($count > 0)
													    {
													        createTicket($name, $email, $phone, $movie, $spot, $sesh, $cost);
													        $count--;
													    }
													  
														break;
													case 'BF':
														$cost = 20;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														$spot = 'Beanbag (Concession)';
														$count = $value;
														addToRecieptBody($movie, $spot, $sesh, $count, $cost, $sub);
														addToOrderBody($movie, $spot, $sesh, $count, $cost, $sub);
													    while($count > 0)
													    {
													        createTicket($name, $email, $phone, $movie, $spot, $sesh, $cost);
													        $count--;
													    }
													    
														break;;
													case 'BC':
														$cost = 20;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														$spot = 'Beanbag (Child)';
														$count = $value;
														addToRecieptBody($movie, $spot, $sesh, $count, $cost, $sub);
														addToOrderBody($movie, $spot, $sesh, $count, $cost, $sub);
													    while($count > 0)
													    {
													        createTicket($name, $email, $phone, $movie, $spot, $sesh, $cost);
													        $count--;
													    }
													
														break;
													default:
														
														break;
												}
											}
										}
									 }
								$counter++;
								$total = number_format($total,2);
								addToReceiptFooter($total);
								addToOrderFooter($total);
							}
                        }
                    echo "<hr id=\"Blue\">";
					echo "<hr id=\"Empty\">";
                    printReceipt();
                    clearFile();
                    session_destroy();    
                    echo "<hr id=\"Pink\">";
                    ?>
                </div>
            </main>
        </div>
        <footer>
            <?php include 'includes/footer.php'; ?> 
        </footer>
    </body>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
</html>