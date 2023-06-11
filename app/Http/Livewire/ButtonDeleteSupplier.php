<?php

namespace App\Http\Livewire;

use App\Models\Supplier;
use Livewire\Component;

class ButtonDeleteSupplier extends Component
{
    public $supplierId;

    public function mount($supplierId)
    {
        $this->supplierId = $supplierId;
    }
    public function delete()
    {
        Supplier::find($this->supplierId)->delete();
        return redirect()->route('suppliers.index')
            ->with('success', 'Fornecedor deletado com sucesso!');
    }
    public function render()
    {
        return view('livewire.button-delete-supplier');
    }
}
