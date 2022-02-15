<?php

namespace App\Requests;

use App\Libraries\Request;
use App\Libraries\Router;
use App\Libraries\View;

class UserRequest
{
    protected $validationError = false;

    protected $dataTypes = [
        'string',
        'integer',
        'float',
    ];

    protected $fieldTypes = [
        'email',
    ];

    public function __construct()
    {
        
    }

    /**
     * Define rules here
     */
    private function rules()
    {
        return [
            'first_name'    => 'required|string',
            'insertion'     => 'string',
            'last_name'     => 'required|string',
            'email'         => 'required|email',
            'city'          => 'string',
            'password'      => 'required'
        ];
    }

    /**
     * Validate data
     * @param $data (array) the data to validate
     * @return $validates (array) or die when errors where detected
     */
    public function validate($data) : array
    {
        if (!is_array($data)) {
            throw new \Exception('This function expects an array.');
        }

        $validated = [];

        foreach ($this->rules() as $key => $rule)
        {
            if (array_key_exists($key, $data)) {
                $expl = explode('|', $rule);

                foreach ($expl as $check)
                {
                    $check = trim(strtolower($check));
                    $functionName = 'is' . $check;
                    $val = $this->$functionName($data[$key]);

                    if ($val === false) {
                        $this->validationError = true;

                        if ($check == 'required') {
                            $validated[$key] = $key . ' is required';
                        } else if (in_array($check, $this->dataTypes)) {
                            $validated[$key] = $key . ' must be of type ' . $check;
                        } else if (in_array($check, $this->fieldTypes)) {
                            $validated[$key] = $key . ' not a valid ' . $check;
                        }

                        break;
                    } else {
                        $validated[$key] = $data[$key];
                    }
                }
            }
        }

        if ($this->validationError === true) {
            if (Request::ajax()) {
                die(json_encode($validated));
            } else {
                $this->prettyErrorList($validated);
            }
        }

        return $validated;
    }

    private function isString($value)
    {
        return !$this->isInteger($value);
    }

    private function isInteger($value)
    {
        return preg_match('/^\d+$/', $value);
    }

    private function isEmail($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    private function isRequired($value)
    {
        return strlen(trim($value)) > 0;
    }

    private function prettyErrorList($data)
    {
        $html = '<section>';

        $html .= '<div class="row"><div class="col-12"><strong>Error on validating data</strong></div></div>';

        foreach ($data as $value)
        {
            $html .= '<div class="row"><div class="col-12">' . ' ' . $value . '</div></div>';
        }

        $html .= 'Click <a href="' . $_SERVER['HTTP_REFERER'] . '" class="error-href"> here</a> to return to page.';

        $html .= '</section>';

        die($html);
    }
}