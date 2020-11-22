<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

/* Task 1

$array = array(3, 5, 7, 9, 2, 12, 4, 8, 8);
$max = $array[0];
$length = sizeof($array);

for($i = 0; $i < $length; $i++){
    if($array[$i] > $max){
        $max = $array[$i];
    }
}

echo "Max = ". $max;
*/


/* Task 2

$array = array(3, 6, 7, 0, 6, 1, 3, 6, 9, 4);
$length = sizeof($array);
for($i = 0; $i < $length; $i++){
    echo $array[$i]. " ";
}

echo "\n";

for($i = 0; $i < $length - 1; $i++){
    for($j = 0; $j < $length - $i - 1; $j++){
         if($array[$j] > $array[$j+1]){
            $buffer = $array[$j];
            $array[$j] = $array[$j+1];
            $array[$j+1] = $buffer;
        }
    }
}

for($i = 0; $i < $length; $i++){
    echo $array[$i]. " ";
}

*/


/* Task 3
CREATE TABLE IF NOT exists products_has_tags(
    product_id INT NOT NULL,
    tag_id INT NOT NULL,
    foreign key(product_id) references products(id) ON delete cascade ON update cascade,
    foreign key(tag_id) references tags(id) ON delete cascade ON update cascade
);


SELECT product_id FROM products_has_tags
    WHERE COUNT(tag_id) > 10;

*/

/* Task 4
function binarySearch($array, $key){
    $left = 0;
    $right = sizeof($array) - 1;
    $position = -1;
    
    for($i = 0; $i < sizeof($array); $i++){
        $middle = (int)($left + $right) / 2;
        if($key == $array[$middle]){
            $position = $middle + 1;
            echo "Position of the key is ". $position;
            break;
        }
        elseif($key > $array[$middle]){
            $left = $middle + 1;
        }
        else {
            $right = $middle - 1;
        }
    }
    
    if($position < 0){
        echo "Key has not found";
    }
}

binarySearch(array(1,2,3,5,6,7,8,9,10), 7);
*/



/* Task 5
class Vector
{
    private $x;
    private $y;
    
    public function __construct($first, $second)
    {
        $this->x = $first;
        $this->y = $second;
    }
    
    public function getVector(){
        echo "(". $this->x."; ". $this->y. ")"."\n";
        return $this->x;
        return $this->y;
    }
    
    public function add($vector){
        $this->x = $this->x + $vector->x;
        $this->y = $this->y + $vector->y;
    }
    
    public function subtract($vector){
        $this->x = $this->x - $vector->x;
        $this->y = $this->y - $vector->y;
    }
    
    public function multiply($var){
        $this->x = $this->x * $var;
        $this->y = $this->y * $var;
    }
}

$a = new Vector(10, 5);
$b = new Vector(47, 13);
$c = new Vector(16, 2);

$a->add($b);
$a->getVector();
$b->subtract($c);
$b->getVector();
$c->multiply(3);
$c->getVector();
*/

/* Task 6
function isPalindrom($string){
    $reverse = strrev($string);
    if($string == $reverse){
      echo "This phrase is palindrom!";
    }
    else{
        echo "This phrase isn't palindrom!";
    }
}

$text = "level";
isPalindrom($text);
*/




?>

    
</body>
</html>


