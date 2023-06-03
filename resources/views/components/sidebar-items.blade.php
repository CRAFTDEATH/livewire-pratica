<div>
    <ul class="nav navbar-nav flex-column ">
        <li class="nav-item d-flex align-items-center mt-1">

            <a class="nav-link ms-3" href="{{route('suppliers.index')}}">
                <i class="fa-solid fa-truck-fast fa-lg"></i>
                 <span class="ms-2">Fornecedores </span>
            </a>
        </li>
        <li class="nav-item d-flex align-items-center mt-1 ">
            <a class="nav-link ms-3" href="{{route('products.index')}}">
                <i class="fa-solid fa-box fa-lg"></i>
                <span class="ms-2">Produtos</span>
            </a>
        </li>
        <li class="nav-item d-flex align-items-center mt-1">

            <a class="nav-link ms-3" href="{{route('sales.index')}}">
                <i class="fa-sharp fa-solid fa-money-bill-wave fa-lg"></i>
                 <span class="ms-2">Vendas</span>
            </a>
        </li>
    </ul>
</div>

<style>
    .nav-item:hover {
        background-color: #6c757d;
        ;
        /* Cor de fundo ao passar o mouse */
    }

    .nav-item:hover>.nav-link {
        color: #b1b5b9;
        /* Cor do link ao passar o mouse (cinza claro do Bootstrap) */
    }
</style>
