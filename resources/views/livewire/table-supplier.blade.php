<div>
    <div class="row">
        <div class="col-4 mb-3">
            <label class="form-label">ID:</label>
            <input type="text" class="form-control" wire:model='supplierId'
                placeholder="Digite o nome do fornecedor aqui">
        </div>
        <div class="col-4 mb-3">
            <label class="form-label">Fornecedor:</label>
            <input type="text" class="form-control" id="id" placeholder="Digite o nome do fornecedor aqui"
                wire:model='name'>
        </div>
        <div class="col-4 mb-3">
            <label class="form-label">Estado:</label>
            <select class="form-control" wire:model='state' x-data="{ states: [] }" x-init="states = await (await fetch('https://servicodados.ibge.gov.br/api/v1/localidades/estados')).json()">
                <option value="" selected>Selecione...</option>
                <template x-for="state in states" :key="state.id">
                    <option x-bind:value="state.sigla" x-text="state.nome"></option>
                </template>
            </select>
        </div>
        <div class="col-2 mb-3">
            <button wire:click="clear" class="btn btn-light border"> <i class="bi bi-arrow-clockwise"></i> Recarregar</button>
        </div>
    </div>


    <div class="table-responsive-sm mt-4">
        <table class="table table-bordered">
            <thead>
                <tr>
                    @foreach ($columns as $column)
                        <th scope="col">{{ $column }}</th>
                    @endforeach
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($suppliers as $supplier)
                    <tr>
                        <td class="col"> {{ $supplier->id }}</td>
                        <td class="col"> {{ $supplier->name }}</td>
                        <td class="col"> {{ $supplier->state }}</td>
                        <td class="col">
                            <button class="btn btn-lg mb-2 ms-2 btn-warning bg-orange mr-2" data-bs-placement="bottom"
                                data-bs-title="Editar" data-bs-toggle="modal"
                                data-bs-target="{{ '#suppliers-show-' . $supplier->id }}">
                                <i class="bi bi-eye"></i>
                            </button>
                            <button class="btn btn-primary mb-2 ms-2" data-bs-placement="bottom" data-bs-title="Editar"
                                data-bs-toggle="modal" data-bs-target="{{ '#suppliers-' . $supplier->id }}"><i
                                    class="bi bi-pencil"></i>
                            </button>
                            <button class="btn btn-danger mb-2 ms-2" wire:click.prevent="delete({{ $supplier->id }})">
                                <i class="bi bi-trash-fill"></i>
                            </button>


                        </td>

                    </tr>
                    <x-modal-edit-supplier supplierId="{{ $supplier->id }}" title="Editar" />
                    <x-modal-show-supplier supplierId="{{ $supplier->id }}" title="Visualizar" />
                @empty
                    <h4>Não há fornecedores cadastrados</h4>
                @endforelse
            </tbody>
        </table>
    </div>
    <div>
        {{ $suppliers->links() }}
    </div>
</div>
