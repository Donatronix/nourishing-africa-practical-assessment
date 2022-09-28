<?php

namespace App\Http\Livewire;

use App\Models\Company;
use App\Traits\TableRowsTrait;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

/**
 * Class Companies component.
 *
 * @package namespace App\Http\Livewire;
 */
class Companies extends Component
{
    use WithPagination;
    use TableRowsTrait;

    protected string $paginationTheme = 'bootstrap';


    /**
     * @var string
     */
    public string $search_param = "";

    /**
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        $result = Company::query()->where(['user_id' => Auth::id()]);
        if ($this->search_param !== "") {
            $result = $result->where('name', 'like', '%' . $this->search_param . '%')
                ->orWhere('email', 'like', '%' . $this->search_param . '%')
                ->orWhere('location', 'like', '%' . $this->search_param . '%')
                ->orWhere('country', 'like', '%' . $this->search_param . '%');
        }
        $companies = $result->orderBy('created_at', 'desc')->paginate($this->perPage);
        return view('livewire.companies', ['companies' => $companies]);
    }
}
