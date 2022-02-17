<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class Contacts extends Component
{
    public $name;
    public $email;
    public $mobile;
    public $isFriend;


    protected $rules = [
        'name' => 'required|min:10',
        'email' => 'required|email',
        'mobile' => 'required|min:10',
        'isFriend' => 'required',
    ];

    public function saveContact()
    {
        $validatedData = $this->validate();
 
        Contact::create($validatedData);

        session()->flash('message', 'Contact successfully created.');
    }

    public function render()
    {
        $contacts = Contact::all();
        return view('livewire.contacts', ['contacts' => $contacts]);
    }
}
