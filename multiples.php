<?php
/**
 * Question: Write a program that prints the numbers from 1 to 75. For multiples of three 
 * print “Hello” instead of the number, and for the multiples of five print “World”. 
 * For numbers which are multiples of both three and five print “HelloWorld”.
 * 
 * @param integer $num
 * @return string
 * 
 * @access public
 */
function multiples($num = 75)
{
    for ($i=1; $i<=$num; $i++){
        switch ($i) {
            case($i % 3 === 0 && $i % 5 !== 0):
                echo "Hello<br>";
                break;
            case ($i % 5 === 0 && $i % 3 !== 0):
                echo "World<br>";
                break;
            case ($i % 3 === 0 && $i % 5 === 0):
                echo "HelloWorld<br>";
                break;
            default:
                echo $i."<br>";
                break;
        }
    }
}

//calling the function
multiples();