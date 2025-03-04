<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='formulario'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Formulário"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card mt-4" id="editar">
                        <div class="card-header">
                            <h5>Editar</h5>
                        </div>
                        @php
                            $teste = 'teste';
                        @endphp
                        <div class="card-body pt-0 fixed-height">
                            <form action="#" method="post"
                                enctype="multipart/form-data" class="multisteps-form__form">
                                @csrf
                                <div class="multisteps-form__content">
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-2">
                                            <div
                                                class="input-group input-group-dynamic @isset($teste) focused is-focused @endisset">
                                                <label class="form-label">CPF ou CNPJ</label>
                                                <input name="nome" class="multisteps-form__input form-control"
                                                    value="06.912.236/0001-80" type="text"
                                                    onfocus="focused(this)" onfocusout="defocused(this)">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div
                                                class="input-group input-group-dynamic @isset($teste) focused is-focused @endisset">
                                                <label class="form-label">Nome ou Razão Social</label>
                                                <input name="nome" class="multisteps-form__input form-control"
                                                    value="Roni Deringer" type="text"
                                                    onfocus="focused(this)" onfocusout="defocused(this)">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-2">
                                            <div
                                                class="input-group input-group-dynamic @isset($teste) focused is-focused @endisset">
                                                <label class="form-label">Fone</label>
                                                <input name="nome" class="multisteps-form__input form-control"
                                                    value="+55 47 99912-1234" type="text"
                                                    onfocus="focused(this)" onfocusout="defocused(this)">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div
                                                class="input-group input-group-dynamic @isset($teste) focused is-focused @endisset">
                                                <label class="form-label">Email</label>
                                                <input name="nome" class="multisteps-form__input form-control"
                                                    value="webmaster@arealocal.com.br" type="text"
                                                    onfocus="focused(this)" onfocusout="defocused(this)">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mt-5">
                                        <div class="col-12 col-sm-2">
                                            <div
                                                class="input-group input-group-dynamic @isset($teste) focused is-focused @endisset">
                                                <label class="form-label">Login</label>
                                                <input name="nome" class="multisteps-form__input form-control"
                                                    value="area.local" type="text"
                                                    onfocus="focused(this)" onfocusout="defocused(this)">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-2">
                                            <div
                                                class="input-group input-group-dynamic">
                                                <label class="form-label">Senha</label>
                                                <input name="password" class="multisteps-form__input form-control"
                                                   type="password" onfocus="focused(this)" onfocusout="defocused(this)">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-2">
                                            <div
                                                class="input-group input-group-dynamic @isset($teste) focused is-focused @endisset">
                                                <label class="form-label">Status</label>
                                                <select name="status" class="form-control">
                                                        <option value="1"  selected>Ativo </option>
                                                        <option value="0">Inativo </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="mt-3">
                                    <div class="button-row d-flex mt-1">
                                        <button class="btn bg-gradient-dark  mb-0 js-btn-next" type="submit" >
                                            Salvar
                                        </button>
                                        <a href="#">
                                            <button class="btn btn-outline-secondary ms-2 mb-3 mb-md-0 " type="button">
                                                Cancelar
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>


            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    </div>
    @push('js')
        <script>
        </script>
    @endpush
</x-layout>
