<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    // Q1
        {$colors = array('white', 'green', 'red');
        echo "<ul>";
        foreach($colors as $color){
            echo "<li>";
            print_r($color);
            echo "</li>";
        }
        echo "</ul>";
        $i = 0;
    }
    // Q2

    

    {$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
    "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
    "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
    "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );

    $array = array (1,2,3,4);
    
    foreach($cities as $city => $cuntry){
        echo "The capital of ";
        print_r($city);
        echo "is ";
        print_r($cuntry);
        newLine();
    }}


    // Q3
    {
        $color = array (4 => 'white', 6 => 'green', 11=> 'red');
        foreach($color as $num => $col){
            if ($num == 4){
            print_r($col);
            }
        }
        newLine();
    }

    // Q4
    {
        $array = array(1,2,3,4,5);
        array_splice($array, 3, 1, "$");
        printarr($array);
        newLine();
    }


    // Q5
    {
        $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
        asort($fruits);
        foreach($fruits as $symbol => $name){
            print_r($symbol);
            echo " = ";
            print_r($name);
            newLine();
        }
    }
    

    // Q6
    {
        $array = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62,
        65, 64, 68, 73, 75, 79, 73);
        $sort_array = sort($array);
        ;
        for($i=0 ; $i<7 ; $i++){
            print_r($array[$i]);
            echo " ";
        }
        echo"<br><br>";
        for($i=(count($array)-1) ; $i>(count($array)-8) ; $i--){
            print_r($array[$i]);
            echo " ";
        }
        newLine();
    }

    // Q7
    {
        $array1 = array("color" => "red", 2, 4);
        $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
        print_r(array_merge($array1,$array2));
        newLine();

    }
    
    // Q8
    {
        $colors = array("red","blue", "white","yellow");
        for ($i=0;$i<count($colors);$i++){
            $colors[$i] = strtoupper($colors[$i]);
        }
        printarr($colors);
        newLine();
    }

    // Functions
    // Q1
    {
        
        function checkPrime($num){
            $temp = 2;
            while ($temp<$num){
                if($num%$temp != 0){
                    $temp++;
                } else {
                    break;
                }
                
            }
            if ($temp == $num){
                echo "$num is a prime number";
            } else {
                echo "$num is a not prime number";
            }
        }

        checkPrime(19);
        newLines();

    }

    // Q2
    {
        function reverse($str){
            return strrev($str);
        }

        echo reverse("abc");
        newLines();
    }

    // Q3
    {
        $num1 = 10;
        $num2 = 20;

        function swap($num1, $num2){
            $temp = $num1;
            $num1 = $num2;
            $num2 = $temp;
            echo "num1 = $num1 and num2 = $num2";
        }

        swap($num1,$num2);
        newLines();

    }

    // Q4
    {
        $num = 407;
        function armstrong($num){
            $result =0;
            $array = str_split((string)$num);
            foreach ($array as $n){
                $result+=(int)$n ** 3;
            }
            if($result == $num){
                echo "$num is Armstrong Number";
            } else {
                echo "$num is not Armstrong Number";
            }
        }
        armstrong(407);
        newLines();  
    }

    // Q5
    {
        

        $str = "Eva, can I see bees in a cave?";
        
        function palindrome($str){
            $str1 = reverse(strtolower(preg_replace("/[^a-zA-Z]+/", "" , $str)));
            if($str1 == reverse($str1)){
                echo "Yes it is a palindrome";
            }
            else {
                echo "No it is not a palindrome";
            }
        }
        palindrome($str);
        newLines();

    }

    //Q6
    {
        $array1 = array(2, 4, 7, 4, 8, 4);
        printarr(array_unique($array1));
        newLines();
    }

    // Logical Statements and Operators
    //Q1
    {

    }















    function printarr($array){
        foreach($array as $e){
            print_r($e);
            echo " ";
        }
    }
    function newLine(){
        echo"<br>";
    }
    function newLines(){
        echo"<br><br><br>";
    }
    ?> 
</body>
</html>