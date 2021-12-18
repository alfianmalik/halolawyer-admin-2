<?php

if (! function_exists('link_post_url')) {
    function link_post_url($model)
    {
        $plural = Str::plural(class_basename($model));

        return Str::kebab($plural);
    }
}

if(!function_exists('optionalGetValueOrValueIsEqual')) {
    /**
     * Return boolean if value is set, else return the value is equal as expected
     *
     * @param mixed $actual
     * @param null|string|array $value
     * @return mixed|boolean
     */
    function optionalGetValueOrValueIsEqual($actual, $expected) {
        if($expected) {
            if(is_array($expected)) {
                return in_array($actual, $expected);
            }

            return $actual === $expected;
        }

        return $actual;
    }
}