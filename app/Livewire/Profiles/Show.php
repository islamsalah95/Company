<?php

namespace App\Livewire\Profiles;

use Livewire\Component;
use App\Models\Contract;
use App\Services\ShiftService;
use App\Services\ContractService;
use Illuminate\Support\Facades\Auth;

class Show extends Component
{

  public $authUser;

  public function createInstanceContractService()
  {
    return new ContractService(new Contract() );
  }

  public function createShiftService()
  {
      return  new ShiftService();
  }


    public function render()
    {

      $totalContractHours = $this->createShiftService()->totalContractHours(Auth::user());

        return view('livewire.profiles.show',[
          'contract'=>$this->createInstanceContractService()->userContract($this->authUser->id),
          'totalContractHours'=>$totalContractHours

        ]);
    }
}
