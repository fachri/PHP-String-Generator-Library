<?php

/**
 * PHP String Generator Library
 *
 * @author      Imam Fachri Chairudin
 * @license     MIT License
 * @link        http://fachri.id
 * @editor      PhpStorm
 * @date        9/12/16
 * @time        10:53 AM
 */
class String_generator
{
    /**
     * This function will replace all non-alphanumeric characters into dot(.)
     * or you can change it with other character
     *
     * @param $input
     * @return mixed
     */
    public function replaceNonAlphaNumericChars($input)
    {
        return preg_replace("/[^A-Za-z0-9]/", '.', $input);
    }
}