<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;
use App\Services\ProjectService;
use Illuminate\Support\Facades\Auth;

class Show extends Component
{

    public $search;
    public $paginate=5;

   public function createInstanceProject()
   {
     return new ProjectService(new Project() );
   }

   public function projects()
   {
    return  $this->createInstanceProject()->projects($this->AuthCompanyId(),$this->search,$this->paginate);

   }

   public function AuthCompanyId()
   {
       if (session()->has('AuthCompanyId')) {
           return session('AuthCompanyId');
          }else{
           return Auth::user()->company_id;
           }

   }

   
   public function delete($project)
   {
    $this->createInstanceProject()->destroy($project['id']);
    session()->flash('message', 'project  successfully deleted.');
    $this->projects();
   }

    public function render()
    {
        
        
        return view('livewire.projects.show',['projects'=>$this->projects()]);
    }
}
