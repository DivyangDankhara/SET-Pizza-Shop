<!DOCTYPE html>
<!--
*	 FILE          : Page-3.php
*    PROJECT       : Final Exam WDD
*	 PROGRAMMER    : Divyangbhai Dankhara
*    STUDENET NO.  : 8061566
*	 FIRST VERSION : 2018-12-14
*	 Description   : This is the third page of the wdd final exam assignment
-->
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page-2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/Page-1.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        function Confirm()
        {
            document.getElementById("order").value = "Confirm"; 
            return true;
        }

        function Cancel()
        {
            document.getElementById("order").value = "Cancel"; 
            return true;
        }

    </script>
</head>
<body>
    <?php
        $fName = $_POST["firstName"];
        $lName = $_POST["lastName"];
        $pepperoni = $_POST["pepperoni"];
        $mushrooms = $_POST["mushrooms"];
        $greenOlives = $_POST["greenOlives"];
        $greenPeppers = $_POST["greenPeppers"];
        $Double_Chease = $_POST["Double_Chease"];
        $total = $_POST["total"];
    ?>
    <form method="POST" action="/Page-4.php">
        <div class="Wrapper">
            <div class="header">
                <b class="header_Text">SET Pizza Shop</b>
            </div>
            <div class="inputArea">
                <div class="prompt-text">Ciao <?php print($fName)?>, Welcome to the SET Online Pizza Ordering System</div>
                <div class="prompt-text">Your Order Contains </div>
                <table>
                    <tr>
                        <td align="right">Base :<td>
                        <td align="Left">$10<td>
                    </tr>
                    <?php
                        if($pepperoni != "")
                        {
                            ?>
                            <tr>
                                <td align="right">Pepperoni :<td>
                                <td align="Left">$1<td>
                            </tr>
                            <?php
                        }
                        if($mushrooms != "")
                        {
                            ?>
                            <tr>
                                <td align="right">Mushrooms :<td>
                                <td align="Left">$1<td>
                            </tr>
                            <?php
                        }
                        if($greenOlives != "")
                        {
                            ?>
                            <tr>
                                <td align="right">Green Olives :<td>
                                <td align="Left">$1<td>
                            </tr>
                            <?php
                        }
                        if($greenPeppers != "")
                        {
                            ?>
                            <tr>
                                <td align="right">Green Peppers :<td>
                                <td align="Left">$1<td>
                            </tr>
                            <?php
                        }
                        if($Double_Chease != "")
                        {
                            ?>
                            <tr>
                                <td align="right">Double Chease :<td>
                                <td align="Left">$1.5<td>
                            </tr>
                            <?php
                        }
                    
                    ?>
                    <tr>
                        <td align="right">Total Cost :<td>
                        <td align="Left">$<?php echo $total?><td>
                    </tr>
                    <tr>
                        <input id="order" type="hidden" name="order"/>
                        <input id="firstName" type="hidden" name="firstName" value="<?php echo $fName?>" />
                        <input id="lastName" type="hidden" name="lastName" value="<?php echo $lName?>" />
                        <td align="right"><input class="submit" value="Cancel" type="submit" onclick="Cancel()"/><td>
                        <td align="left"><input class="submit" value="Confirm" type="submit" onclick="Confirm()"/><td>
                    </tr>
                </table>

            </div>
        </div>
    </form>  
</body>
</html>