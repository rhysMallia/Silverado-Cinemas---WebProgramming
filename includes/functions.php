<?php
     function createTicket($name, $email, $phone, $movie, $spot, $sesh, $cost)
    {
        echo "<div class=\"Ticket\">
                <br>
                <hr id=\"Pink\">
                <br>
                <div class=\"TicketInner\">
                    <br>
                    <p class=\"pP\"> $name </p>
                    <br>
                    <p class=\"pP\"> $phone</p>
                    <br>
                    <p class=\"pP\"> $email</p>
                    <br>
                    <br>
                    <hr id=\"Blue\">
                    <br>
                    <p class=\"pP\"> $movie </p>
                    <br>
                    <p class=\"pP\"> $spot</p>
                    <br>
                    <p class=\"pP\">$sesh pm</p>
                    <br>
                    <p class=\"pP\">$ $cost</p>
                    <br>
                    <br>
                    <hr id=\"Blue\">
                    <br>
                    <img class=\"smallImage\" src=\"img/barcode.png\" alt=\"barcode for ticket\">
                    <br>
                    <hr id=\"Blue\">
                    <br>
                    <img class=\"smallImage\" src=\"https://images.cooltext.com/5007977.png\" alt=\"Silverardo Logo\">
                    <br>
                    <br>
                </div>
                <br>
                <br>
                <hr id=\"Pink\">
                <br>
            </div>";
    }
    
    function addToOrderHeader($name, $email, $phone)
    {
        $file = 'orders.txt';
        $fp = fopen($file, "a") or die('Cannot open file:  '.$fp);
        $divider = "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";
        $nl ="\n";
        
        $header = "$divider  $nl . ORDER . $nl $divider";
        $body = "$nl $name  $nl  $email  $nl  $phone  $nl";
        $header = $header . ' ' . $body;
        fwrite($fp, $header);
        fclose($fp);
        
    }
    
    function addToOrderBody($movie, $spot, $sesh, $count, $cost, $sub)
    {
        $file = 'orders.txt';
        $fp = fopen($file, "a") or die('Cannot open file: '.$fp);
        $nl = "\n";
        
        $output = "$nl $movie $nl $spot $nl $sesh pm $nl Tickets: $count $nl Subtotal:$cost $nl Total: $sub $nl";
        fwrite($fp, $output);
        fclose($fp);
    }
    
    function addToOrderFooter($total)
    {
        $file = 'orders.txt';
        $fp = fopen($file, "a") or die('Cannot open File: '.$fp);
        $nl = "\n";
        
        $footer = "$nl $nl Order Total:$total $nl";
        fwrite($fp, $footer);
        fclose($fp);
    }
    
    function addToReceiptHeader($name, $email, $phone)
    {
        $file = 'receipt.txt';
        $fp = fopen($file, "w") or die('Cannot open file:  '.$fp);
        $divider = "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";
        $nl = "\n";
        
        $header = "$divider  $nl . ORDER . $nl $divider";
        $body = "$nl $name  $nl  $email  $nl  $phone  $nl";
        
        $header = $header . ' ' . $body;
        fwrite($fp, $header);
        fclose($fp);
    }
    
    function addToRecieptBody($movie, $spot, $sesh, $count, $cost, $sub)
    {
        $file = 'receipt.txt';
        $fp = fopen($file, "a") or die('Cannot open file: '.$fp);
        $nl ="\n";
        
        $output = "$nl $movie $nl $spot $nl $sesh pm $nl Tickets: $count $nl Subtotal:$cost $nl Total: $sub $nl";
        fwrite($fp, $output);
        fclose($fp);
    }
    
    function addToReceiptFooter($total)
    {
        $file = 'receipt.txt';
        $fp = fopen($file, "a") or die('Cannot open File: '.$fp);
        $nl = "\n";
        
        $footer = "$nl $nl Order Total:$total $nl";
        fwrite($fp, $footer);
        fclose($fp);
    }
    
    function printReceipt()
    {
        $file = 'receipt.txt';
        $contents = nl2br(file_get_contents($file));
        echo "<div class=\"middleBoy\" id=\"receipt\">
                <p>
                $contents
                </p> 
                </div>
                <br>
                <br>
                <br>"; 
    }
        
    function youShouldntBeHere()
    {
        echo "<div class=\"middleBoy\">
                    <hr id=\"Empty\">
                    <p class=\"pP\">
                    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                    </p>
                    <br>
                    <hr id=\"Blue\">
                    <p>
                        Sorry! You seem to have stumbled into a page you shouldn't have.
                        <br>
                        Please return to the homepage!
                    </p>
                    <br>
                    <br>
                    <img class=\"smallImage\" src=\"img/shrug.png\" alt=\"Shrugging person\">
                    <br>
                    <form action=\"index.php\">
                        <input type=\"submit\" value=\"Return!\" />
                    </form>
                    <br>

                    <hr id=\"Blue\">
                    <p class=\"pP\">
                    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                    </p>
                    <br>
                </div>";    
    }
    
    function clearFile()
    {
        $file = 'receipt.txt';
        $fp = fopen($file, "w") or die('Cannot open File: '.$fp);
        $nl = "\n";
        
        $destroy = "$nl";
        fwrite($fp, $destroy);
        fclose($fp);
    }
    

    
?>