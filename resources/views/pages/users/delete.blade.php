<x-layout bodyClass="bg-gray-200">


    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-100"
            style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Solicitar exclusão
                                        de cadastro
                                    </h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form role="form" method="POST" action="{{ route('app-post-delete') }}"
                                    class="text-start">
                                    @csrf
                                    @if (session()->get('message') && session()->get('type'))
                                        <div class="alert {{ session()->get('type') }} alert-dismissible fade show text-white"
                                            role="alert">
                                            <span class="alert-text">{!! session()->get('message') !!}</span>

                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif

                                    @if (Session::has('status'))
                                        <div class="alert alert-success alert-dismissible text-white" role="alert">
                                            <span class="text-sm">{{ Session::get('status') }}</span>
                                            <button type="button" class="btn-close text-lg py-3 opacity-10"
                                                data-bs-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                    <!-- Campo Nome -->
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Nome</label>
                                        <input type="text" class="form-control" name="nome" id="nome">
                                    </div>
                                    @error('nome')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror

                                    <!-- Campo Email -->
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" id="email">
                                    </div>
                                    @error('email')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror

                                    <!-- Campo CPF -->
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">CPF/CNPJ</label>
                                        <input type="text" class="form-control" id="cpf_cnpj" name="cpf_cnpj">
                                    </div>
                                    @error('cpf_cnpj')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Solicitar
                                        </button>
                                    </div>
                                    {{-- <p class="mt-4 text-sm text-center">
                                        Lembre-se que a senha é composta somente de 4 dígitos de 0 a 9.
                                    </p> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        function mascaraCpfOuCnpj(input) {
            const valor = input.value.replace(/\D/g, ''); // Remove todos os caracteres não numéricos

            if (valor.length <= 11) { // CPF
                input.value = valor
                    .replace(/(\d{3})(\d)/, '$1.$2') // XXX.XXX.XXX-XX
                    .replace(/(\d{3})(\d)/, '$1.$2')
                    .replace(/(\d{3})(\d{1,2})$/, '$1-$2');
            } else { // CNPJ
                input.value = valor.slice(0, 14) // Limita ao máximo de 14 dígitos para CNPJ
                    .replace(/^(\d{2})(\d)/, '$1.$2') // XX.XXX.XXX/XXXX-XX
                    .replace(/^(\d{2})\.(\d{3})(\d)/, '$1.$2.$3')
                    .replace(/\.(\d{3})(\d)/, '.$1/$2')
                    .replace(/(\d{4})(\d)/, '$1-$2');
            }
        }

        document.getElementById('cpf_cnpj').addEventListener('input', function() {
            mascaraCpfOuCnpj(this);
        });
    </script>

</x-layout>
