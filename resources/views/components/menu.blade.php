@php $activePage = session()->get('activePage') @endphp
<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 d-flex text-wrap align-items-center" href=" {{ route('datatables') }} ">
            <img src="{{ asset('assets') }}/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-2 font-weight-bold text-white">Roni Deringer</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Templates</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'datatables' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('datatables') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">list</i>
                    </div>
                    <span class="nav-link-text ms-1">Datatables</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'transacao' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('transacao') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">attach_money</i>
                    </div>
                    <span class="nav-link-text ms-1">Financeiro</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'funcionario' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('transacao') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">assignment_ind</i>
                    </div>
                    <span class="nav-link-text ms-1">Funcionários</span>
                </a>
            </li>

{{--
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Páginas</h6>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'atendimentos' ? 'active bg-gradient-primary' : '' }} "
                    href="{{ route('atendimentos') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <span class="material-icons">receipt_long</span>
                    </div>
                    <span class="nav-link-text ms-1">Atendimentos</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'clientes' ? 'active bg-gradient-primary' : '' }} "
                    href="{{ route('clientes') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <span class="material-icons">groups</span>
                    </div>
                    <span class="nav-link-text ms-1">Clientes</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'terceirizados' ? 'active bg-gradient-primary' : '' }} "
                    href="{{ route('terceirizados') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <span class="material-icons">handshake</span>
                    </div>
                    <span class="nav-link-text ms-1">Terceirizados</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'funcionarios' ? 'active bg-gradient-primary' : '' }} "
                    href="{{ route('funcionarios') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <span class="material-icons">badge</span>
                    </div>
                    <span class="nav-link-text ms-1">Funcionários</span>
                </a>
            </li>

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'dashboard' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('dashboard') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Conta</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'profile' ? ' active bg-gradient-primary' : '' }}  "
                    href="{{ route('profile') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Perfil</span>
                </a>
            </li> --}}




            <hr class="horizontal light mt-3">
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Sistema</h6>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white " href="{{ route('login') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">login</i>
                    </div>
                    <span class="nav-link-text ms-1">Login</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" style="cursor: pointer !important"   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">assignment</i>
                    </div>
                    <span class="nav-link-text ms-1">Sair</span>
                </a>
                <form method="POST" action="{{ route('logout') }}" class="d-none" id="logout-form">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</aside>
