<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Supplier;

class ShowSupplierForm extends Component
{
    public $supplierId;
    public $name;
    public $state;

    public function mount($supplierId)
    {
        $this->supplierId = $supplierId;
        $supplier = Supplier::find($supplierId);
        $this->name = $supplier->name;
        $this->state = $supplier->state;
    }

    public function render()
    {
        return view('livewire.suppliers.show-supplier-form');
    }
}
