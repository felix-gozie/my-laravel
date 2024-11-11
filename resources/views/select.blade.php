<?php
/*function car($motor){
    echo "$motor car.<br>";
}
car("new");
car("fairly used");
car("old");
*/

#create a function of name of three players and their birth year

/*function Name($name, $year){
    echo "$name Nnanna . born in $year<br>";
}
Name("Felix", "1997");
Name("Ben", "1988");
Name("Grace", "1987");
*/

#To determine height, we use setHeight

/*function setHeight($minHeight = 50){
    echo "The height is :$minHeight <br>";
}
setHeight(300);
setHeight(300);
setHeight(58);
*/

# This is a function sum

/*function sum($x,$y){
    $z = $x + $y;
    return $z;
}
echo "5 + 5 =" . sum(5,5) . "<br>";
echo "3 + 5 =" . sum(3,5) . "<br>";
echo "2 + 5 =" . sum(2,5) . "<br>";
echo "2 + 5 =" . sum(2,5) . "<br>";
*/

# This is an array 

/*$laptops = array("Dell", "Lenovo", "Hp", "Asus");
echo $laptops[0]."<br>";
echo $laptops[1]."<br>";
echo $laptops[2]."<br>";
echo $laptops[3];


function myFunction() {
    echo "This text comes from a function";
  }
  
  // create array:
  $myArr = array("Volvo", 15, ["apples", "bananas"], "myFunction");
$myArr[3]();  


#Function for counting array items
$cars = array("Bmw", "Volvo", "Toyota");
echo count($cars);

#This is an array change key case
$cars = array("Toyota" =>"nice car", "Bmw"=>"super car", "Volvo"=>"excellent car");
print_r(array_change_key_case($cars,CASE_UPPER));

$animals = array("a"=>"goat", "B"=>"cow", "c"=>"lion", "b"=>"cat");
print_r(array_change_key_case($animals, CASE_UPPER));

$age = array("ben"=>"30", "gozie"=>"40", "felix"=>"20", "Hellen"=>"10", "charle's"=>"35", "louis"=>"32");
print_r(array_chunk($age,2,true));

#Using array to retrieve last_names/records from the database

$b = array(
    array(
        'id'=> 23,
        'first_name'=> 'Felix',
        'last_name'=> 'Gozie',
    ),
    array(
        'id'=> 20,
        'first_name'=> 'Alex',
        'last_name'=> 'Ezekiel',
    ),
    array(
        'id'=> 10,
        'first_name'=> 'Ben',
        'last_name'=> 'Grace',
    )
);
    $last_names = array_column($b,'last_name');
    print_r($last_names);

#Array combine

$lname = array("Mok", "Jk","Peter");
$age = array("13","10","12");
$d = array_combine($lname,$age);
print_r($d);


#This is array count values

$e=array("s","p","s","h","r","s");
print_r(array_count_values($e));

# Array diff

$c1 = array("Toyota", "Camry", "Avalon", "Volvo");
$c2 = array("Toyota", "Camry", "Avalon");
$result = array_diff($c1,$c2);
print_r($result);


#Array diff key

$d1 = array("a"=>"black", "b"=>"white", "c"=>"gray");
$d2 = array("a"=>"yellow", "s"=>"diamond", "c"=>"brown");
$d3 = array("a"=>"green", "f"=>"red", "e"=>"dark-red");
$result = array_diff_key($d1,$d2,$d3);
print_r($result);
  
# Array diff uassoc

function myFunction($f,$e){
    if ($f===$e){
    return 0;
    }
    return ($f>$e)?1:-1;
}
$h1 = array("a"=>"red", "b"=>"blue", "c"=>"yellow");
$h2 = array("a"=>"red", "b"=>"gray", "c"=>"yellow");

$result = array_diff_uassoc($h1,$h2, "myFunction");
print_r($result);

# This is for User define key array diff ukey

function myFunction($f,$e){
    if ($f===$e){
    return 0;
    }
    return ($f>$e)?1:-1;
}
$h1 = array("a"=>"red", "b"=>"blue", "c"=>"yellow");
$h2 = array("a"=>"red", "b"=>"gray", "g"=>"yellow");

$result = array_diff_ukey($h1,$h2, "myFunction");
print_r($result);

# This is array fill
$n1 = array_fill(2,3,"gray");
$n2 = array_fill(0,2,"red");
print_r($n1);
echo "<br>";
print_r($n2);


# This is an array fill keys
$keys = array("a","b",'c',"d");
$a1 = array_fill_keys($keys, "red");
print_r($a1);

# This is array flip

$colors = array("a"=>"red", "b"=>"blue", "c"=>"yellow");
$result = array_flip($colors);
print_r($result);


#This is array intersect

$trees1 = array("a"=>"Iroko", "b"=>"Agony", "c"=>"Obeche");
$trees2 = array("d"=>"Iroko", "e"=>"Agony");
$result = array_intersect($trees1,$trees2);
print_r($result);

#This is array intersect assoc that check both the keys and values

$trees1 = array("a"=>"Iroko", "b"=>"Agony", "c"=>"Obeche");
$trees2 = array("a"=>"Iroko", "f"=>"Agony");
$result = array_intersect_assoc($trees1,$trees2);
print_r($result);

#This is array intersect key that check the keys

$trees1 = array("a"=>"mahagony", "b"=>"Agony", "c"=>"Obeche");
$trees2 = array("a"=>"Iroko", "b"=>"Agony");
$result = array_intersect_key($trees1,$trees2);
print_r($result);

# This is array check key
$s = array("Volvo"=>"360","Benz"=>"350");
    if (array_key_exists("Benz",$s)){
        echo "Key exist";
    }
    else{
        echo "Key does not exist";
    }

# This is array keys

$p = array("pet"=>"cat", "wild"=>"lion");
$result=array_keys($p);
print_r($result);

# This is when value matches the key

$p = array("pet"=>"cat", "wild"=>"lion");
$result=array_keys($p, "cat");
print_r($result);


# This is an array map
function Felix($num){
    return ($num * $num);
}
$d = array(1,2,3,4,5);
print_r(array_map("Felix", $d));

# Using array map to change the value of an array

function Get($t){
    if($t==="goat"){
        return "cow";
    }
    {
        return $t;
    }
}
$a = array("lion","goat","zebra");
print_r(array_map("Get",$a));

# Using two arrays in the array map

function Get($t1, $t2){
    if($t1===$t2){
        return "same";
    }
    {
        return "different";
    }
}
$a1 = array("lion","goat","zebra");
$a2 = array("lion","cat","zebra");
print_r(array_map("Get",$a1,$a2));


# Using strtoupper() to convert values to uppercase

function Animal($f){
    $f=strtoupper($f);
    return $f;
}

$a = array("Animal"=>"Horse", "Type"=>"Mammal");
print_r(array_map("Animal",$a));


# Assign mull as the function

$a1 = array("car","bike","aircraft");
$a2 = array("cat","goat","lion");
print_r(array_map(null,$a1,$a2));


# To merge two indexed arrays arrays into one

$a1 = array("felix","gozie","boss");
$a2 = array("gozmok","theo","mecon");
print_r(array_merge($a1,$a2));

# To merge two associative arrays into one

$a1 = array("a"=>"felix","b"=>"gozie");
$a2 = array("c"=>"gozmok","b"=>"theo");
print_r(array_merge($a1,$a2));

# array recursive
$a1 = array("a"=>"felix","b"=>"gozie");
$a2 = array("c"=>"gozmok","b"=>"theo");
print_r(array_merge_recursive($a1,$a2));

# array multisort
$a = array("goat","horse","man","cat");
array_multisort($a);
print_r($a);


# multisort two arrays
#due to cat & Missy were originally paired together, they will remain paired
$a1=array("Dog","Cat");
$a2=array("Fido","Missy");
array_multisort($a1,$a2);
print_r($a1);
print_r($a2);


#This is array pad

$d = array("yellow","green");
print_r(array_pad($d,6,"black"));


#It start from the padding color when you use a negative sign on the number

$d = array("yellow","green");
print_r(array_pad($d,-6,"black"));


# This is an array pop, to delete the last element of an array

$l = array("felix", "gozmok", "chigozie", "ezikiel");
array_pop($l);
print_r($l);


# This is an array product, to calculate and return the product of an array

$b = array(2,3);
print_r(array_product($b));
#you can also use echo instead of print_r function

#This is an array push, it adds new elements to the end of an array

$j = array("get", "go");
array_push($j,"come","take");
print_r($j);


#This is an array rand key that select random values each time you run the code

$h = array("nice", "great", "awsome", "good");
$random_keys=array_rand($h,3);

echo $h [$random_keys[0]]."<br>";
echo $h [$random_keys[1]]."<br>";
echo $h [$random_keys[2]];


#This is an array rand key that select random values each time you run the code

$n = array("a"=>"red", "b"=>"blue","c"=>"black");
print_r(array_rand($n,2));


#This is array replace where the first array is replaced by the second array

$a1 = array("red","blue","green");
$a2 = array("black","yellow","gray");
print_r(array_replace($a1,$a2));


# This is an array reverse

$k = array("a"=>"goat", "b"=>"lion", "c"=>"zebra");
print_r(array_reverse($k));


# This is an array search where it search for the value and return the key

$r = array("a"=>"red", "b"=>"blue", "c"=>"yellow");
print_r(array_search("blue",$r));


#this is array shift, to remove the first element from the array and return the removed element

$v = array("a"=>"red", "b"=>"blue", "c"=>"gray");
echo array_shift($v)."<br>";
print_r($v);


# This is array slice

$t = array("red", "blue", "black", "green", "yellow");
print_r(array_slice($t,1));


# Here, the slice started from index 1 and stopped at index 3


$t = array("red", "blue", "black", "green", "yellow");
print_r(array_slice($t,1,3));


# we used a negative - start parameter here

$t = array("red", "blue", "black", "green", "yellow");
print_r(array_slice($t,-2,2));


# This is array splice where you can replace some of the values of $a1 with some of values of $a2

$a1 =array("a"=>"red", "b"=>"blue", "c"=>"yellow", "d"=>"green");
$a2 = array("b"=>"gray", "c"=>"black");
array_splice($a1,1,2,$a2);
print_r($a1);


#This is array sum

$a1 = array(2,2);
print_r(array_sum($a1));


# This is array_udiff that compares two arrays

function compare($a,$b)
{
    if ($a === $b)
        return 0;
    {
        return($a>$b)? 1:-1;
    }
}

$a1 = array("a"=>"red", "b"=>"white", "c"=>"yellow");
$a2 = array("a"=>"red", "b"=>"black", "d"=>"gray");

$result = array_udiff($a1, $a2, "compare");
print_r($result);


function values($k,$c)
{
    if($k === $c)
    return 0;
{
    return ($k > $c)? 1:-1;
}
}

$e = array("a"=>"red", "b"=>"blue", "c"=>"silver");
$h = array("e"=>"RED", "j"=>"blue", "w"=>"yellow");
$u = array("p"=>"gray", "l"=>"blue", "t"=>"yellow");

$result = array_udiff($e,$h,$u, "values");
print_r($result);


# This is array_udiff_assoc that compare both the values and the keys 

function keys($g,$n){
    if($g === $n)
    return 0;
{
    return($g>$n)? 1:-1;
}
}

$v = array("a"=>"great","b"=>"good","c"=>"nice");
$l = array("g"=>"get","b"=>"good","h"=>"nice");
$x = array("a"=>"great","b"=>"good","h"=>"nice");

$result = array_udiff_assoc($v,$l,$x, "keys");
print_r($result);


# Using two functions to compare array using array_udiff_uassoc

function myfunction_key($a,$b){
    if($a === $b){
    return 0;
}
    return($a>$b)? 1:-1;
}
function myfunction_value($a,$b){
    if($a === $b){
    return 0;
}
    return($a>$b)? 1:-1; 
}

$a1 = array("a"=>"udoji","b"=>"emeka","c"=>"theo");
$a2 = array("a"=>"mok","b"=>"emeka","c"=>"theo");
$result = array_udiff_uassoc($a1,$a2, "myfunction_key","myfunction_value");
print_r($result);


# this is array uintersect

function myFunction($s,$p){
    if($s === $p){
    return 0;
    }
    return ($s>$p)? 1:-1;
}

$r = array("a"=>"red","b"=>"blue","c"=>"green");
$u = array("a"=>"red","b"=>"gray","c"=>"black");
$result = array_uintersect($r,$u,"myFunction");
print_r($result);


# This is array unique
#Remove duplicate values from the array

$a1 = array("a"=>"bed","b"=>"bet","c"=>"bed","d"=>"bit");
print_r(array_unique($a1));


# This is an array unshift
# insert the element gray in an array

$w = array("a"=>"red","b"=>"blue","c"=>"yellow");
array_unshift($w,"gray");
print_r($w);
 

$w = array(0=>"red",1=>"blue",2=>"yellow");
array_unshift($w,"gray");
print_r($w);


#This is array values where all the values will be returned and not the keys
$k = array("Name"=>"felix","ben"=>"gozie","41"=>"emeka");
print_r(array_values($k));

# This is an array walk
function myFunction($value,$key)
{
    echo "The key $key has the value $value<br>";
}
$a = array("a"=>"red", "b"=>"blue", "c"=>"yellow");
array_walk($a, "myFunction");


#This is arsort
# sort an associative array in descending order based on their values

$age = array("a"=>"20","b"=>"25","c"=>"30");
arsort($age);

# This is a compact() of an array
$firstname = "gozie";
$lastname = "emeka";
$age = "20";

$result = compact("firstname","lastname","age");
print_r($result);

#This is count() that returns the number of elements in an array

$a = array("car","bike","name");
print_r(count($a));


$cars = array
(
    "volvo"=> array
    (
        "xlc","blc"
    ),
    "bmw"=> array
    (
        "rcl","hcl"
    ),
    "toyota"=> array
    (
        "kdl",
    )
);

print_r(count($cars));
echo "<br>";
print_r(count($cars,1));

#current() returns the first element in an array

$a = array("felix","peter","alex","bright");
echo current($a) . "<br>";
echo next($a) . "<br>";
echo prev($a) . "<br>";
echo end($a) . "<br>";

# This is in_array
# search for the value "mok" in an array and output some text

$a = array("mok","udoji","emeka","chidi");
if(in_array("mok",$a)){
    echo "match found";
}
else{
    echo "match not found";
}

# returning array key using the function key()
$a = array("big","bigger","biggest");
echo "The key from the current position is " . key($a);

# This is a list function list()

$g = array("Cow","Goat","Pig");
list($a,$b,$c) = $g;
echo "I have several animals, a $a, a $b, a $c";

# This is a range function range()
# create an array containing a range of elements from 0 to 10

$a = range(0,10);
print_r($a);

# from 0 to 50, increament by 10
$a = range(0,50,10);
print_r($a);

# using letters, from a to d
$a = range("a","d");
print_r($a);

#This is a shuffle function shuffle(), that rearranges the elements of the arrays anytime one run the script

$c = array("red","blue","yellow","black");
shuffle($c);
print_r($c);


class car{
    public $name;
    public $color;

    function set_name($name){
        $this-> name = $name;
    }
    function get_name(){
      return $this-> name;
    }
}

$toyota = new car();
$camry = new car();
$toyota-> set_name("toyota");
$camry-> set_name("camry");

echo $toyota->get_name();
echo "<br>";
echo $camry->get_name();


class fruit{
    public $name;
    public $color;

    function set_name($name){
        $this-> name = $name;
    }
    function get_name(){
      return $this-> name;
    }
    function set_color($color){
        $this-> color = $color;
    }
    function get_color(){
        return $this-> color;
    }
}

$mango = new fruit();
$mango-> set_name("Mango");
$mango-> set_color("Blue");

echo "Name:" .$mango->get_name();
echo "<br>";
echo "Color:" .$mango->get_color();

# Changing the value of the $name property inside the class
class fruit{
    public $name;
    function set_name($name){
        $this->name = $name;
    }
}

$apple = new fruit();
$apple->set_name("Apple");
echo $apple-> name;

# Changing the value of the $name property directly outside the class

class fruit{
    public $name;
    
}

$apple = new fruit();
$apple->name="Apple";
echo $apple-> name;

# instanceof keyword to check if an object belongs to a particular class

class fruit{
    public $name;
    public $color;
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this-> name;
    }
}

$apple = new fruit();
    var_dump($apple instanceof fruit);



# Using a __construct functio __construct()

class fruit{
    public $name;
    public $color;

    function __construct($name)
    {
        $this-> name = $name;
    }
    function get_name(){
        return $this-> name;
    }
}

$apple = new fruit("Apple");
echo $apple-> get_name();


class fruit{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this-> name = $name;
        $this-> color = $color;
    }
    function get_name(){
        return $this-> name;
    }
    function get_color(){
        return $this-> color;
    }
}

$apple = new fruit("Apple","gray");
echo $apple-> get_name();
echo "<br>";
echo $apple-> get_color();


# Using a destruct function destruct()

class fruit{
    public $name;
    public $color;

    function __construct($name)
    {
        $this-> name = $name;
    }
    function __destruct(){
       echo "The fruit is {$this-> name}.";
    }
}
$apple = new fruit("Apple");

#To echo both the fruit and the color

class fruit{
    public $name;
    public $color;

    function __construct($name,$color)
    {
        $this-> name = $name;
        $this-> color = $color;
    }
    function __destruct(){
       echo "The fruit is {$this-> name} and the color is {$this-> color} .";
    }
}
$apple = new fruit("Apple","Blue");


class fruit{
    public $name;
    public $color;

    public function __construct($name,$color){
        $this-> name = $name;
        $this-> color = $color;
    }
    public function intro(){
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

class strawberry extends fruit{
    public function message(){
        echo "Am i a fruit or a berry?";
    }
}

$starwberry = new strawberry("strawberry", "black");
$starwberry->message();
$starwberry->intro();

#Protected functon display an error when called outside the class

class fruit{
    public $name;
    public $color;

    public function __construct($name,$color){
        $this-> name = $name;
        $this-> color = $color;
    }
    protected function intro(){
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

class strawberry extends fruit{
    public function message(){
        echo "Am i a fruit or a berry?";
    }
}

$starwberry = new strawberry("strawberry", "black");
$starwberry->message();
$starwberry->intro();

#call it from within derived class

class fruit{
    public $name;
    public $color;

    public function __construct($name,$color){
        $this-> name = $name;
        $this-> color = $color;
    }
    protected function intro(){
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

class strawberry extends fruit{
    public function message(){
        echo "Am i a fruit or a berry?";
        $this-> intro();
    }
}

$starwberry = new strawberry("strawberry", "black");
$starwberry->message();


# This is class constant accessed from outside the class

class goodbye{
    const CLICK_HERE = "Hello! welcome to the new page!";
}
echo goodbye::CLICK_HERE;

# This is class constant accessed from inside the class

class goodbye{
    const CLICK_HERE = "Hello! welcome to the new page!";
    public functioN byebye(){
        echo self::CLICK_HERE;
    }
}
$goodbye = new goodbye();
$goodbye->byebye();

#Abstract classes

abstract class car{
    public $name;
    public function __construct($name)
    {
        $this-> name = $name;
    }
    abstract public function intro() :string;
}

class Camry extends car{
    public function intro() :string{
        return "Choose German quality! i am a {$this->name}!";
    }
}

class Volvo extends car{
    public function intro() :string{
        return "Proud to be swedish! i am a {$this->name}!";
    }
}

class Toyota extends car{
    public function intro() :string{
        return "Choose french! i am {$this->name}!";
    }
}

$camry = new camry("camry");
echo $camry->intro();
echo "<br>";

$volvo = new volvo("volvo");
echo $volvo->intro();
echo "<br>";

$toyota = new toyota("toyota");
echo $toyota->intro();

# this is interface

interface Car{
    public function makeSound();
}

class toyota implements Car{
    public function makeSound(){
        echo "Vuuuuuum";
    }
}

$Car = new toyota();
$Car->makeSound();

#Let's then write a software that manages different kinds of animals

interface Animal{
    public function makeSound();
}

class cat implements Animal{
    public function makeSound(){
        echo "Meow!";
    }
}
class dog implements Animal{
    public function makeSound(){
        echo "Bark!";
    }
}
class lion implements Animal{
    public function makeSound(){
        echo "Roar!";
    }
}

$Animal = new cat();
$Animal->makeSound();
echo "<br>";
$Animal = new dog();
$Animal->makeSound();
echo "<br>";
$Animal = new lion();
$Animal->makeSound();


# This is trait

trait message{
    public function msg(){
        echo "I am coming";
    }
}

class wlc{
    use message;
}

$obj = new wlc();
$obj->msg();


# Using multiple traits

trait message1{
    public function msg1(){
        echo "I am coming";
    }
}
trait message2{
    public function msg2(){
        echo "Hello, i am here";
    }
}

class wlc1{
    use message1;
}
class wlc2{
    use message2;
}

$obj = new wlc1();
$obj->msg1();
echo "<br>";
$obj = new wlc2();
$obj->msg2();


# This is a static function 

class greeting{
    public static function greet(){
        echo "Good morning sir!";
    }
}

greeting::greet();


#Static properties

class names{
    public static $mok = "How old are you?";
}
echo names::$mok;
*/
class fruit{
    public $name;
    public $color;

    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
       return $this->name;
    }
}

$mango = new fruit();
$berry = new fruit();
$mango->set_name('mango');
$berry->set_name('berry');

echo $mango->get_name();
echo "<br>";
echo $berry->get_name();