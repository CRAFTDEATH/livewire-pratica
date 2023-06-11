<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Supplier;

class SelectState extends Component
{
    public $supplierId;
    public $selectedState;
    public $disabled;

    public function mount($supplierId,$disabled)
    {
        $this->supplierId = $supplierId;
        $supplier = Supplier::find($this->supplierId);
        $this->selectedState = $supplier->state;
        $this->disabled = $disabled;
    }
    public function render()
    {
        return view('livewire.select-state');
    }
}
