<?php
/*Coding Challenge

1. Write a PHP program to check if a given positive integer is a power of two.
Input : 4
Output :4 is power of 2*/


function power_Of_Two($num){
/*This will compare the number input to the number subtracted by one. The binary form of these numbers will not have digits in common*/
   if(($num & ($num - 1)) == 0){
 	return "$num is power of 2";
    }
   else{
	return "$num is not power of 2";
    }
}
print_r(power_Of_Two(4)."\n");

/*2. Write a PHP program to check if a given positive integer is a power of three.
Input : 9
Output : 9 is power of 3
*/


function power_Of_Three($num)
{
      $x = $num;
/*The number will only stay in the while loop if it is a multiple of 3 and it'll divide by 3 to see if it is a power. A None power will result in a different number 21 -> 7*/
      while ($x % 3 == 0) {
      $x /= 3;
     }

	if($x == 1){
		return "$num is power of 3";
    }
    else{
		return "$num is not power of 3";
    }

}
print_r(power_Of_Three(9)."\n");




/*3. Write a PHP program to check if a given positive integer is a power of four.
Input : 4
Output : 4 is power of 4
*/


function power_Of_Four($num){
/*The number will only stay in the while loop if it is a multiple of 4 and it'll divide by 4 to see if it is a power. A None power will result in a different number 24 -> 6*/
      $x = $num;
      while ($x % 4 == 0) {
      $x /= 4;
     }

	if($x == 1){
		return "$num is power of 4";
    }
    else{
		return "$num is not power of 4";
    }

}
print_r(power_Of_Four(4)."\n");




/*4. Write a PHP program to check if an integer is the power of another integer.
Input : 16, 2
Output : 16 is power of 2
Example: For x = 16 and y = 2 the answer is "true", and for x = 12 and y = 2 "false"
*/


function is_Power($x, $y)
{
/*The number will only stay in the while loop if it is a multiple of the second number and it'll divide by the second number to see if it is a power of it. */
      $r = $x;
      $a = $y;
      while ($x % $y == 0) {
       $x = $x / $y;
     }

	if($x == 1){
		return "$r is power of $a";
    }
    else{
		return "$r is not power of $a";
    }

}
print_r(is_Power(16,2)."\n");


/*5. Write a PHP program to find a missing number(s) from an array.
Input : 1,2,3,6,7,8
Output : Array
(
[3] => 4
[4] => 5
)*/


function missing_Num($num_list){
// Making a new array, to populate with numbers corresponding to the position
 $new_list = range($num_list[0],max($num_list));
// use array_diff function to find the missing elements in the given list.
 return array_diff($new_list, $num_list);
}
print_r(missing_Num(array(1,2,3,6,7,8)));


/*6. Write a PHP program to find three numbers from an array such that the sum of three consecutive numbers equal to zero.
Input : (-1,0,1,2,-1,-4)
Output : Array
(
[0] => -1 + 0 + 1 = 0
)*/


function three_Sum($arr){
$count = count($arr) - 2;
$result=[];
/*The loop below will check every digits and the two following to see if they can be added up to make 0. Then once those values are found, (if they are found) they will be returned by the function*/
for ($x = 0; $x < $count; $x++) {
    if ($arr[$x] + $arr[$x+1] + $arr[$x+2] == 0) {
        array_push($result, "{$arr[$x]} + {$arr[$x+1]} + {$arr[$x+2]} = 0");
    }
}
return $result;
}
$my_array = array(-1,0,1,2,-1,-4);
print_r(three_Sum(my_array));


/* 7. Write a PHP program to find three numbers from an array such that the sum of three consecutive numbers equal to a given number.
Input : (array(2, 7, 7, 1, 8, 2, 7, 8, 7), 16))
Output : Array
(
[0] => 2 + 7 + 7 = 16
[1] => 7 + 1 + 8 = 16
)*/

