<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class TableSupplier extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public string $supplierId = '';
    public string $name = '';
    public string $state = '';


    protected $queryString = ['supplierId','name', 'state'];

    public array $columns;

    public function clear()
    {
        $this->state = '';
        $this->supplierId = '';
        $this->name = '';
    }


    public function delete($id)
    {
        app("App\Models\Supplier")->find($id)->delete();
        return redirect()->route('suppliers.index');
    }
    public function render()
    {
        $suppliers = app("App\Models\Supplier")->query()->when(
            $this->name != '' || $this->state != '' || $this->supplierId != '',
            function ($query) {
                $query->when($this->supplierId, function ($query) {
                    $query->where('id', '=', $this->supplierId);
                })
                ->when($this->name, function ($query) {
                    $query->where('name', 'like', '%' . $this->name . '%');
                })
                ->when($this->state, function ($query) {
                    $query->where('state', 'like', '%' . $this->state . '%');
                });
            }
        )->paginate(10);

        return view('livewire.table-supplier', [
            'suppliers' => $suppliers,
            'columns' => $this->columns
        ]);
    }
}
