<?php
header('Content-type: text/plain');
//1
echo "\n\n\n1:\n";
$very_bad_unclear_name = "15 chicken wings";
$order = $very_bad_unclear_name." and tea";
echo "\nNew order is: $order";
echo "\nYour order is: $very_bad_unclear_name.";

//2
echo "\n\n\n2:\n";
$var = 10;
echo "\n $var";
$var_2 = 12.5;
echo "\n $var_2";
echo "\n", 12+0,"\n",12-0;

$last_month = 1187.23;
$this_month = 1089.98;
echo  "\n", $this_month-$last_month;

//11
echo "\n\n\n11:\n";
$num_languages = 4;
$months = 11;
$days =  $months*16;
$days_per_language = $days/$num_languages;
echo "\n Ответ: $days_per_language";

//12
echo "\n\n\n12:\n";
echo "\n", 8**2;

//13
echo "\n\n\n13:\n";
$my_num=26;
$answer = $my_num;
$answer+=2;
$answer*=2;
$answer-=2;
$answer/=2;
$answer-=$my_num;
echo "\n Answer:$answer";

//14
echo "\n\n\n14:\n";
$a=10;
$b=3;
echo "\n", $a%$b;

$A=555;
$B=666;
if ($A%$B===0){
    echo "\n Делится";
}
else{
    echo "\n Не делится";
}

$st = pow(2,10);
$kor = sqrt(245);
echo "\n $st $kor";

$arr = [4,2,5,19,13,0,10];
$sum=0;
foreach ($arr as $d){
    $sum+=pow($d,2);
}
$sum=sqrt($sum);
echo "\n Ответ: $sum";

$numb = sqrt(379);
$int = round($numb);
$ten = round($numb,1);
$hun = round($numb,2);
echo "\n $int $ten $hun";

$number = sqrt(587);
$mass = ["fl"=>floor($number), "cl"=>ceil($number)];
echo "\n {$mass["fl"]} {$mass["cl"]}";

$arr = [4,-2,5,19,-130,0,10];
$min = min($arr);
$max = max($arr);
echo "\n $min $max";

$r = rand(1,100);
echo "\n Рандом $r";

$ranar=[];

for($i =0; $i<10;$i++)
{
    $ranar[$i]=rand(1,10);
}
var_dump($ranar);

$a1=-7;
$b1=9;
$ab=abs($a1-$b1);
echo "\n Модуль $ab";

$m =  [1, 2, -1, -2, 3, -3];
foreach($m as &$number)
{
    $number = abs($number);
}
echo"\n";
var_dump($m);

$num = 30;
$del=[];
$cnt =0;
for($i =1;$i<=$num;$i++)
{
    if($num%$i===0)
    {
        $del[$cnt]=$i;
        $cnt++;
    }
}
echo"\nДелители \n";
var_dump($del);

$nums= [1,2,3,4,5,6,7,8,9,10];
$sum =0;
$count = 0;
foreach($nums as $digits)
{
    if($sum===10)
    {
        break;
    }
    $sum+=$digits;
    $count++;
}

echo("\nНужно сложить $count ");

//15
echo "\n\n\n15:\n";
function printStringReturnNumber(){
    echo "\nabcdef";
    return 1213;
}
$my_num = printStringReturnNumber();
echo "\nФункция1: ", $my_num;


//16
echo "\n\n\n16:\n";
function increaseEnthusiasm(string $str){
    return $str.="!";
}
$string = "kkkk";
echo"\noooo",increaseEnthusiasm($string);


function repeatThreeTimes(string $str){
    $temp = null;
    $temp.=$str.=$str.=$str;
    return $temp;
}
$string1 = "mmmmm";
echo "\n Вывод: " , repeatThreeTimes($string1);

function cut(string $str, $c = 10)
{
    $str1 = "";
    for($i = 0; $i < strlen($str); $i++)
    {
        if ($i >= $c)
        {
            break;
        }
        else
        {
            $str1 .= $str[$i];
        }
    }
    return $str1;
}
$test = "asdqwedf";
echo "\nИзначальная: $test\nОбрезанная: ",cut($test,4);

$recursiveArray = [1,2,36,123,12];
echo "\nРекурсия:";
function foo($arr, $i)
{
    if($i < sizeof($arr))
    {
        echo "\n{$arr[$i]}";
        foo($arr, $i+1);
    }
    return 0;
}
foo($recursiveArray, 0);

