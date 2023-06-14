<div>
    <div class="mb-3">
        <label class="form-label">Fornecedor:</label>
        <input type="text" class="form-control" disabled placeholder="Digite o fornecedor aqui"
            wire:model.lazy="name">
    </div>
    <div class="mb-3">
        <select class="form-select" name="state" wire:model="state" x-data="{ states: [] }"
            x-init="states = await (await fetch('https://servicodados.ibge.gov.br/api/v1/localidades/estados')).json()" disabled>
            <option value="" selected>Selecione...</option>
            <template x-for="state in states" :key="state.id">
                <option x-bind:value="state.sigla" x-text="state.nome"
                    x-bind:selected="state.sigla === $wire.selectedState"></option>
            </template>
        </select>
    </div>
</div>
