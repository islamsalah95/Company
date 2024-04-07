<?php

namespace App\Livewire\Company;

use App\Models\Company;
use Livewire\Component;

class CompanySelect extends Component
{

public $select;



    public function change()
    {
        session(['AuthCompanyId' => $this->select]);

        $this->dispatch('company-changed');

    }

    public function render()
    {

        return view('livewire.company.company-select',['companies'=>Company::all()]);
    }
}
