<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Component;
use App\Models\Contact;

class Contactform extends Component
{
    #[Rule('required')]
    public string $name = '';

    #[Rule('required')]
    public string $email = '';

    #[Rule('required')]
    public string $subject = '';

    #[Rule('required')]
    public string $message = '';

    public string $messageText = '';

    public function updated($key, $value): void
    {
        $this->validateOnly($key);
    }

    public function save()
    {
        //dd($this->name);
        $this->validate();

        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

        $this->messageText = 'Pesan anda telah terkirim';
        $this->name = '';
        $this->email = '';
        $this->subject = '';
        $this->message = '';
    }
    public function render()
    {
        return view('livewire.contactform');
    }
}
