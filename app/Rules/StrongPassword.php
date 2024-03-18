<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class StrongPassword implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail) : void
    {
        if (strlen($value) > 8 && preg_match('/^(?=.*[a-z])(?=.*[@])/', $value))
        {
            $fail('The :attribute must be at least 8 characters and include at least one lowercase letter and one "@" symbol.');
        }
    }
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
//        dd(strlen($value) >= 8);
        // preg_match to check for at least one lowercase letter and one "@" symbol and no any number supported in password
        return preg_match('/^(?=.*[a-z])(?=.*[@])/', $value) && strlen($value) > 8;

    }

    /**
     * Get the validation error message.
     *
     * @param  string  $attribute
     * @return string
     */
    public function message()
    {
        return 'The :attribute must be at least 8 characters and include at least one lowercase letter and one "@" symbol.';    }
}