function three_cons($arr, $key){
$count = count($arr) - 2;
$result=[];
for ($x = 0; $x < $count; $x++) {
    if ($arr[$x] + $arr[$x+1] + $arr[$x+2] == $key) {
        array_push($result, "{$arr[$x]} + {$arr[$x+1]} + {$arr[$x+2]} = $key");
    }
}
return $result;
}
$my_array = array(2, 7, 7, 1, 8, 2, 7, 8, 7);
print_r(three_Sum($my_array, 16));


/*8. Write a PHP program to compute and return the square root of a given number.
Input : 16
Output : 4 */


function sqrt_of($num){
  $x = $num;
  $y = 1;
  while($x > $y)
  {
    $x = ($x + $y)/2;
    $y = $num/$x;
  }
  return $x;
}
print_r(sqrt_of(16)."\n");


/*9. Write a PHP program to find a single number in an array that doesn't occur twice.
Input : array(5, 3, 4, 3, 4)
Output : Array
(
[0] => 5
[1] => 3
[2] => 4
[3] => 3
[4] => 4
)
Single Number: 5*/


function no_dupli($arr)
{

    $result = $arr[0];

    for($i=1;$i<sizeof($arr);$i++)
    {
        $result = $result ^ $arr[$i];
    }
 return $result;

}
$arr1 = array(5, 3, 4, 3, 4);
print_r($arr1);
print_r('Single Number: '.no_dupli($arr1)."\n");


/*10. Write a PHP program to find the single element in an array where every element appears three times except for one.
Input : array(5, 3, 4, 3, 5, 5, 3)
Output : Array
(
[0] => 5
[1] => 3
[2] => 4
[3] => 3
[4] => 5
[5] => 5
[6] => 3
)
Single Number: 4*/


function single_number($arr){
   $ones = 0;
   $twos = 0;
   $common_one_two = 0;
       for($i=0; $i<sizeof($arr); $i++){
           $twos  = $twos | ($ones & $arr[$i]);

            $ones  = $ones ^ $arr[$i];
             $common_one_two = ~($ones & $twos);
             $ones &= $common_one_two;
             $twos &= $common_one_two;
       }
     return $ones;
}
$arr1 = array(5, 3, 4, 3, 5, 5, 3);
print_r($arr1);
print_r('Single Number: '.single_number($arr1)."\n");


/*11. Write a PHP program to find the single element appears once in an array where every element appears twice except for one.
Input : array(5, 3, 0, 3, 0, 5, 7, 7, 9)
Output : 9*/


function single_num($arr){
  $result = 0;

       for($i=0; $i<sizeof($arr); $i++){
          $result =  $result ^ $arr[$i];

       }
    return $result;
}
$arr1 = array(5, 3, 0, 3, 0, 5, 7, 7, 9);
print_r(single_num($arr1)."\n");


/*12. Write a PHP program to add the digits of a positive integer repeatedly until the result has a single digit.
For example given number is 59, the result will be 5.
Input : 48
Output : 3
Step 1: 5 + 9 = 14
Step 1: 1 + 4 = 5
*/


function digit_add($num){
  if($num > 0)
    return (($num -1) % 9 + 1);
  else
    return 0;
}

print_r(digit_add(59)."\n");
/*13. Write a PHP program to reverse the digits of an integer.
Sample :
x = 234, return 432
x = -234, return -432*/

function int_rev($n){
    $rev = 0;
    while ($n > 0){
        $rev = $rev * 10;
        $rev = $rev + $n % 10;
        $n = (int)($n/10);
      }
     return $rev;
}
print_r(int_rev(234). "\n");


/*14. Write a PHP program to reverse the bits of an integer (32 bits unsigned).

Input : 1234
Output: 1260388352
For example, 1234 represented in binary as 10011010010 and returns 1260388352 which represents in binary as 1001011001000000000000000000000.*/

function bin_rev($n){
    $result = 0;
    for($i= 0; $i<32; $i++){
            $result <<= 1;
            $result|= ($n & 1);
            $n >>= 1;
        }
        return $result;

}
print_r(bin_rev(1234)."\n");


