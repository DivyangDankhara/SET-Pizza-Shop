<!DOCTYPE html>
<!--
*	 FILE          : Page-2.php
*    PROJECT       : Final Exam WDD
*	 PROGRAMMER    : Divyangbhai Dankhara
*    STUDENET NO.  : 8061566
*	 FIRST VERSION : 2018-12-14
*	 Description   : This is the second page of the wdd final exam assignment
-->
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page-2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/Page-1.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        var checkedBox = 0;
        var doubleChease = 0;
        
        $(document).ready(function() 
        {
            getTotalAmount();
            $('.checkbox').click(function() {
                if(this.checked) 
                {
                    checkedBox = checkedBox + 1;
                }
                else
                {
                    checkedBox = checkedBox - 1;
                }
                getTotalAmount();
            });


            $('#Double_Chease').click(function() {
                if(this.checked) 
                {
                    doubleChease = 1;
                }
                else
                {
                    doubleChease = 0;
                }
                getTotalAmount();
            });
        });
        
        

        function getTotalAmount()
        {

            $.ajax({url: "Price-Cal.php?Chease="+doubleChease+"&topping="+checkedBox, success: function(result)
            {
                document.getElementById("total").innerHTML = "$" + result;
                document.getElementById("totalsend").value = result;
            }});
        }

    </script>
</head>
<body>
    <?php
        $fName = $_POST["firstName"];
        $lName = $_POST["lastName"];
    ?>
    <form method="POST" action="/Page-3.php">
        <div class="Wrapper">
            <div class="header">
                <b class="header_Text">SET Pizza Shop</b>
            </div>
            <div class="inputArea">
                <div class="inputAreaLeft">
                    <div class="prompt-text">Ciao <?php print($fName)?>, Welcome to the SET Online Pizza Ordering System</div>
                    <div class="prompt-text">Please select Toppings for Pizza</div>
                </div>
                <div class="inputAreaRight">
                    <Table>
                        <div class="toppings">
                        <tr>
                            <td align="right"><input id="pepperoni" class="checkbox" type="checkbox" name="pepperoni" value="pepperoni" /></br></td>
                            <td><lable>Pepperoni<lable></td>
                        </tr>
                        <tr>
                            <td align="right"><input id="mushrooms" class="checkbox" type="checkbox" name="mushrooms" value="mushrooms" /></br></td>
                            <td><lable>Mushrooms<lable></td>
                        </tr>
                        <tr>
                            <td align="right"><input id="greenOlives" class="checkbox" type="checkbox" name="greenOlives" value="greenOlives" /></br></td>
                            <td><lable>Green Olives<lable></td>
                        </tr>
                        <tr>
                            <td align="right"><input id="greenPeppers" class="checkbox" type="checkbox" name="greenPeppers" value="greenPeppers" /></br></td>
                            <td><lable>Green Peppers<lable></td>
                        </tr>
                        </div>
                        <tr>
                            <td align="right"><input id="Double_Chease" type="checkbox" name="Double_Chease" value="Double Chease" /></br></td>
                            <td><lable>Double Chease<lable></td>
                        </tr>
                        <tr>
                            <td align="right"><lable>Base :</lable></td>
                            <td><lable>$10</lable></td>
                        </tr>
                        <tr>
                            <td align="right">Current Cost :<lable></lable></td>
                            <td><div id="total"></div></td>
                        </tr>
                    </table>

                    <!--<div id="afterTax">After Tax :</div>-->
                    <input class="submit" value="Make It!"  type="submit"/>
                    <input id="firstName" type="hidden" name="firstName" value="<?php echo $fName?>" />
                    <input id="lastName" type="hidden" name="lastName" value="<?php echo $lName?>" />
                    <input id="totalsend" type="hidden" name="total"/>
                </div>
            </div>
        </div>
    </form>  
</body>
</html>