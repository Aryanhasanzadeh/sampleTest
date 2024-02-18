<?php

namespace Modules\Ship\Parents\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

abstract class ParentRule implements ValidationRule
{
    /**
     * Run the validation rule.
     */
    abstract public function validate(string $attribute, mixed $value, Closure $fail): void;
}
