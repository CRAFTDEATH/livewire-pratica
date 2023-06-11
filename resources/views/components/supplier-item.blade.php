<div>
    @props(['supplier'])

    <tr>
        <td class="col">{{ $supplier->id }}</td>
        <td class="col">{{ $supplier->name }}</td>
        <td class="col">{{ $supplier->state }}</td>
        <td class="col">
            <button class="btn btn-lg mb-2 ms-2 btn-warning bg-orange mr-2" data-bs-placement="bottom"
                data-bs-title="Editar" data-bs-toggle="modal" data-bs-target="{{ '#suppliers-show-' . $supplier->id }}">
                <i class="bi bi-eye"></i>
            </button>
            <button class="btn btn-primary mb-2 ms-2" data-bs-placement="bottom" data-bs-title="Editar"
                data-bs-toggle="modal" data-bs-target="{{ '#suppliers-' . $supplier->id }}">
                <i class="bi bi-pencil"></i>
            </button>
            <button class="btn btn-danger mb-2 ms-2" wire:click.prevent="delete({{ $supplier->id }})">
                <i class="bi bi-trash-fill"></i>
            </button>

            <x-modal-edit-supplier :supplierId="$supplier->id" title="Editar" />
            <x-modal-show-supplier :supplierId="$supplier->id" title="Visualizar" />
        </td>
    </tr>
</div>
