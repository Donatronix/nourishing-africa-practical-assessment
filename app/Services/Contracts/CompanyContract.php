<?php

declare(strict_types=1);

namespace App\Services\Contracts;

interface CompanyContract
{
    /**
     * @param $id
     * @param $email
     *
     * @return bool
     */
    public function isEmailUsedByAnotherCompany($id, $email): bool;
}
