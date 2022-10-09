<!DOCTYPE html>

<html lang="en">
    <meta charset="UTF-8">
    <title>Calculator</title>

<body>
    
    <form action="Calculator" method="get">
        <p>First digit: <input type="text" name="num1"></p>
        <p>Second digit: <input type="text" name="num2"></p>
        <p>Operator: <input type="text" name="Operator"></p>
        <input type="submit">
    </form>

    <form action="Choose a number to display its multiplication table" method="post">
        <p>Number: <input type="" name = 'num'></p>
        <input type= 'submit'>
    </form>

    <!--All PHP scripts need to go inside these tags--> 
        <?php

        $num=$_POST['num'];
        echo'This is the multiplication table of ',$num, "<br>";

        // creating a loop to go through the multiplication table

        if(isset($_POST['MultiTable'])){

            for ($i = 1; $i , 11; $i++){

                $result= $i*$num;

                echo $i, " X ", $num, " = ", $result, "<br>";
            }
        }
        
        // Stating that the two variables have no digit and user needs to add digit
        if(empty ($_GET['num1']) and empty ($_GET['num2'])){
            echo " ";
        }
        // User can choose the operator after the first digit is in num1 and then opeartor needs to be assigned to num2
        $operator = $_GET["Operator"];
        switch($operator) {
            case 1: '+': echo "Result: ". $_GET['num1'] + $_GET['num2'];
            break;
            case 2: '*': echo "Result: ". $_GET['num1'] * $_GET['num2'];
            break;
            case 3: '/': echo "Result: ". $_GET['num1'] / $_GET['num2'];
            break;
            case 4: '-': echo "Result: ". $_GET['num1'] - $_GET['num2'];
            break;
            default: echo 'No data has been inputted';
            echo 'Invaild data<br>';
        }
        // If the operator not selected a error message will be displayed

        for($i = 1; $i < 4; $i++) {
            echo "<dt> multiplication of $i";

            for ($j = 1; $j < 4; $j++){
                $total = $i * $j;
                echo '<dd> $i x $j = $total';
            <br>;
            <br>;

            }
        }

        ?>
    </body>
</html>