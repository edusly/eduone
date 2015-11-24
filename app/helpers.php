<?php

if ( ! function_exists( 'array_swap' ) )
{
	/**
	 * This function works like array_flip but allows users use values as array
	 * For example, 
	 * [ foo => ['bar', 'baz'] ]
	 * will becomes
	 * [
	 *   'bar' => 'foo',
	 *   'baz' => 'foo'
	 * ]
	 * 
	 * @param  Array $array Array to be swapped
	 * @return Array array output
	 */
	function array_swap( array $array )
	{
		$swapped = array();
		foreach ( $array as $key => $nested )
		{
			foreach ( (array) $nested as $index => $value )
			{
				$swapped[$value] = $key; 
			}
		}
		return $swapped;
	}
}

function array_flip_deep(array $array)
{
	$flipped = [];

	foreach ($array as $key => $value) {
		$flipped[$value][] = $key;
	}

	return $flipped;
}
