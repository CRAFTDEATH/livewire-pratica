<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Supplier;

class ShowSupplierForm extends Component
{
    public $supplierId;
    public $name;
    public $state;
    public $selectedState = '';

    public function mount($supplierId)
    {
        $this->supplierId = $supplierId;
        $supplier = Supplier::find($supplierId);
        if ($supplier != null) {
            $this->name = $supplier->name;
            $this->state = $supplier->state;
            $this->selectedState = $this->state;
        }
    }

    public function render()
    {
        return view('livewire.suppliers.show-supplier-form');
    }
}