function sumd($number)
{
    $summ = 0;

    while($number>0)
    {
        $summ+= (int)($number%10);
        $number= (int)($number/10);
    }

    if($summ>9)
    {
        sumd($summ);
    }
    else
    {
        echo $summ;
    }
}
$number = 21421;
echo "\nсумма цифр:\n",sumd(21421),"\n";

//17
echo "\n\n\n17:\n";
$symbolA =[];
echo "\nМассив из иксов:\n";
function symbolic(&$arr,$n)
{
    $sym = "";
    $count = 0;
    while($count!=$n)
    {
        $arr[$count] = $sym.="x";
        $count++;
    }
}

symbolic($symbolA,4);
var_dump($symbolA);

function arrayF($value,$n)
{
    $array=[];
    for($i = 0; $i<$n;$i++)
    {
        $array[$i] = $value;
    }
    return $array;
}

$testArray = arrayF('x',5);
echo "\nСозданный массив:\n";
var_dump($testArray);

$twinArray = [[1,246,2,12],[21,0,12],[23,9]];
$sumOfTwinArray = 0;
for($i=0;$i<sizeof($twinArray);$i++)
{
    for($j =0;$j<sizeof($twinArray[$i]);$j++)
    {
        $sumOfTwinArray+=$twinArray[$i][$j];
    }
}

echo"\nСумма:$sumOfTwinArray";

echo("\nмассив:\n");
$doubleArray =[];
$i= 0;
$j=0;
$val =1;

while($i!=3)
{
    $j=0;
    while($j!=3)
    {
        $doubleArray[$i][$j] = $val;
        $val++;
        $j++;
    }
    $i++;
}
echo"\n";
var_dump($doubleArray);

$array1 = [2,3,5,9];
$result = $array1[0]*$array1[1] + $array1[2]*$array1[3];
echo"\n$result\n";

$user = ["name"=>"Артем","surename"=>"Калиниченко","patronymic"=>"Русланович"];

echo $user["name"]," ", $user["surename"]," ", $user["patronymic"]," ";

echo "\nДата: ";
$date = ["year"=> 2023,"month"=>5,"day"=>15];

echo $date["year"],"-0", $date["month"],"-0", $date["day"];


$arr = ['a', 'b', 'c', 'd', 'e'];

echo "\nКол-ов: ", sizeof($arr);
echo "\nПоследний: ", $arr[sizeof($arr)-1];
echo "\nПредпоследний: ", $arr[sizeof($arr)-2];

//18
echo "\n\n\n18:\n";
function compare($a,$b)
{
    return $a+$b>10;
}
$bool = compare(5,5);
echo "\n$bool" ;

function isEqual($a,$b)
{
    return $a===$b;
}

$bool = isEqual(5,6);
echo "\n$bool";


$test = 0;
echo (($test == 0) ? 'верно' : ''), "\n";

$age =129;
if($age<10 || $age>99)
{
    echo "\nЧисло $age";
}

else
{
    $summa = 0;
    while($age>0)
    {
        $summa+= (int)($age%10);
        $age= (int)($age/10);
    }

    if($age<=9)
    {
        echo "\nоднозначна\n";
    }
    else
    {
        echo "\nдвузначна\n";
    }
}

$arr= [1,21,31,24];

if(sizeof($arr)===3)
{
    var_dump($arr);
}
else
{
    echo "\nВ массиве не 3 элемента";
}

//19
echo "\n\n\n19:\n";
$counter = 0;
$colum = "x";
while($counter !=20)
{
    echo $colum,"\n";
    $colum.="x";
    $counter++;
}

// 20
echo "\n\n\n20:\n";
$arr = [1,2,29,100];
echo "\nСреднее арифметическое: ", array_sum($arr)/sizeof($arr);
$arr3= range(1,100);
echo "\nСумма: ", array_sum($arr3)/sizeof($arr3);

$arr = array(1,4,9,16,25);
$arr = array_map("sqrt", $arr);
echo "/n Корни:\n";
var_dump($arr);

$keys = range('a', 'z');
$val = range(1,26);
$arr = array_combine($keys, $val);
echo "\n Ассоциатинвый массив:\n";
var_dump($arr);


$str = "1234567890";
$arr = str_split($str, 2);
$sum = array_sum($arr);
echo "\nсумма: $sum";