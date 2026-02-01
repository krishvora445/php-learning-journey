<?php

namespace Core;

    class Validator
    {
        public static function string($value, $min = 1, $max = INF){

            $value = trim($value);

            return strlen($value) >= $min && strlen($value) <= $max;
            
        }   

        public static function email($value) {
            return filter_var($value, FILTER_VALIDATE_EMAIL);
        }
    }



    // class Validator
    // {
    //     protected array $data;
    //     protected array $errors = [];
    //     protected array $rules = [];

    //     public function __construct(array $data, array $rules)
    //     {
    //         $this->data = $data;
    //         $this->rules = $rules;
    //     }

    //     public function validate(): bool
    //     {
    //         foreach ($this->rules as $field => $rules) {
    //             $value = $this->data[$field] ?? null;

    //             foreach ($rules as $rule) {
    //                 if ($rule === 'required' && empty($value)) {
    //                     $this->errors[$field][] = 'This field is required.';
    //                 }

    //                 if ($rule === 'string' && !is_string($value)) {
    //                     $this->errors[$field][] = 'This field must be a string.';
    //                 }

    //                 if (str_starts_with($rule, 'max:')) {
    //                     $max = (int) explode(':', $rule)[1];
    //                     if (is_string($value) && strlen($value) > $max) {
    //                         $this->errors[$field][] = "This field must not exceed {$max} characters.";
    //                     }
    //                 }
    //             }
    //         }

    //         return empty($this->errors);
    //     }

    //     public function errors(): array
    //     {
    //         return $this->errors;
    //     }
    // }