<!DOCTYPE html>
<!--
*	 FILE          : Page-4.php
*    PROJECT       : Final Exam WDD
*	 PROGRAMMER    : Divyangbhai Dankhara
*    STUDENET NO.  : 8061566
*	 FIRST VERSION : 2018-12-14
*	 Description   : This is the forth page of the wdd final exam assignment
-->
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page-2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/Page-1.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <?php
        $Order = $_POST["order"];
        $fName = $_POST["firstName"];
        $lName = $_POST["lastName"];
    ?>
    <form method="POST" action="/Page-4.php">
        <div class="Wrapper">
            <div class="header">
                <b class="header_Text">SET Pizza Shop</b>
            </div>
            <div class="inputArea">
                <div class="prompt-text">Thank you <?php print($fName);?> <?php print($lName);?> for using our Online Pizza Ordering Service</div>
                <div class="prompt-text">Your Order is <?php echo $Order?></div>
            </div>
        </div>
    </form>  
</body>
</html>