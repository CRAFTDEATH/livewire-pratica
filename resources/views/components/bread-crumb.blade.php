@php
    $breadcrumbs = [
        'home' => 'Inicio',
        'products' => 'Produtos',
        'suppliers' => 'Fornecedores',
        'sales' => 'Vendas',
    ];
    $methods = [
        'home' => '',
        'index' => 'Inicio',
        'create' => 'Novo',
        'edit' => 'Editar',

    ];
@endphp
<div>
    <nav aria-label="breadcrumb" class="p-2">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route(explode('.', Route::currentRouteName())[0] . '.index') }}">{{ $breadcrumbs[explode('.', Route::currentRouteName())[0]] }}</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                {{ $methods[explode('.', Route::currentRouteName())[1]] }}</li>
        </ol>
    </nav>
</div>
