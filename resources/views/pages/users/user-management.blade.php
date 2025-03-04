<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="user-management"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Gerenciar Usuários"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="row gx-4 mb-2">
                            <div class="col-auto my-auto ms-3">
                                <div class="h-100">
                                    <h5 class="mb-1">
                                        Usuários
                                    </h5>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                                <div class=" me-3 my-3 text-end">
                                    <a class="btn bg-gradient-dark mb-0" href="{{route('user-create')}}"><i
                                            class="material-icons text-sm">add</i>&nbsp;&nbsp;Novo
                                        Usuário</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0" id="datatable-basic">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ID
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                NOME</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                EMAIL</th>

                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                DATA DE CADASTRO
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Ações
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <p class="mb-0 text-sm">{{ $user['id'] }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $user['name'] }}</h6>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <p class="text-xs text-secondary mb-0">{{ $user['email'] }}</p>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">{{ date('d/m/Y', strtotime($user['created_at'])) }}</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <form method='POST' action='{{ route('user-destroy', $user['id']) }}'>
                                                        @csrf
                                                        @if (auth()->user()->id != $user['id'])
                                                            <a rel="tooltip" class="btn btn-success btn-link" href="{{route('user-edit', $user['id'] )}}" data-original-title="Editar" title="Editar">
                                                                <i class="material-icons">edit</i>
                                                                <div class="ripple-container"></div>
                                                            </a>
                                                        @else
                                                            <a rel="tooltip" class="btn btn-success btn-link" href="{{route('user-profile')}}" data-original-title="Editar" title="Editar">
                                                                <i class="material-icons">edit</i>
                                                                <div class="ripple-container"></div>
                                                            </a>
                                                        @endif

                                                        @if (auth()->user()->id != $user['id'])
                                                            <button type="button" class="btn btn-danger btn-link" data-original-title="Remover" title="Remover" onclick="confirm('Tem certeza que quer remover esse usuário?') ? this.parentElement.submit() : ''">
                                                                <i class="material-icons">close</i>
                                                                <div class="ripple-container"></div>
                                                            </button>
                                                        @endif
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    @push('js')
        <script>
            $(document).ready(function () {
                var table = $('#datatable-basic').DataTable({
                    language: {
                        url: "https://cdn.datatables.net/plug-ins/1.13.4/i18n/pt-BR.json"
                    },
                    paging: true,
                    ordering: true,
                    info: true
                });
            });
        </script>
    @endpush
</x-layout>
