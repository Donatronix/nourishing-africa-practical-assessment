<?php

declare(strict_types=1);

namespace App\Services\Country;

use App\Repositories\Interfaces\CountryRepository;
use App\Services\BaseService;
use App\Services\Contracts\CountryContract;
use App\Validators\CountryValidator;

class CountryService extends BaseService implements CountryContract
{
    public CountryRepository $repository;

    public CountryValidator $validator;

    /**
     * CountryService constructor.
     */
    public function __construct(CountryRepository $repository, CountryValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function getRepository(): CountryRepository
    {
        return $this->repository;
    }

    public function getValidator(): CountryValidator
    {
        return $this->validator;
    }
}
