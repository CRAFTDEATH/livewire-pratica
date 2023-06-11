@extends('layouts.app')
<style>
    @media (min-width: 577px) {
        .justify-content-end-mobile {
            justify-content: end !important;
        }
    }
</style>
@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa-sharp fa-solid fa-circle-check fa-lg"></i>
            <strong>Sucesso!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md d-flex justify-content-start">
                    <h5 class="card-title">Listagem de fornecedores</h5>
                </div>
                <div class="col-md d-flex justify-content-end">
                    <button type="button" class="btn btn-success" data-bs-placement="bottom" data-bs-title="Editar"
                        data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus-lg"></i> Novo</button>
                </div>

            </div>
        </div>
        <div class="card-body">
            <livewire:table-supplier :columns="['#', 'Nome', 'Estado']" />
        </div>
    </div>
    <x-modal-add-supplier title="Criar novo fornecedor" />
@endsection
