

<?php  
//echo phpinfo();
//docker exec -it laba_1-php-1 /bin/bash

//  int
$variableOne = 0x1A; // 26

//  float

$float = 1.234;
$float = 1.2e3; // 1.2 * 10ˆ3

//  string

$string = 'qwerty $erp {$erp}'; 
$erp = '1234';
$string1 = "qwerty $erp {$erp}ess";

$heredoc = <<<HEREDOC

    select * from table;

HEREDOC;

echo $string;
echo $string1;

//  array

$array = [1, 2, 3]; // auto key from zero
$array = ['key1' => 1, 2, 3];

echo "\n";
echo $array['key1'];
echo "\n";

echo var_dump($array);

$array = [
    [1,2,],
    [3,4,],

];
echo $array[0][1];
echo "\n";

//  object
readonly class Car{
    public function __construct(readonly private string $color)
    {   }

    public function getColor(): string
    {
        return $this -> color;
    }

}

$car = new Car('white');
echo $car->getColor();

echo "\n";

$empty = null;

if ($car === null){
    echo 'eees';
}   else{
    echo 'nooo';
}
echo "\n";

//  bool
$bool = true;
$bool = false;


// логическое И
//$a && $b;
// логическое ИЛИ
//$a || $b;
$str1 = 'qwer';
$str2 = 'ty';
echo $str1 . $str2;

$value1 = 1;
$value2 = '1';
var_dump($value1 >= $value2);
var_dump($value1 === $value2);
var_dump($value1 !== $value2);


/*
while ($i <=20){
    //  do something
}

foreach($array as $value){
    // code
    continue;

    // code
}
*/

//echo strlen($str1);
//echo trim('   eeerter    ');
//echo strtolower('EwqUksl');
//echo strtoupper('EwqUksl');