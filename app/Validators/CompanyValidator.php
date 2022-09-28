<?php

namespace App\Validators;

use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\LaravelValidator;

/**
 * Class CompanyValidator.
 *
 * @package namespace App\Validators;
 */
class CompanyValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name' => ['required', 'string'],
            'user_id' => ['required', 'numeric', 'exists:users,id'],
            'email' => ['required', 'string', 'email', 'unique:companies,email'],
            'country' => ['required', 'string'],
            'location' => ['required', 'string'],
        ],
        ValidatorInterface::RULE_UPDATE => [
            'name' => ['required', 'string'],
            'country' => ['required', 'string'],
            'location' => ['required', 'string'],
        ],
    ];
}
