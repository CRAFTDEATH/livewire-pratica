<div>
    <div class="mb-3">
        <label  class="form-label">Fornecedor:</label>
        <input type="text" class="form-control" disabled  placeholder="Digite o fornecedor aqui" wire:model.lazy="name">
    </div>
    <div class="mb-3">
        <livewire:select-state wire:key="{{'select-show-'.$supplierId}}" wire:model.lazy="state" disabled="disabled" :supplierId="$supplierId"/>
    </div>
</div>
