<DOCTYPE HTML>
<html>
    <body>
        <form action="<?php $_PHP_SELF ?>" method="GET" >
            <label for="first">Введите первое число:</label><br>
            <input type="number" id="first" name="first"><br>
            <label for="second">Введите второе число:</label><br>
            <input type="number" id="second" name="second">
            <input type="submit"/>
        </form>
    </body>
</html>


<?php 

    $a = $_GET["first"];
    $b = $_GET["second"];
    
    
    $sum = sum($a, $b);
    function sum(string $a,string $b){
    
    $sum = $a + $b;
    echo "$sum";
    
    }
    


?>
