<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Supplier;

class EditSupplierForm extends Component
{
    public $supplierId;
    public $name;
    public $state;
    public $selectedState;
    protected $rules = [
        'name' => 'required',
        'state' => 'required|size:2',
    ];
    public function mount($supplierId)
    {
        $this->supplierId = $supplierId;
        $supplier = Supplier::find($supplierId);
        $this->name = $supplier->name;
        $this->state = $supplier->state;
        $this->selectedState = $this->state;
    }
    public function submit()
    {
        $this->validate();
        $supplier = Supplier::find($this->supplierId);
        $supplier->update([
            'name' => $this->name,
            'state' => $this->state
        ]);

        return redirect()->route('suppliers.index')
            ->with('success', 'Fornecedor atualizado com sucesso!');
    }

    public function render()
    {
        return view('livewire.suppliers.edit-supplier-form');
    }
}
