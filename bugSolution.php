The solution involves correctly identifying the type of array (numeric or associative) and then using the appropriate method of accessing elements. 

```php
<?php
// Numeric array
$numericArray = [10, 20, 30];
echo $numericArray[0]; // Accessing using integer index

// Associative array
$associativeArray = ['a' => 10, 'b' => 20, 'c' => 30];
echo $associativeArray['a']; // Accessing using string key

//Checking if key exists before access to prevent notices
$key = 'd';
if(isset($associativeArray[$key])){
  echo $associativeArray[$key];
}else{
  echo "Key does not exist";
}
?>
```