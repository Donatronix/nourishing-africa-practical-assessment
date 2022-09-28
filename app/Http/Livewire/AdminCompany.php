<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Traits\TableRowsTrait;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

/**
 * Class AdminCompany livewire component.
 *
 * @package namespace App\Http\Livewire;
 */
class AdminCompany extends Component
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
        if ($this->search_param !== "") {
            $result = User::query()
                ->where('name', 'like', '%' . $this->search_param . '%')
                ->orWhere('email', 'like', '%' . $this->search_param . '%')
                ->orWhereHas('companies', function ($query) {
                    $query->where('name', 'like', '%' . $this->search_param . '%')
                        ->orWhere('email', 'like', '%' . $this->search_param . '%')
                        ->orWhere('location', 'like', '%' . $this->search_param . '%')
                        ->orWhere('country', 'like', '%' . $this->search_param . '%');
                });
        } else {
            $result = User::query();
        }
        $users = $result->whereNotIn('type', ['admin'])->orderBy('created_at', 'desc')->paginate($this->perPage);

        return view('livewire.admin-company', ['users' => $users]);
    }
}
