```php
function calculate_average(array $numbers): float {
  // Remove extra commas from the array
  $numbers = array_filter($numbers, function($value){ return $value !== null;});
  if (empty($numbers)) {
    return 0.0; // Handle empty array
  }

  $sum = array_sum($numbers);
  $count = count($numbers);
  return $sum / $count;
}

$numbers = [10, 20, 30, 0];
$average = calculate_average($numbers);
echo "Average: " . $average; // Output: Average: 15

$numbers2 = [10,20,30,0,];
$average2 = calculate_average($numbers2);
echo "Average: " . $average2;// Output: Average: 15

//Example of the bug
$numbers3 = [];
$average3 = calculate_average($numbers3);
echo "Average: " . $average3; // Output: Average: 0

//Example where the bug might not be seen
$numbers4 = [10,20,30];
$average4 = calculate_average($numbers4);
echo "Average: " . $average4;// Output: Average: 20
```