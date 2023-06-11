@props(['supplierId' => null,'title'=> null])
<div>
    <!-- Modal -->
    <div class="modal fade" id="{{'suppliers-'.$supplierId }}" tabindex="-1" aria-labelledby="{{ 'label-' . $supplierId }}"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="{{ 'label-' . $supplierId }}">{{$title}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <livewire:edit-supplier-form wire:key="{{ 'suppliers-edit-' . $supplierId }}" :supplierId="$supplierId" />
                    </div>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>


</div>
