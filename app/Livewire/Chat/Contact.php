<?php

namespace App\Livewire\Chat;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;

class Contact extends Component
{

    public $search;



    #[On('company-changed')]

    public function createInstanceUserService()
    {
            return new UserService(new User );

    }

    public function employs()
    {

        return  $this->createInstanceUserService()->getUsersDepartmentWithoutPagination(3,$this->search);

    }

    public function choese($employ)
    {
       $this->dispatch('choese-contact');
       session()->put('cat_with',User::find($employ['id']));

    }

    public function render()
    {


        return view('livewire.chat.contact',[
            'employs'=>$this->employs()
        ]);
    }
}
