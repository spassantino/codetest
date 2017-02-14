<?php
	/**
	* this function must return equilibrium indices of a (maybe very long) given sequence
	*/
function getEquilibriums($arr) {
	/* store count of elements in the given array */
	$numElements = count($arr);
	/* declare variable to start at zero sum for lower portion of the given array */
	$left = 0;
	/* declare variable to store total sum of array values to upper portion of the given array */
	$right = array_sum($arr);
	/* declare variable to store equilibrium indices which will eventually be returned */
	$output = array();
	 /**
	 * for loop iterates over number of elements in array to checking
	 * if sum of lower part of $arr[i] equals to sum of upper portion.
	 */
	for ($i = 0; $i < $numElements; $i++) {
		/* subtract value of current index in array from right sum */
		$right -= $arr[$i];
		/* if left==right store the index in to output[] */
		if ($left == $right) $output[] = $i;
		/* add value of current index in array to left sum */
		$left += $arr[$i];
	}
/* once for loop has iterated over each element, return array of equilibrium indices */
	return $output;
}
/**
* test case $arr = array(-7, 1, 5, 2, -4, 3, 0);  getEquilibriums($arr);
* returns equilirium indices (3,6) because
* $arr[0]+$arr[1]+$arr[3]=$arr[4]+$arr[5]+$arr[6] and
* $arr[0]+$arr[1]+$arr[2]+$arr[3]+$arr[4]+$arr[5]=$arr[6]
*/
