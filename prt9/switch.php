<?php
$first = 10;
$second = 5;
$operator = "+"; 

switch ($operator) {
    case '+':
        echo "Sum: " . ($first + $second);
        break;
    case '-':
        echo "Difference: " . ($first - $second);
        break;
    case '*':
        echo "Product: " . ($first * $second);
        break;
    case '/':
        echo "Quotient: " . ($second != 0 ? ($first / $second) : "Division by zero");
        break;
    case '%':
        echo "Remainder: " . ($first % $second);
        break;
    default:
        echo "Invalid operator";
}
?>