/*15. Write a PHP program to check a sequence of numbers is an arithmetic progression or not.
In mathematics, an arithmetic progression or arithmetic sequence is a sequence of numbers such that the difference between the consecutive terms is constant.
Input : array(5, 7, 9, 11)
Output : An arithmetic sequence
For example, the sequence 5, 7, 9, 11, 13, 15 ... is an arithmetic progression with common difference of 2.*/

function arith_prog($arr){
   $diff = $arr[1] - $arr[0];
   for($index=0; $index<sizeof($arr)-1; $index++){
        if (($arr[$index + 1] - $arr[$index]) != $diff){

             return "Not an Arithmetic Sequence";
        }
    }
    return "An Arithmetic Sequence";
}
$my_arr1 = array(5, 7, 9, 11);

print_r(arith_prog($my_arr1)."\n");


/*16. Write a PHP program to check a sequence of numbers is a geometric progression or not.
Input : array(2, 6, 18, 54)
Output : Geometric sequence
In mathematics, a geometric progression or geometric sequence, is a sequence of numbers where each term after the first is found by multiplying the previous one by a fixed, non-zero number called the common ratio. For example, the sequence 2, 6, 18, 54, ... is a geometric progression with common ratio 3. Similarly, 10, 5, 2.5, 1.25, ... is a geometric sequence with common ratio 1/2.*/


function geo_prog($arr){
    if (sizeof($arr) <= 1)
        return True;
    $ratio = $arr[1]/$arr[0];

    for($i=1; $i<sizeof($arr); $i++){
        if (($arr[$i]/($arr[$i-1])) != $ratio){
            return "Not a Geometric Sequence";
        }
    }
  return "Geometric  Sequence";
}
$my_arr1 = array(2, 6, 18, 54);

print_r(geo_prog($my_arr1)."\n");


/*17. Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form.
Input : 13, 14
Output : 72
Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted.*/


function rev_sum($n1, $n2){
    return int_reve($n1) + int_reve($n2);
}

function int_reve($n){
    $rev = 0;
    while ($n > 0){
        $rev = $rev * 10;
        $rev = $rev + $n % 10;
        $n = (int)($n/10);
      }
     return $rev;
}
print_r(rev_sum(13, 14)."\n");



/*18. Write a PHP program to check whether a given number is an ugly number.
Input : 12
Output :12 is an Ugly number
Ugly numbers are positive numbers whose only prime factors are 2, 3 or 5. The sequence 1, 2, 3, 4, 5, 6, 8, 9, 10, 12, ...
shows the first 10 ugly numbers.
Note: 1 is typically treated as an ugly number.*/

function ugly($n){
     $z = $n;
     if ($n == 0){
            return "$num is not an Ugly number";
       }

       $x = array(2, 3, 5);
      foreach ($x as $i){
            while ($n % $i == 0){
                $n /= $i;
                 }
         }
     if ($n == 1){
            return "$z is an Ugly number";
         }
     else{
            return "$z is not an Ugly number";
         }

 }

print(ugly(12)."\n");


/*19. Write a PHP program to check if a given string is an anagram of another given string.
Input : ('anagram','nagaram')
Output : These two strings are anagram
According to Wikipedia, an anagram is direct word switch or word play, the result of rearranging the letters of a word or phrase to produce a new word or phrase, using all the original letters exactly once; for example, the word anagram can be rearranged into nag-a-ram.*/


function is_anagram($r, $a){
       if (count_chars($r, 1) == count_chars($a, 1)){
        return "This two strings are anagram";
    }
    else{
        return "This two strings are not anagram";
    }
 }

print_r(is_anagram('anagram','nagaram')."\n");



/*20. Write a PHP program to push all zeros to the end of a array.
Input : array(0,2,3,4,6,7,10)
Output : Array
(
[0] => 2
[1] => 3
[2] => 4
[3] => 6
[4] => 7
[5] => 10
[6] => 0
)*/


function zero_push($arr){
   $count = 0;
   $n = sizeof($arr);

    for ($i = 0; $i < $n; $i++){
        if ($arr[$i] != 0){
            $arr[$count++] = $arr[$i];
          }
     }

    while ($count < $n){
        $arr[$count++] = 0;
    }

    return $arr;
}
$num_list = array(0,2,3,4,6,7,10);
print_r(zero_push($num_list));



