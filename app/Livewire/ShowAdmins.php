<?php

namespace App\Livewire;
use App\Models\User;
use Livewire\Component;
use App\Services\UserService;
// use App\Traits\ExportPdfTrait;
use Livewire\Attributes\On;

class ShowAdmins extends Component
{

    public $search='';
    public $select=5;
    // #[On('company-changed')]


    public function createInstanceUserService()
    {
            return new UserService(new User );

    }

    public function admins()
    {

        return  $this->createInstanceUserService()->getUsersDepartmentSearch(1,$this->search,$this->select);

    }


    public function changeStatus(User  $user)
    {


        $this->createInstanceUserService()->block($user);

        session()->flash('message', 'Admin change Status updated.');

        $this->admins();
    }

    public function delete(User  $user)
    {


        $this->createInstanceUserService()->destroy($user);

        session()->flash('message', 'Admin deleted  success.');

        $this->admins();
    }

    public function exportPDF()
    {


    }


    public function render()
    {

        return view( 'livewire.show-admins' , ['admins'=> $this->admins()] );
    }
}
