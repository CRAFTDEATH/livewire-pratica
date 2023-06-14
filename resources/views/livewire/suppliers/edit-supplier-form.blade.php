<div>
    <div>
        <form wire:submit.prevent="submit()" method="POST" action="#">
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Fornecedor:</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" wire:keyup="validateName"
                    placeholder="Digite o fornecedor aqui" wire:model="name" name="name">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="idestado" class="form-label">Estado:</label>
                <select class="form-select @error('state') is-invalid @enderror" name="state" wire:model="state"
                    x-data="{ states: [] }" wire:change="change($event.target.value)" x-init="states = await (await fetch('https://servicodados.ibge.gov.br/api/v1/localidades/estados')).json()">
                    <option value="" selected>Selecione...</option>
                    <template x-for="state in states" :key="state.id">
                        <option x-bind:value="state.sigla" x-text="state.nome"
                            x-bind:selected="state.sigla === $wire.selectedState"></option>
                    </template>
                </select>
                @error('state')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <br>
            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">Salvar</button>
        </form>
    </div>
</div>
