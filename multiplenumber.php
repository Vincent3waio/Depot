function fizzBuzz(int $number): int | string {
    if($number % 3 === 0 && $number % 5 === 0){
        return 'FizzBuzz';
        
    }
    if($number % 3 === 0){
        
        return 'Fizz';
    }
    
    if($number % 5 === 0){
        return 'Buzz';
    }
    if($number % 3 !== 0 && $number % 5 !== 0) {
        return $number;
    }
}

$result = fizzBuzz(9);
var_dump($result === 'Fizz');

$result = fizzBuzz(25);
var_dump($result === 'Buzz');

$result = fizzBuzz(15);
var_dump($result === 'FizzBuzz');

$result = fizzBuzz(1);
var_dump($result === 1);
