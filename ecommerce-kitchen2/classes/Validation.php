<?php
class Validation
{
    private $errors = [];
    public function validate($data, $rules)
    {
        foreach ($rules as $key => $rule) {
            $value = $data[$key];
            $rules = explode('|', $rule);
            foreach ($rules as $rule) {
                if ($rule == 'required') {
                    if (empty($value)) {
                        $this->errors[$key][] = 'The ' . $key . ' field is required';
                    }
                } elseif (strpos($rule, 'min') !== false) {
                    $min = explode(':', $rule)[1];
                    if (strlen($value) < $min) {
                        $this->errors[$key][] = 'The ' . $key . ' field must be at least ' . $min . ' characters';
                    }
                } elseif (strpos($rule, 'max') !== false) {
                    $max = explode(':', $rule)[1];
                    if (strlen($value) > $max) {
                        $this->errors[$key][] = 'The ' . $key . ' field may not be greater than ' . $max . ' characters';
                    }
                } elseif ($rule == 'numeric') {
                    if (!is_numeric($value)) {
                        $this->errors[$key][] = 'The ' . $key . ' field must be numeric';
                    }
                } elseif ($rule == 'email') {
                    if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                        $this->errors[$key][] = 'The ' . $key . ' field must be a valid email address';
                    }
                }
            }
        }
    }

    public function hasError()
    {
        return count($this->errors) > 0;
    }

    public function getErrorMessages()
    {
        return $this->errors;
    }

    public function getFirstErrorMessage()
    {
        return $this->errors[0];
    }
}
