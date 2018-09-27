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
					Movies and Bookings
				</h1>
				
			</header>
			<hr id="Empty">
			<hr class="Blink">
		
			<section id="divtable">
				<table cellspacing="0" cellpadding="5" >
					<tr>
						<th>Seat Type</th>
						<th>Seat Option</th>
						<th>Mon-Tue(All Day)<br>Mon-Fri(1pm only)</th>
						<th>Wed-Fri(after 1pm)<br>Sat-Sun(All Day)</th>
					</tr>
					<tr class="odd">
						<td>Standard</td>
						<td>Full</td>
						<td>$12.50</td>
						<td>$18.50</td>
					</tr>
					<tr class="even">
						<td>Standard</td>
						<td>Concession</td>
						<td>$10.50</td>
						<td>$15.50</td>
					</tr>
					<tr class="odd">
						<td>Standard</td>
						<td>Child</td>
						<td>$8.50</td>
						<td>$12.50</td>
					</tr>
					<tr class="even">
						<td>First Class</td>
						<td>Adult</td>
						<td>$25</td>
						<td>$30</td>
					</tr>
					<tr class="odd">
						<td>First Class</td>
						<td>Child</td>
						<td>$20</td>
						<td>$25</td>
					</tr>
					<tr class="even">
						<td>Bean Bag</td>
						<td>Adult</td>
						<td>$22</td>
						<td>$33</td>
					</tr>
					<tr class="odd">
						<td>Bean Bag</td>
						<td>Family</td>
						<td>$20</td>
						<td>$30</td>
					</tr>
					<tr class="even">
						<td>Bean Bag</td>
						<td>Child</td>
						<td>$20</td>
						<td>$30</td>
					</tr>
				</table>
			</section>
			
			<hr id="Empty">
			<hr></hr>
			<hr id="Empty">
			<hr id="Blue">
			<hr id="Empty">
			
			<section  class="divpic" >
				<img id="rotator" class="picpic">
			</section>
			<!-- Original image sourced for educational purposes:
				lilo and stich image: https://fanart.tv/fanart/movies/11544/movieposter/lilo--stitch-5345711784f01.jpg
				die hard image:	http://thefilmbarphx.com/wp-content/uploads/2016/11/DIE-HARD.jpg
				shin godzilla image: http://i.imgur.com/ikzGxC5.jpg
				proposal image: https://upload.wikimedia.org/wikipedia/en/0/02/The_Proposal.jpg-->
			<script>
			
				(function() {
					var rotator = document.getElementById('rotator');  
					var delayInSeconds = 1;                            
					var images = ['img/image1.jpg','img/image2.jpg', 'img/image3.jpg', 'img/image5.jpg'];
					
					var num = 0;
					var len = images.length;
					var changeImage = function() {
					    rotator.src = images[num++];
					    if (num == len) {
					        num = 0;
					    }
					};
					setInterval(changeImage, 2000);
				})();
			</script>
			<!--Code sourced from 
			https://stackoverflow.com/questions/10594925/loop-a-series-of-image-in-javascript-->
			<hr id="Empty">
			<hr></hr>
			
			<h2>Booking Form</h2>
			<section id="divform">
				 <!-- <form action="https://titan.csit.rmit.edu.au/~e54061/wp/silverado-test.php" method='post'>-->
				 <form action="processing.php" method='post'>
				    <fieldset>
				      <p><label>Movie</label>
				      <select	id="movie" name="movie" onChange="check()">
				      	<option disabled="disabled" selected="selected">Select a Movie</option>
				      	<option value="RC">The Proposal</option>
				      	<option value="CH">Lilo & Stitch</option>
				      	<option value="AF">Shin Godzilla</option>
				      	<option value="AC">Die Hard</option>
				      </select></p>
				 
				      <p><label>Session</label>
				      
					      <select id=RC name="session" onchange="check2()">
					      		<option disabled="disabled" selected="selected">Select an option.</option>
					      		
					      	<optgroup label="Monday">
					      		<option value="MON-09">9pm</option>
					      	</optgroup>
					      	<optgroup label="Tuesday">
					      		<option value="TUE-09">9pm</option>
					      	</optgroup>
					      	<optgroup label="Wednesday">
					      		<option value="WED-01">1pm</option>
					      	</optgroup>
					      	<optgroup label="Thursday">
					      		<option value="THU-01">1pm</option>
					      	</optgroup>
					      	<optgroup label="Friday">
					      		<option value="FRI-01">1pm</option>
					      	</optgroup>
					      	<optgroup label="Saturday">
					      		<option value="SAT-06">6pm</option>
					      	</optgroup>
					      	<optgroup label="Sunday">
					      		<option value="SUN-06">6pm</option>
					      	</optgroup>
					      	
					      </select></p>
					      
					      <select id=CH name="session" onChange="check2()">
					      		<option disabled="disabled" selected="selected">Select an option.</option>
					      		
					      	<optgroup label="Monday">
					      		<option value="MON-01">1pm</option>
					      	</optgroup>
					      	<optgroup label="Tuesday">
					      		<option value="TUE-01">1pm</option>
					      	</optgroup>
					      	<optgroup label="Wednesday">
					      		<option value="WED-06">6pm</option>
					      	</optgroup>
					      	<optgroup label="Thursday">
					      		<option value="THU-06">6pm</option>
					      	</optgroup>
					      	<optgroup label="Friday">
					      		<option value="FRI-06">6pm</option>
					      	</optgroup>
					      	<optgroup label="Saturday">
					      		<option value="SAT-12">12pm</option>
					      	</optgroup>
					      	<optgroup label="Sunday">
					      		<option value="SUN-12">12pm</option>
					      	</optgroup>
					      	
					      </select></p>
					     
					      <select id=AF name="session" onChange="check2()">
					      		<option disabled="disabled" selected="selected">Select an option.</option>
					      		
					      	<optgroup label="Monday">
					      		<option value="MON-06">6pm</option>
					      	</optgroup>
					      	<optgroup label="Tuesday">
					      		<option value="TUE-06">6pm</option>
					      	</optgroup>
					
					      	<optgroup label="Saturday">
					      		<option value="SAT-03">3pm</option>
					      	</optgroup>
					      	<optgroup label="Sunday">
					      		<option value="SUN-03">3pm</option>
					      	</optgroup>
					      	
					      </select></p>
	
					      <select id=AC name="session" onChange="check2()">
					      		<option disabled="disabled" selected="selected">Select an option.</option>
					      		
				
					      	<optgroup label="Wednesday">
					      		<option value="WED-09">9pm</option>
					      	</optgroup>
					      	<optgroup label="Thursday">
					      		<option value="THU-09">9pm</option>
					      	</optgroup>
					      	<optgroup label="Friday">
					      		<option value="FRI-09">9pm</option>
					      	</optgroup>
					      	<optgroup label="Saturday">
					      		<option value="SAT-09">9pm</option>
					      	</optgroup>
					      	<optgroup label="Sunday">
					      		<option value="SUN-09">9pm</option>
					      	</optgroup>
					      	
					      </select></p>
					  <div  id="dds">
				      <fieldset ><h3>Seats</h3>
				        <fieldset><legend>Standard</legend>
				          <p><label>Adult</label><select onChange="myFunc(); subS();" name="seats[SF]" id="seats[SF]" >
				         	<?php
				         		for($i=0;$i<=10;$i++){
				         			echo"<option value = $i>$i</option>";
				         		}
			         		?>
				          </select></p>
				          
				          <p><label>Concession</label><select onChange="myFunc(); subS();" name="seats[SP]" id="seats[SP]" >
				          	
				         	<?php
				         		for($i=0;$i<=10;$i++){
				         			echo"<option value = $i>$i</option>";
		         				}
			         		?>
				          </select></p>
				          
				          <p><label>Child</label><select onChange="myFunc(); subS();" name="seats[SC]"  id="seats[SC]">
				          	
				          	<?php
				         		for($i=0;$i<=10;$i++){
				         			echo"<option value = $i>$i</option>";
			         			}
			         		?>
				          </select></p>
				          <div id = "subtotalS">Standard Subtotal: </div>
				        </fieldset>
				        <fieldset><legend>First Class</legend>
				          <p><label>Adult</label><select onChange="myFunc(); subF();" name="seats[FA]"  id="seats[FA]">
				          	
			          		<?php
			         			for($i=0;$i<=10;$i++){
			         				echo"<option value = $i>$i</option>";
			         			}
			         		?>
				          </select></p>
				          
				          <p><label>Child</label><select onChange="myFunc(); subF();" name="seats[FC]" id="seats[FC]">
				          	
				          	<?php
			         			for($i=0;$i<=10;$i++){
			         				echo"<option value = $i>$i</option>";
			         			}
			         		?>
				          </select></p>
				           <div id = "subtotalF">First Class Subtotal: </div>
				        </fieldset>
				        <fieldset><legend>Bean Bags</legend>
				          <p><label>Adult</label><select onChange="myFunc(); subB();" name="seats[BA]" id="seats[BA]">
				          	
			          		<?php
				         		for($i=0;$i<=10;$i++){
				         			echo"<option value = $i>$i</option>";
				         		}
			         		?>
				          </select></p>
					       
				          <p><label>Family</label><select onChange="myFunc(); subB();" name="seats[BF]" id="seats[BF]">
				          	
			          		<?php
				         		for($i=0;$i<=10;$i++){
				         			echo"<option value = $i>$i</option>";
				         		}
			         		?>
				          </select></p>
				          
				          <p><label>Child</label><select onChange="myFunc(); subB();" name="seats[BC]" id="seats[BC]">
				          	
							<?php
				         		for($i=0;$i<=10;$i++){
				         			echo"<option value = $i>$i</option>";
				         		}
							?>
				          </select></p>
				          	 <div id = "subtotalB">BeanBag Subtotal: </div>
				        </fieldset>
				      </fieldset>
				      <div id = "total">Total: </div>
				      
				      <p><button>Book</button></p>
				      
				      </div>
				    </fieldset>
				     
				  </form>
				  
			</section>
			
			
			
			<hr>
			<hr id="Empty">
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

