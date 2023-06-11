<div>
    <form wire:submit.prevent="submit" method="POST" action="#" id="form-create">
        <div class="mb-3">
            <label for="idfornecedor" class="form-label">Fornecedor:</label>
            <input wire:model="name" type="text" class="form-control" id="idfornecedor"
                placeholder="Digite o fornecedor aqui">
            <div>
                @error('name')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <x-select-state wire:model.lazy="state"></x-select-state>
            <div>
                @error('state')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror

            </div>
        </div>

        <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">Salvar</button>
    </form>
</div>
