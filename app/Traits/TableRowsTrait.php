<?php

namespace App\Traits;

trait TableRowsTrait
{
    public $numberOfRows;

    public $perPage = 10;

    public function updatedNumberOfRows()
    {
        $this->perPage = $this->numberOfRows;
        $this->resetPage();
    }
}
