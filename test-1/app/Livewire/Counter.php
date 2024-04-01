<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;

    public function increment () {
        $this->count++;
    }

    public function decrement ($by) {
        $this->count = $this->count - $by;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
