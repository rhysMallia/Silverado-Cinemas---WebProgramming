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
                <div class="HeadingBlock">
                    <h1> Checkout! </h1>
                    <hr id="Empty">
                    <hr class="Blink">
                    <h2> Please fill in your details! </h2>
                    <hr id="Blue">
                    <hr id="Empty">
                </div>
                <?php
                if(empty($_SESSION['cart']))
                {
                    youShouldntBeHere();
                }
                ?>
                
                <?php
                if(!empty($_SESSION['cart']))
                {
                    echo "
                    <section class=\"middleBoy\">
                    <div>
                        <form method=\"POST\" name=\"person\" onsubmit=\"return fullCheck()\" action=\"confirmation.php\">
                            
                            <div class=\"middleBoy\">
                            <p> Enter your Name! </p>
                            </div>
                            
                            <br> 
                            
                            <div class=\"middleBoy\">
                            <input type=\"text\" id=\"name\" name=\"name\" placeholder=\"Name\" oninput=\"checkName();\">
                            </div>
                            
                            <br>
                            
                            <div class=\"middleBoy\">
                                <p id=\"nameCheck\" name = \"nameCheck\"> </p>
                            </div>
                            
                            <br>
                            
                            <div class=\"middleBoy\">
                                <p> Enter your Email! </p>
                            </div>
                            
                            <br>
                            
                            <div class=\"middleBoy\">
                                <input type=\"text\" id=\"email\" name=\"email\"placeholder = \"Aesthetic@vapor.wave\" oninput=\"checkEmail();\">
                            </div>
                            
                            <br>
                            
                            <div class=\"middleBoy\">
                                  <p id=\"emailCheck\" name =\"emailCheck\"> </p> 
                            </div>
                            
                            <br>
                            
                            <div class=\"middleBoy\">
                                <p> Enter your phone number! </p>
                            </div>
                            
                            <br>
                            
                            <div class=\"middleBoy\">
                                <input type=\"text\" id=\"phone\" name=\"phone\" placeholder = \"+61, (03), 02, 0412\" oninput=\"checkNumber();\">
                            </div>
                            
                            <br>
                            
                            <div class=\"middleBoy\">
                                <p id=\"phoneCheck\" name=\"phoneCheck\"> </p>
                            </div>
                            
                            <br>
                            
                            <div class=\"middleBoy\">
                                <input type=\"submit\" name=\"person\" value=\"Submit\">
                            </div>
                        </form>
                        <br>
                        <hr id=\"Blue\">
                        <form action=\"showing.php\">
                            <input type=\"submit\" value =\"Return\">
                        </form>
                    </div>
                    
                    
                    <br>
                    <hr id=\"Pink\">
                    </section>
                ";
                }  
                ?>
            </main>
        </div>
        <footer>
            <?php include 'includes/footer.php'; ?> 
        </footer>
    </body>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
</html>