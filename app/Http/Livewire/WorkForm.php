<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ContactsModel;

class WorkForm extends Component
{ 
        public $fullname;
        public $email;
        public $number;
        public $address;
        public $job_type;
  
        public function submit()
        {
            $data = $this->validate([
                'fullname' => 'required|min:6',
                'email' => 'required|email',
                'number' => 'required',
                'address' => 'required',
                'job_type' => 'required',
            ]);
  
        ContactsModel::create($data);
        session()->flash('message', 'Your request has been received ✓');
        return redirect()->to('/');
        //session()->flash('message', 'Request received.');
            // ->with->flash('message', 'Request received.');
        }

    
    public function render()
    {
        return view('livewire.work-form');
    }
}
