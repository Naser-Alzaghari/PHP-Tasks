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
        {
            $str1 = "dragonball";
            $str2 = "dragonboll";
            for($i=0;$i<strlen($str1);$i++){
                if ($str1[$i] != $str2[$i]){
                    echo "First difference between two strings at position $i: \"$str1[$i]\" vs \"$str2[$i]\"";
                    break;
                }
            }

        }

        // Q2
        {
            $array = explode(" ","Twinkle, twinkle, little star.");
            var_dump($array);
        }

        // Q3
        {
            function nextchar($char){
                if(strtolower($char) == "z"){
                    echo "a";
                } else {
                    echo chr(ord(strtolower($char))+1);
                }
            }
            nextchar("d");
            echo"<br><br><br>";
        }

        // Q4
        {
            $str = "The brown fox";
            $array = explode(" ",$str);
            array_splice($array, 1 , 0 , array("quick"));
            echo implode(" ", $array);
            newLines();

        }

        // Q5
        {
            $str = '0000657022.24';
            str_replace("0","",$str);
            echo str_replace("0","",$str);
            newLines();
        }

        // Q6
        {
            $str = "The quick brown fox jumps over the lazy dog";
            $array = explode(" ",$str);
            array_splice($array, 3 , 1);
            echo implode(" ", $array);
            newLines();
        }

        // Q7
        {
            $str = "The quick brown fox jumps over the lazy dog---";
            echo str_replace("-","",$str);
            newLines();
        }

        // Q8
        {
            $str = "1+2/3*2:2-3/4*3";
            echo preg_replace("/[!-\/:-@[-`{-~]/","",$str);
            newLines();

        }

        // Q9
        {
            $str = "The quick brown fox jumps over the lazy dog";
            $array = explode(" ",$str);
            array_splice($array, 5);
            print_r($array);
            newLines();

        }
        // Q10
        {
            $str = "2,543.12";
            echo str_replace(",","",$str);
            newLines();

        }

        // Q11
        {
            for ($i = ord("a"); $i<=ord("z"); $i++){
                echo chr($i)." ";
            }
            newLines();
        }


        //LOOPs
        // Q1
        {
            $num1=0;
            $num2=1;
            $num3=0;
            echo "$num1 , $num2 , ";
            for($i=0;$i<10;$i++){
                $num3=$num1+$num2;
                echo "$num3 , ";
                $num1=$num2;
                $num2=$num3;
            }
            newLines();
        }

        //Q2
        {
            $str = "Orange Coding Academy";
            $result = 0;
            foreach(str_split($str, 1) as $s){
                if(strtolower($s) == 'o'){
                    $result++;
                }
            }
            echo $result;
            newLines();
        }


        // Q3
        {
            for($i=0;$i<=50;$i++){
                if($i%3==0 && $i%5==0){
                    echo "FizzBuzz ";
                } else if ($i%3==0){
                    echo "Fizz ";
                } else if ($i%5==0){
                    echo "Buzz ";
                } else {
                    echo "$i ";
                }
            }
            newLines();
        }

        //Q4
        {
            $j=1;
            $i=0;
            while($j<100){
                $i++;
                for($x=0;$x<$i;$x++){
                    echo "$j ";
                    $j++;
                }
                echo "<br>";
            }
            newLines();
        }

        //Q5
        {
            echo '<div style="text-align:center;">';
            $flag=0;
            for($i=ord("A");$i>=ord("A");){
                for ($x=ord("A");$x<=$i;$x++){
                    echo chr($x)." ";
                }
                echo "<br>";
                if ($i == ord("E")){
                    $flag=1;
                }
                if(!$flag){
                    $i++;
                } else {
                    $i--;
                }
            }
            echo '</div>';
        }


        // LOGICAL STATEMENTS
        // Q1
        {
            function leapYear($num){
                if($num%4==0){
                    echo "This year is a leap year";
                } else {
                    echo "This year is not a leap year";
                }
            }
            leapYear(2013);
            newLines();
        }

        // Q2
        {
            function season($num){
                if($num < 20){
                    echo "It is winter";
                } else {
                    echo "It is summertime";
                }
            }
            season(27);
            newLines();
        }

        // Q3
        {
            function sum($num1 , $num2){
                if($num1 == $num2){
                    echo $num1**2 * 3;
                } else {
                    echo $num1 + $num2;
                }
            }
            sum(3,3);
            newLines();
        }

        // Arrays
        // Q1
        {
            $colors = array("RED","BLUE", "WHITE","YELLOW");
            for($i=0;$i<count($colors);$i++){
                $colors[$i] = strtolower($colors[$i]);
            }
            print_r($colors);
            newLines();

        }

        // Q2
        {
            for($i=200;$i<=250;$i+=4){
                echo "$i, ";
            }
            newLines();
        }

        // Q3
        {
            $words = array("abcd","abc","de","hjjj","g","wer");
            $shortest = strlen($words[0]);
            $longest = strlen($words[0]);
            foreach($words as $word){
                if($shortest > strlen($word)){
                    $shortest = strlen($word);
                }

                if($longest < strlen($word)){
                    $longest = strlen($word);
                }
            }

            echo"The shortest array length is $shortest. The longest array length is $longest.";
            newLines();
        }

        // Q4
        {
            function randomrange($num1,$num2){
                for($i=0;$i<10;$i++){
                    echo rand($num1,$num2).", ";
                }
            }
            randomrange(10,20);
            newLines();
        }

        // Q5
        {
            $array1 = array( 2, 0, 10, 12, 6);
            function returnlowest($array){

                $min = $array[0];
                foreach($array as $num){
                    if($num < $min && $num != 0){
                        $min = $num;
                    }
                }
                return $min;
            }

            echo returnlowest($array1);
            newLines();

        }




        function newLines(){
            echo "<br><br><br>";
        }
    ?>

</body>
</html>