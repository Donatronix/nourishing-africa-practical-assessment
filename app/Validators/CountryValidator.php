<?php

namespace App\Validators;

use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\LaravelValidator;

/**
 * Class CompanyValidator.
 *
 * @package namespace App\Validators;
 */
class CountryValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'code' => 'required|string',
            'name' => 'required|string',
            'd_code' => 'required|string',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'code' => 'required|string',
            'name' => 'required|string',
            'd_code' => 'required|string',
        ],
    ];
}
