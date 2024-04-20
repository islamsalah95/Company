<?php

namespace App\Livewire\Chat;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Services\MessageService;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreMessageRequest;

class History extends Component
{



    public $contact;
    public $myMessage;
    public $file;
    #[On('company-changed')]
    #[On('choese-contact')]
    public function createInstanceMessageService()
    {
            return new MessageService( );

    }




    public function getMessages()
    {
        if (session()->has('cat_with')) {
            $this->contact=session('cat_with')['id'];
            return  $this->createInstanceMessageService()->messages(Auth::user()->id,$this->contact);
           }else{
            return  [];
            }

    }

    public function render()
    {



        return view('livewire.chat.history',[
            'messages'=>$this-> getMessages()
        ]);
    }
}
