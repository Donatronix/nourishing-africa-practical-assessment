<?php

declare(strict_types=1);

namespace App\Services\Company;

use App\Repositories\Interfaces\CompanyRepository;
use App\Services\BaseService;
use App\Services\Contracts\CompanyContract;
use App\Validators\CompanyValidator;

/**
 *
 */
class CompanyService extends BaseService implements CompanyContract
{
    /**
     * @var CompanyRepository
     */
    public CompanyRepository $repository;

    /**
     * @var CompanyValidator
     */
    public CompanyValidator $validator;

    /**
     * CompanyService constructor.
     */
    public function __construct(CompanyRepository $repository, CompanyValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    /**
     * @return CompanyRepository
     */
    public function getRepository(): CompanyRepository
    {
        return $this->repository;
    }

    /**
     * @return CompanyValidator
     */
    public function getValidator(): CompanyValidator
    {
        return $this->validator;
    }

    /**
     * @param $id
     * @param $email
     *
     * @return bool
     */
    public function isEmailUsedByAnotherCompany($id, $email): bool
    {
        $company = $this->repository->findWhere(['email' => $email])->first();
        if ($company && $company->id !== $id) {
            return true;
        }
        return false;
    }
}
