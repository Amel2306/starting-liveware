<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\Attributes\Rules;

#[Title("Todos")]
class Todos extends Component
{
    public $new_todo = "";
    public $mobile_todo = "";

    public $todos = [];
    /*    'dormir',
        'manger',
    ];*/

    //hook : se réalise dés le début de la page avant toute autre chose
    public function mount () {
        $this->todos = [
            'dormir',
            'manger',
        ];
    }

    public function updated($propeties, $value) {
        dd($propeties, $value);
    }

    public function ajouter () {
        $this->todos[] = $this->new_todo;
        $this->new_todo = "";
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
