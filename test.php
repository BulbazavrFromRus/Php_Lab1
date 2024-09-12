<meta charset="utf-8">
<?php 
  echo "1. Взять рандомное число  в диапазоне от -100 до 100 ";

  $rand = mt_rand(-100, 100);

  echo "This is random generated digital " . $rand . "<br>";

  echo "a." . "<br>";
  if($rand < 0){
    echo  $rand . " is negative digit" . "<br>";
  }
  else{
    echo $rand .  " is positive digit" . "<br>";
  }


  echo "b." . "<br>";
  if($rand % 2 == 0){
     echo $rand . " is even" . "<br>" . "<br>";
  }
  else{
	echo $rand . " is odd". "<br>" . "<br>";
  }

?>

<?php
echo "2. Взять рандомное число" . "<br>";
 

$rand = mt_rand(-1000, 1000);
echo "Random number is " . $rand . "<br>";

echo "a. Вывести в консоль первую цифру этого числа." . "<br>";

$rand = abs($rand);

$firstDigit = (int)substr((string)$rand, 0, 1);


echo "Первая цифра числа: " . $firstDigit . "<br>";

echo "b. Вывести в консоль последнюю цифру этого числа." . "<br>";


$lastDigit = abs($rand) % 10;
echo "Последняя цифра числа: " . $lastDigit . "<br>";

echo "c. Вывести в консоль сумму первой и последней цифры этого числа." . "<br>";
$sumFirstAndLast = $firstDigit + $lastDigit;
echo $sumFirstAndLast . "<br>";

echo "d. Вывести количество цифр в этом числе" . "<br>";
$countNum  = strlen($rand);
echo $countNum . "<br>" . "<br>";
?>

<?php 
  echo "3. Придумать строку." . "<br>";
  
  $str  = "hello world";
  
  $lenghtStr = strlen($str);

 echo "a. Вывести в консоль длину этой строки." . "<br>";
 echo $lenghtStr . "<br>";
 
 echo ".b Вывести в консоль последний символ этой строки." . "<br>";
 
 $lastSymbol = substr($str, -1);
 echo "Последний символ строки: " . $lastSymbol . "<br>";

 echo "c. Перебрать и вывести в консоль по очереди все символы с конца строки." . "<br>";

 $length = strlen($str);

 for($i = 0; $i < $length; $i++){
  echo $str[$i] . PHP_EOL;
 }

 echo "<br>" . "<br>";
?>

<?php
  echo "4. Придумать 2 строки." . "<br>";

  $str1 = "First string";
  $str2 = "Second string";

  echo "a. Соединить их через символ “&”. Вывести в консоль общую строку." . "<br>";
  
  $commonLine = $str1 . "&" . $str2;
  echo $commonLine . "<br>";

 echo  "b. Сравнить длину строк. Вывести в консоль, ту что длиннее." . "<br>";

  if (strlen($str1) > strlen($str2)) {
    echo $str1 . "<br>" . "<br>";
  } else {
    echo $str2 . "<br>" . "<br>";
  }

?>

<?php
  echo "5. Взять 2 рандомных числа в диапазоне от 1 до 100" . "<br>";

  $firstNum = mt_rand(1, 100);
  $secondNum = mt_rand(1, 100);

  echo "First number is " .  $firstNum . "<br>";
  echo "Second number is " .  $secondNum . "<br>";

  echo "a. Проверить, что первые цифры этих чисел совпадают." . "<br>";

  $firstDigit = (int)substr((string)$firstNum, 0, 1);
  $secondDigit = (int)substr((string)$secondNum, 0, 1);

  if($firstDigit == $secondDigit){
    echo "The first digits of two numbers are same" . "<br>";
  }
  else{
    echo "The first digits of two numbers are different" . "<br>";
  }

  echo "b. Проверить, что первое число без остатка делится на второе" . "<br>";

  if($firstNum % $secondNum == 0){
    echo "Первое число делится на второе без остатка" . "<br>";
  }
  else{
    echo "Первое число делится на второе с остатком" . "<br>";
  }

  echo "c. Сравнить числа (вывести в консоль большее)." . "<br>";
  if($firstNum > $secondNum){
    echo "Первое число " . $firstNum . " больше чем второе "  . $secondNum  . "<br>"  . "<br>";
  }
  else{
    echo "Второе число " . $secondNum . " больше чем первое "  . $firstNum  . "<br>"  . "<br>";
  }
?>

<?php

  echo "6. Взять 2 рандомных числа в диапазоне от 1 до 100" . "<br>";
  $firstNum = mt_rand(1, 100);
  $secondNum = mt_rand(1, 100);

  echo "a. Вывести в консоль остаток от деления первого числа на второе." . "<br>";
  $remainder  = $firstNum % $secondNum;

  echo "Остаток от деления первого числа на второе " . $remainder . "<br>";

  echo "b. Вывести в консоль сумму чисел." . "<br>";
  $sumNumbers =  $firstNum + $secondNum;
  echo "Сумма чисел первого на второе " . $sumNumbers . "<br>";
  
  $multiplicationOfNumbers = $firstNum * $secondNum;

  echo "c.  Вывести в консоль произведение чисел. " . $multiplicationOfNumbers . "<br>" . "<br>";
?>

<?php

     echo "7. Взять 3 рандомных числа в диапазоне от 1 до 50" . "<br>";
     $firstNum = mt_rand(1, 50);
     $secondNum = mt_rand(1, 50);
     $thirdNum = mt_rand(1, 50);

     $sumNumbers =  $firstNum + $secondNum + $thirdNum;
     $count = 3;

     $average = $sumNumbers % $count;

     echo "a. Вывести в консоль среднее арифметическое." . "<br>";
     echo "Среднее арифметическое трёх чисел " . $average . "<br>";


     echo "b. Вывести в консоль сумму квадратов." . "<br>";
     $numbers = [$firstNum, $secondNum, $thirdNum];

     $sumOfSquares =  0;
     foreach($numbers as $number){
      $sumOfSquares +=$number * $number;
     }
    echo "Сумма квадратов " . $sumOfSquares . "<br>";

    echo "c. Вывести в консоль наибольшее из ниx" . "<br>";
    $maxValue = max($firstNum, $secondNum, $thirdNum);
    echo "Наибольшее из трёх значений " . $maxValue .  "<br>";

    echo "c. Вывести в консоль наименьшее из ниx" . "<br>";
    $minValue = min($firstNum, $secondNum, $thirdNum);
    echo "Наименьшее из трёх значений " . $minValue .  "<br>";



     





?>

