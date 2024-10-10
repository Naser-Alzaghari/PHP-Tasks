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
        function checksum($num1,$num2){
            if($num1+$num2==30){
                return "true";
            }
            return "false";
        }
        echo checksum(10,20);
        newLines();
    }
    
    // Q2
    {
        $number = 21;
        function modOf3($number){
        if ($number % 3 == 0){
            echo "true";}
        else {
            echo "false";}
        }
        modOf3(21);
        newLines();

    }

    // Q3
    {
        function from50to20($number){
            if ($number >= 20 && $number <= 50){
                echo "true";}
            else {
                echo "false";}
        }
        from50to20(35);
        newLines();
    }


    // Q4
    {
        $array = array( 1, 5, 9 );
        echo max($array);
        newLines();
    }

    // Q5
    {
        function calculateBill($units){
            $price = 0;
            if ($units >= 50){
                $price+=50*2.5;
                $units-=50;
            } else {
                return $price+$units*2.5;
            }
            if ($units >= 100){
                $price+=100*5;
                $units-=100;
            } else {
                return $price+$units*5;
            }
            if ($units >= 100){
                $price+=100*6.2;
                $units-=100;
            } else {
                return $price+$units*6.2;
            }
            
                return $price+$units*7.5;
        }

        echo "you bill amout is: ".calculateBill(100)."JD<br>";

    }


    // Q6
    {
        echo '<input type="text" id="display" disabled><br><input type="text" id="num1"><input type="text" id="num2"><br><button id="sum">+</button><button id="min">-</button><button id="multibly">*</button><button id="devide">/</button>';
        newLines();
    }

    // Q7
    {
        function checkage($num){
            if(!$num >= 18){
                echo "is no eligible to vote";
            } else {
                echo "is eligible to vote";
            }
        }

        checkage(20);
        newLines();
    }

    // Q8
    {
        function checknum($num){
            if($num > 0){
                echo "positive";
            } else if ($num < 0) {
                echo "nigative";
            } else {
                echo "zero";
            }
        }
        checknum(-10);
        newLines();

    }

    // Q9
    {
        $array = array(60,86,95,63,55,74,79,62,50);
        $avrage = array_sum($array)/count($array);
        if($avrage<60){
            echo "F";
        } else if ($avrage<70){
            echo "D";
        } else if ($avrage<80){
            echo "C";
        } else if ($avrage<90){
            echo "B";
        } else {
            echo "A";
        }
        newLines();
    }


    // Q1
    {
        function printnumbers(){
            for($i = 0 ; $i<10 ; $i++){
                echo "$i-";
            }
            echo $i;
        }
        printnumbers();
        newLines();
    }


    // Q2
    {
       $result = 0;
       for ($i = 0 ; $i <=30 ; $i++){
        $result+=$i;
       } 
       echo $result;
       newLines();
    }
    
    // Q3
    {
        for ($i = ord("A"); $i<=ord("E"); $i++){
            for($j = ord("E") ; $j >= ord("A"); $j--){
                if($j>$i){
                    echo "A";
                } else {
                    echo chr($i);
                }
            }
            echo "<br>";
        }
        newLines();
    }


    // Q4
    {
        for ($i = 1 ; $i<=5; $i++){
            for($j = 5 ; $j >= 1; $j--){
                if($j>$i){
                    echo 1;
                } else {
                    echo $i;
                }
            }
            echo "<br>";
        }
        newLines();
    }
    
    // Q5
    {
        for ($i = 1 ; $i<=5; $i++){
            for($j = 1 ; $j <= 5; $j++){
                if($j==$i){
                    echo $i;
                } else {
                    echo 0;
                }
            }
            echo "<br>";
        }
        newLines();
    }

    // Q6
    {
        function factorial($num){
            $r=1;
            for($i=1;$i<=$num;$i++){
                $r*=$i;
            }
            return $r;
        }

        echo factorial(5);
        newLines();
    }


    // Q7
    {
        echo "<table border=\"1\" cellpadding=\"3px\" cellspacing=\"0px\">";
        for ($i = 1 ; $i<=6; $i++){
            echo"<tr>";
            for($j = 1 ; $j <= 5; $j++){
                echo"<td>$i * $j = ".$i*$j."</td>";
            }
            echo"</tr>";
        }
        echo "</table>";
        newLines();
    }

    // Strings
    // Q1
    {
        $str = "Hello World";
        echo strtoupper($str);
        newLine();
        echo strtolower($str);
        newLine();
        echo ucfirst($str);
        newLine();
        echo ucwords($str);
        newLines();
    }


    //Q2
    {
        $date = "085119";
        $array = str_split($date, 2);
        echo implode(":", $array);
        newLines();
    }

    // Q3
    {
        $str = "I am a full stack developer at orange coding academy";
        function findword($str, $word){
            if(strpos(strtolower($str), strtolower($word))){
                echo "word fond";
            } else {
                echo "word not found";
            }
        }
        findword($str, "Orange");
        newLines();
    }

    // Q4
    {
        $str = "www.orange.com/index.php";
        echo explode("/",$str)[1];
        newLines();

    }

    // Q5
    {
        $str = "info@orange.com";
        echo explode("@",$str)[0];
        newLines();

    }

    // Q6
    {
        $str = "info@orange.com";
        echo substr($str, -3);
        newLines();

    }

    // Q7
    {
        $str = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
        echo substr(str_shuffle($str), 0 ,10);
        newLines();

    }

    // Q8
    {
        $str = explode(" ", "That new trainee is so genius.");
        $str[0] = "the";
        echo implode(" ", $str);
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


<script src="main.js">
    
</script>
</body>
</html>