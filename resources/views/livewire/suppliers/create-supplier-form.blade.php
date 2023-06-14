<div>
    <form wire:submit.prevent="submit" method="POST" action="#" id="form-create" class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="idfornecedor" class="form-label">Fornecedor:</label>
            <input wire:model.debounce.500ms="name" type="text"
                class="form-control @error('name') is-invalid @enderror" name="fornecedor" id="fornecedor"
                wire:keyup="validateName" placeholder="Digite o fornecedor aqui" required>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="idestado" class="form-label">Estado:</label>
            <select wire:change="validateState" class="form-select @error('state') is-invalid @enderror"
                wire:model="state" name="state" x-data="{ states: [] }" x-init="states = await (await fetch('https://servicodados.ibge.gov.br/api/v1/localidades/estados')).json()">
                <option value="" selected>Selecione...</option>
                <template x-for="state in states" :key="state.id">
                    <option x-bind:value="state.sigla" x-text="state.nome"></option>
                </template>
            </select>
            @error('state')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" id="submit-button" class="btn btn-primary" wire:loading.attr="disabled">Salvar</button>
    </form>
</div>

<script type="module">

    (() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()


</script>
