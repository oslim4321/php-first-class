 <?php

trait Message{
    function greet(){
        return 'hello world through trait';
    }
}

class Car {
    use Message;
}

$obj = new Car();
echo $obj->greet();

?> 

