<?php
//variable
$name = "Munna";
$age = 30;
$price = 60.30;
$pruductName= "Apple";

// echo "I am $name, age is $age, product price is $price";

//How to know variable type
// echo "\n";

/* echo "Name variable type is: ".gettype($name);
echo "\n";
echo "Age variable type is: ".gettype($age);
echo "\n";
echo "Price variable type is ".gettype($price);
echo "\n";
echo "productname variable type is ".gettype($pruductName); */


//variable access with function
function myName(){
    global $name, $age, $price;

    echo "My name is: ".$name;
    echo "\n"; 
    echo "My age is: ".$age;
    echo "\n";
    echo "Product price is: ".$price;
}

myName();

//constant
    //using define
    define("PI",3.1416);
    
    echo "\nPI value is: ".PI;
    define("WEBSITE_NAME","Chaldal");
    echo "\nWebsite name is ".WEBSITE_NAME;
    define("MY_AGE",30);
    echo "\n My AGE is ".MY_AGE;
    define("PRICE",40);
    echo "\nPrice ".PRICE;
    define("MY_NAME","Munna");
    echo "\n Name:".MY_NAME;

    echo "\nMy Age is ". MY_AGE;

    

    //cost in the class
    class Product{
        const PRICE = 60;
    }

    class Test{
        const WEEK = 7;
        const YEAR=12;
        const WORLD=1; 

    }

    echo "\n1 week is : ".Test::WEEK." days";
   // echo "\nProduct price is: ".Product:
   echo "\n 1 year is :".Test::YEAR ." months";
   echo "\n world is  :".Test:: WORLD;


   //comments
   //single line comment
   //ctrl + /

   //Multi line comment
   //Shift + Alt + A

    

































 
/* define("MY_NAME","Munna Ahmed");
define("MY_AGE",30);
define("PRODUCT_PRICE",70.30);

echo "My name is: ".MY_NAME; */