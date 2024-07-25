<?php

namespace App\Livewire;

use Livewire\Component;

class Quill extends Component
{   
    public $value;
    public $quillId;
    
    const EVENT_VALUE_UPDATED = 'quill_value_updated';
    
    public function mount($value = ''){
        $this->value = $value;
        $this->quillId = 'quill-'.uniqid();
    }
 
    public function updatedValue($value) {
        $this->dispatch(self::EVENT_VALUE_UPDATED, $value);
    }

    public function render()
    {
        return view('livewire.quill');
    }
}
