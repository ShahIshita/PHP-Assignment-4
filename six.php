<?php

namespace solutions;

// Define the final class MathUtility
final class MathUtility
{
    // Static method for addition
    public static function add($a, $b)
    {
        return $a + $b;
    }

    // Static method for multiplication
    public static function multiply($a, $b)
    {
        return $a * $b;
    }
}

/*
class ExtendedMathUtility extends MathUtility
{
    // This class cannot extend MathUtility because MathUtility is declared as final
}
*/

$sum = MathUtility::add(5, 3);
$multiply = MathUtility::multiply(4, 6);

echo "Sum: $sum<br />";
echo "Multiply: $multiply<br />";

?>