/*22. Write a PHP program to find majority element in an array.
Input : array(1, 2, 3, 4, 5, 5, 5, 5, 5, 5, 6)
Output : 5
Note: The majority element is the element that appears more than n/2 times where n is the number of elements in the array.
*/

function mode($arr){
        $idx = 0;
        $ctr = 1;

        for($i=1; $i < sizeof($arr); $i++){
            if ($arr[$idx] == $arr[$i]){
                $ctr += 1;
            }
            else{
                $ctr -= 1;
                if ($ctr == 0){
                    $idx = $i;
                    $ctr = 1;
                }
          }
        }
    return $arr[$idx];
}
$num = array(1, 2, 3, 4, 5, 5, 5, 5, 5, 5, 6);
print_r(mode($num)."\n");


/*23. Write a PHP program to find the length of the last word in a string.
Input : PHP Exercises
Output : 9
*/


function last_word($s){

        if (strlen(trim($s)) == 0){
            return "Blank String";
        }

        $words = explode(' ', $s);

        if (sizeof($words) >1)
           return strlen(substr($s, strrpos($s, ' ') + 1));
        else
           return "Single word";


}
print_r(last_word("PHP Exercises")."\n");


/*String/Array Challenge

1. Write a PHP script that checks if a string contains another string.
Sample string : 'The quick brown fox'
Expected Output : (1)
*/


function contain($word){
  if (strpos($a, word) !== false) {
    echo 'true';
   }
  else
    echo 'false';
}

printf(contain(fox)."\n");


/*2. Write a PHP script that removes the last word from a string.
Sample string : 'The quick brown fox'
Expected Output : The quick brown */


function remove_last($str){
 $revStr = strrev($str);
 $revStr = strstr($revStr," ");
 return $str = strrev($revStr);
}

$myStr = "The quick brown fox";
print_r(remove_last($myStr)."\n");


/*3. Write a PHP script that removes the whitespaces from a string.
Sample string : 'The quick " " brown fox'
Expected Output : Thequick""brownfox */


function no_space($str){
  return $string = str_replace(' ', '', $str);
}

print_r(no_space('The quick " " brown fox')."\n");


/*4. Write a PHP script to remove nonnumeric characters except comma and dot.
Sample string : '$123,34.00A'
Expected Output : 12,334.00  */


function num_only($str){
  return preg_replace("/[^0-9,.]/", "", $str);
}

$practice = "$123,34.00A";
print_r(num_only($practice));


/*5. Write a PHP script to remove new lines (characters) from a string.
Sample strings : "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
Expected Output : "Twinkle, twinkle, little star, How I wonder what you are. Up above the world so high, Like a diamond in the sky."*/


function sameline($str){
  return $trimmed = str_replace("\n", '', $str);
}

$myStr = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
print_r(sameline($myStr));


/*6. Write a PHP script to extract text (within parenthesis) from a string.
Sample strings : 'The quick brown [fox].'
Expected Output : 'fox'*/


function closed_text($str){
  preg_match('#\[(.*?)\]#', $str, $match);
  return $match[1];
}

$practice = "The quick brown [fox].";
print_r(closed_text($practice));


/*7. Write a PHP script to remove all characters from a string except a-z A-Z 0-9 or " ".
Sample string : abcde$ddfd @abcd )der]
Expected Result : abcdeddfd abcd der */


function char_remove($str){
   return preg_replace("/[^A-Za-z0-9 ]/", '', $str);

}

$practice = "abcde&ddfd @abcd )der]";
print_r(char_remove($practice));


/*Last 2 items:

1. Create a simple AMP(Apache Mysql and PHP) environment the deploys a "Hello World" project. The "Hello World" should be rendered using HTML echo statements and be in a separate function that gets called to render the message.
2. Take the LAMP Project and deposit it in git hub (Actually all items should be put in GitHub under one main repo)
3. Write a unit test using phpunit to check that Hello World is there
*/

?>
