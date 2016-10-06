<?php
namespace Craft;

class Helpers_MiscService extends BaseApplicationComponent
{
    // Public Methods
    // =========================================================================

    /**
     * Decodes a JSON string.
     *
     * @param string $value
     * @param bool $assoc
     * @param int $depth
     * @param int $options
     *
     * @return array
     */
    public function jsonDecode($value, $assoc = false, $depth = 512, $options = 0)
    {
        return json_decode(html_entity_decode($value), $assoc, $depth, $options);
    }

    /**
     * Generates a random string of a given length.
     *
     * @param int  $length
     * @param bool $extendedChars
     *
     * @return string
     */
    public function randomString($length = 36, $extendedChars = false)
    {
        return StringHelper::randomString($length, $extendedChars);
    }

    /**
     * Returns the md5 hash of a string.
     *
     * @param string $value
     *
     * @return string
     */
    public function md5($value)
    {
        return md5($value);
    }
    
    /**
     * intersects 2 arrays.
     *
     * @param array $values
     * @param array $order
     *
     * @return string
     */
    public function intersect($values, $order)
    {
	    $results = [];
	    foreach($order as $key){
		    if(array_key_exists($key, $values)){
			    $results[$key] = $values[$key];
		    }
	    }
	    return $results;
    }
}
