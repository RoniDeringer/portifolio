<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='clientes'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Clientes"></x-navbars.navs.auth>
        <!-- End Navbar -->

        <div class="container-fluid py-4">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-auto my-auto ms-3">
                                    <h5 class="mb-0">Clientes</h5>
                                    <p class="text-sm mb-0">
                                        Listagem de clientes e sites
                                    </p>
                                </div>

                                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                                    <div class=" me-3 my-3 text-end">
                                        <a class="btn bg-gradient-dark mb-0" href="{{ route('user-create') }}">
                                            <i class="material-icons">add</i>&nbsp;&nbsp;
                                            Novo registro
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <div
                                class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-height fixed-columns">
                                <div class="dataTable-container">
                                    <table id="clientes" class="table table-striped table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7"
                                                    data-sortable="">
                                                    <a href="#" class="dataTable-sorter">ID</a>
                                                </th>
                                                <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7"
                                                    data-sortable="">
                                                    <a href="#" class="dataTable-sorter">Código</a>
                                                </th>
                                                <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7"
                                                    data-sortable="">
                                                    <a href="#" class="dataTable-sorter">Nome</a>
                                                </th>
                                                <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7"
                                                    data-sortable="">
                                                    <a href="#" class="dataTable-sorter">Data Center</a>
                                                </th>
                                                <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7"
                                                    data-sortable="">
                                                    <a href="#" class="dataTable-sorter">Status</a>
                                                </th>
                                                <th class="text-uppercase text-dark text-xxs font-weight-bolder text-center opacity-7"
                                                    data-sortable="">
                                                    <a href="#" class="dataTable-sorter">Ações</a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($clientes as $cliente)
                                                <tr>
                                                    <td>{{ $cliente->id }}</td>
                                                    <td>{{ $cliente->codigo }}</td>
                                                    <td>{{ $cliente->nome }}</td>

                                                    <td class="text-center">
                                                        @if ($cliente->data_center == 'aws')
                                                            <span class="badge badge-warning"
                                                                style="padding: 5px">AWS</span>

                                                        @elseif($cliente->data_center == 'azure')

                                                            <span class="badge badge-info"
                                                                style="padding: 5px">AZURE</span>
                                                        @else
                                                            <span class="badge badge-danger"
                                                                style="padding: 5px">Google</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($cliente->status == 'ativo')
                                                            <div class="d-flex align-items-center">
                                                                <button
                                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                                        class="material-icons text-sm"
                                                                        aria-hidden="true">done</i></button>
                                                                <span>Ativo</span>
                                                            </div>
                                                        @else
                                                            <div class="d-flex align-items-center">
                                                                <button
                                                                    class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                                        class="material-icons text-sm"
                                                                        aria-hidden="true">clear</i></button>
                                                                <span>Inativo</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="ms-4">
                                                            <a href="#" class="accessibility-icon mb-0">
                                                                <span class="material-icons">
                                                                    visibility
                                                                </span>
                                                            </a>
                                                            <a href="#" class="accessibility-icon mb-0 px-2">
                                                                <span class="material-icons">
                                                                    edit
                                                                </span>
                                                            </a>
                                                            <a href="#" class="accessibility-icon mb-0">
                                                                <span class="material-icons">
                                                                    delete
                                                                </span>
                                                            </a>
                                                            <a href="{{route('generateMultiTenacyByCliente', $cliente->id)}}" class="accessibility-icon mb-0 px-2" title="Gerar Tenant">
                                                                <span class="material-icons">
                                                                    lockopen
                                                                </span>
                                                            </a>
                                                        </div>
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
            </div>


            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    </div>
    @push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            var table = $('#clientes').DataTable({
                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.13.4/i18n/pt-BR.json"
                },
                paging: true,
                ordering: true,
                info: true,
                responsive: true,
                pageLength: 10,
                stateSave: true,
            });

            @if(session('message'))
                Swal.fire({
                    icon: "{{ session('type') == 'alert-success' ? 'success' : 'error' }}",
                    title: "{{ session('type') == 'alert-success' ? 'Sucesso!' : 'Erro!' }}",
                    text: "{{ session('message') }}",
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "OK"
                });
            @endif
        });
    </script>
@endpush

</x-layout>
