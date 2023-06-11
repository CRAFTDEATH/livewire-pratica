<div>
<div>
    <label for="idestado" class="form-label">Estado:</label>
    <select class="form-select" name="state" {{ $disabled }}  x-data="{ states: [] }" x-init="states = await (await fetch('https://servicodados.ibge.gov.br/api/v1/localidades/estados')).json()">
        <option value="" selected>Selecione...</option>
        <template x-for="state in states" :key="state.id">
            <option x-bind:value="state.sigla" x-text="state.nome" x-bind:selected="$wire.selectedState === state.sigla"></option>
        </template>
    </select>

</div>

