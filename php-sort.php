<?php
/**
 * Instructions:
 *
 * Given the above JSON, build a simple PHP script to import it.
 *
 * Your script should create two variables:
 *
 * - a comma-separated list of email addresses
 * - the original data, sorted by age descending, with a new field on each record
 *   called "name" which is the first and last name joined.
 *
 */


include_once('./my-class.php');
$people = '{"data":[{"first_name":"cassie","last_name":"zieme","age":32,"email":"marks.giuseppe@mcglynn.com","secret":"VXNlIHRoaXMgc2VjcmV0IHBocmFzZSBzb21ld2hlcmUgaW4geW91ciBjb2RlJ3MgY29tbWVudHM="},{"first_name":"merritt","last_name":"paucek","age":37,"email":"pvandervort@mante.or","secret":"YWxidXF1ZXJxdWUuIHNub3JrZWwu"},{"first_name":"linda","last_name":"waelchi","age":29,"email":"sheridan36@example.com","secret":"YWxidXF1ZXJxdWUuIHNub3JrZWwu"}]}';
$asData = json_decode($people, true);

$objArrayOP = new MyClass();
$result1 = $objArrayOP->implodeEmail($asData['data']);
echo 'Result 1 is '.$result1.'<br/>';

$result2 = $objArrayOP->sortArrayByAgeDesc($asData['data'], 'age');
echo 'Result 2 is '.'</br>';
print_r($result2); exit;
