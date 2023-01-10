<?php

namespace App\Rules;

use Illuminate\Support\Facades\Validator;


class Validation
{
   public static function registerCustomRules(){

        /// Number validation
        Validator::extend('number', function ($attribute, $value, $parameters, $validator) {
            return is_numeric($value);
        });


   }
}
