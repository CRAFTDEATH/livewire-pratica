<?php

namespace App\Http\Livewire;

use App\Models\Supplier;
use Livewire\Component;

class CreateSupplierForm extends Component
{
    public $name;
    public $state;

    protected $rules = [
        'name' => 'required',
        'state' => 'required|size:2',
    ];

    public function submit(){
        $this->validate();

        Supplier::create([
            'name' => $this->name,
            'state' => $this->state
        ]);

        return redirect()->route('suppliers.index')
            ->with('success','Fornecedor criado com sucesso!');
    }
    public function render()
    {
        return view('livewire.suppliers.create-supplier-form');
    }
}
