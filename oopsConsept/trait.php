<?php 

trait hello{
    function shayHello(){
        echo "Hello Everyone\n";
    }
}
trait hi{
    function shayHi(){
        echo "Hi Everyone\n";
    }
}
trait bye{
    function shayBye(){
        echo "Bye Everyone\n";
    }
}
class demo{
    function shayHello(){
        echo "Hello demo class";
    }
}

//trait methos overriding  = first priority of base class secound trait class last extend class
class base extends demo{
    use hello , hi;
    function shayHello(){
        echo "Hello base class";
    }
}




$text = new base();
$text->shayHello();
// $text->shayHi();
?>