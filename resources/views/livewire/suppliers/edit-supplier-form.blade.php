<div>
    <div>
        <form wire:submit.prevent="submit()" method="POST" action="#">
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Fornecedor:</label>
                <input type="text" class="form-control"
                    placeholder="Digite o fornecedor aqui" wire:model.lazy="name" name="name">
                <div>
                    @error('name')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <livewire:select-state wire:key="{{'select-edit-'.$supplierId}}" wire:model.lazy="state" disabled="" :supplierId="$supplierId"/>
                <div>
                    @error('state')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">Salvar</button>
        </form>
    </div>

</div>
