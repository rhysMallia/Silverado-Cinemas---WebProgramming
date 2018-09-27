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
														echo "<tr class=\"even\"><th class=\"thwidth\">Standard(full)</th><th>\$".$cost."</th><th>".$value."</th><th>".$sub."</th></tr>";
														break;
													case 'SP':
														$cost = 15.5;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">Standard(Concession)</th><th>\$".$cost."</th><th>".$value."</th><th>".$sub."</th></tr>";										
														break;
													case 'SC':
														$cost = 12.5;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">Standard(Child)</th><th>\$".$cost."</th><th>".$value."</th><th>".$sub."</th></tr>";
														break;
													case 'FA':
														$cost = 30;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">First Class(Adult)</th><th>\$".$cost."</th><th>".$value."</th><th>".$sub."</th></tr>";
														break;
													case 'FC':
														$cost = 25;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">First Class(Child)</th><th>\$".$cost."</th><th>".$value."</th><th>".$sub."</th></tr>";
														break;
													case 'BA':
														$cost = 33;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">Beanbag(Adult)</th><th>\$".$cost."</th><th>".$value."</th><th>".$sub."</th></tr>";
														break;
													case 'BF':
														$cost = 30;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">Beanbag(Family)</th><th>\$".$cost."</th><th>".$value."</th><th>".$sub."</th></tr>";
														break;;
													case 'BC':
														$cost = 30;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">Beanbag(Child)</th><th>\$".$cost."</th><th>".$value."</th><th>".$sub."</th></tr>";
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
														echo "<tr class=\"even\"><th class=\"thwidth\">Standard(full)</th><th>\$".$cost."</th><th>".$value."</th><th>".$sub."</th></tr>";
														break;
													case 'SP':
														$cost = 10.5;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">Standard(Concession)</th><th>\$".$cost."</th><th>".$value."</th><th>".$sub."</th></tr>";										
														break;
													case 'SC':
														$cost = 8.5;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">Standard(Child)</th><th>\$".$cost."</th><th>".$value."</th><th>".$sub."</th></tr>";
														break;
													case 'FA':
														$cost = 25;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">First Class(Adult)</th><th>\$".$cost."</th><th>".$value."</th><th>".$sub."</th></tr>";
														break;
													case 'FC':
														$cost = 20;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">First Class(Child)</th><th>\$".$cost."</th><th>".$value."</th><th>".$sub."</th></tr>";
														break;
													case 'BA':
														$cost = 22;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">Beanbag(Adult)</th><th>\$".$cost."</th><th>".$value."</th><th>".$sub."</th></tr>";
														break;
													case 'BF':
														$cost = 20;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">Beanbag(Family)</th><th>\$".$cost."</th><th>".$value."</th><th>".$sub."</th></tr>";
														break;;
													case 'BC':
														$cost = 20;
														$cost = number_format($cost,2);
														$sub = $cost * $value;
														$total = $total + $sub;
														$sub = number_format($sub,2);
														echo "<tr class=\"even\"><th class=\"thwidth\">Beanbag(Child)</th><th>\$".$cost."</th><th>".$value."</th><th>".$sub."</th></tr>";
														break;
													default:
														
														break;
												}//switch end
											}//else end
										}//if end
									 }//foreach end