<?php
$user = [
    "name" => "Mustapha",
    "age" => 10,
    "address" => "Lagos Nigeria",
];

echo http_build_query($user);
//name=Mustapha&age=10&address=Lagos+Nigeria

?>


<?php
$count = 0;

function Counter(){
    global $count;
    $count += 1;
    return $count;
}

echo Counter();
echo Counter();
echo Counter();


function isValidPhone($phone){
    if(preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone)) {
        return 1;
    }
    return 0;
}
echo isValidPhone("727-999-0001"); // 1 
echo isValidPhone("727-9990001"); // 0



?>

<?php 

    $numbers = [ 73, 22, 19, 62, 14, 3, 96, 88, 17, 41, 44, 1, 4, 31, 30, 24, 108, 37 ];

    printEven($numbers);
    function printEven($numbers){
        $evenNumbers = extractEven($numbers);
        rsort($evenNumbers);
        foreach($evenNumbers as $number){
        echo "$number <br/>";
        }
    }

    function extractEven($numbers){
        $evenNumbers = []; 
        foreach($numbers as $number){
            if($number % 2 == 0){
                array_push($evenNumbers,$number);
            }
        }

        return $evenNumbers;
    }
?> 

<?php $foo = !!'foo'; var_dump($foo) ?>

<?php 
    class Foo { 
        public static $num_1 = 7; 
        public $num_2 = 4; 
        private $num_3 = 9; 
        
        public function getNum3() { return $this->num_3; } 

        public function sum(){
            return $this->num_2 + $this->getNum3() + self::$num_1;
        }
    
    }

echo (new Foo)->sum();
        
?>
