<?php
/**
 * Question: Write a program which compares two arrays and prints the values which are in 
 * one but not both arrays. For example given [1,2,3,4,5] and [1,2,3,0,5] the program would 
 * print “4” and “0”.
 * 
 * @param array $arr1
 * @param array $arr2
 * @return array
 * 
 * @access public
 */
function comparison($arr1, $arr2) 
{
    if(empty($arr1) || empty($arr2)){
        return;
    }

    //Merging both arrays, as arrays may have different lengths
    $newArr = array_merge($arr1, $arr2);
    //The array to save the difference
    $diffArr = array();
    
    for($i=0; $i<count($newArr); $i++){
        //checking for items that are available in $arr1 but not $arr2
        if(in_array($newArr[$i], $arr1) && !in_array($newArr[$i], $arr2)){
            array_push($diffArr, $newArr[$i]);
        }

        //Checking for variables that are available in $arr2 but not $arr1
        if(in_array($newArr[$i], $arr2) && !in_array($newArr[$i], $arr1)){
            array_push($diffArr, $newArr[$i]);
        }
    }

    //this can be returned in various formats
    print_r($diffArr);
}

//Testing
$arr1 = array(1,2,3,4,5);
$arr2 = array(6,7,2,0,5);

//calling the function
comparison($arr1, $arr2);