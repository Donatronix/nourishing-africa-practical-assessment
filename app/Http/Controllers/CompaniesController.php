<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyCreateRequest;
use App\Http\Requests\CompanyUpdateRequest;
use App\Services\Contracts\CompanyContract;
use App\Services\Contracts\CountryContract;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Exceptions\RepositoryException;
use Throwable;

/**
 * Class CompaniesController.
 *
 * @package namespace App\Http\Controllers;
 */
class CompaniesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     *
     * @return Application|Factory|View
     * @throws RepositoryException
     * @throws Exception
     */
    public function index(): View|Factory|Application
    {
        return view('companies.index');
    }

    /**
     * Show the form for creating the specified resource.
     *
     * @param CountryContract $country
     *
     * @return Application|Factory|View
     * @throws Exception
     */
    public function create(CountryContract $country): View|Factory|Application
    {
        $country->getRepository()->pushCriteria(app(RequestCriteria::class));
        $countries = $country->getRepository()->all();
        return view('companies.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CompanyContract      $service
     * @param CompanyCreateRequest $request
     *
     * @return RedirectResponse
     *
     */
    public function store(CompanyContract $service, CompanyCreateRequest $request): RedirectResponse
    {
        try {

            $company = $service->store(array_merge($request->all(), ['user_id' => Auth::id()]));

            $response = [
                'message' => 'Company added successfully.',
                'data' => $company->toArray(),
            ];

            return redirect()->route('welcome')->with('message', $response['message']);
        } catch (Throwable $e) {
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param CompanyContract $service
     * @param int             $id
     *
     * @return Application|Factory|View
     * @throws Exception
     */
    public function show(CompanyContract $service, int $id): View|Factory|Application
    {
        $company = $service->getRepository()->find($id);

        return view('companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CountryContract $country
     * @param CompanyContract $service
     * @param int             $id
     *
     * @return Application|Factory|View
     * @throws RepositoryException
     */
    public function edit(CountryContract $country, CompanyContract $service, int $id): Application|Factory|View
    {
        $company = $service->getRepository()->find($id);
        $country->getRepository()->pushCriteria(app(RequestCriteria::class));
        $countries = $country->getRepository()->all();
        return view('companies.edit', compact('company', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CompanyContract      $service
     * @param CompanyUpdateRequest $request
     * @param int                  $id
     *
     * @return RedirectResponse
     *
     */
    public function update(CompanyContract $service, CompanyUpdateRequest $request, int $id): RedirectResponse
    {
        try {

            //check if email is being used by another company
            if ($service->isEmailUsedByAnotherCompany($id, $request->email)) {
                return redirect()->back()->withErrors('Email is already being used by another company.')->withInput();
            }

            $company = $service->update($request->all(), $id);

            $response = [
                'message' => 'Company updated successfully!',
                'data' => $company->toArray(),
            ];
            return redirect()->route('welcome')->with('message', $response['message']);
        } catch (Throwable $e) {

            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param CompanyContract $service
     * @param int             $id
     *
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(CompanyContract $service, int $id)
    {
        try {
            $deleted = $service->getRepository()->delete($id);
            return redirect()->back()->with('message', 'Company deleted.');
        } catch (Throwable $e) {

            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }
}
