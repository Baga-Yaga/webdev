<?php
$nums = [5, 2, 9, 1, 7];

echo "Original: ";
print_r($nums);
echo "<br>";

// 1. count()
echo "Count: " . count($nums) . "<br>";

// 2. array_push()
array_push($nums, 10);
echo "After Push: ";
print_r($nums);
echo "<br>";

// 3. array_pop()
array_pop($nums);
echo "After Pop: ";
print_r($nums);
echo "<br>";

// 4. sort()
sort($nums);
echo "Sorted: ";
print_r($nums);
echo "<br>";

// 5. array_reverse()
$rev = array_reverse($nums);
echo "Reversed: ";
print_r($rev);
echo "<br>";

// 6. array_sum()
echo "Sum: " . array_sum($nums) . "<br>";

// 7. Merge
$more = [11, 12, 13]; 
$merged = array_merge($nums, $more);
echo "Merged: ";
print_r($merged);
echo "<br>";

// 9. array_slice()
$sliced = array_slice($nums, 1, 3);
echo "Sliced (1-3): ";
print_r($sliced);
echo "<br>";

// 10. array_unique()
$dupes = [1, 2, 2, 3, 3, 3];
$unique = array_unique($dupes);
echo "Unique: ";
print_r($unique);
?>
