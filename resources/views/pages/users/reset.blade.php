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
                                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Troque sua senha
                                    </h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form role="form" method="POST" action="{{ route('app-post-reset') }}"
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
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <input type="hidden" name="cpf" value="{{ $cpf }}">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Nova senha</label>
                                        <input type="password" class="form-control" name="password" inputmode="numeric"
                                            pattern="[0-9]*" maxlength="4" id="password">
                                    </div>
                                    @error('password')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Confirmar nova senha</label>
                                        <input type="password" class="form-control" name="confirm_password"
                                            inputmode="numeric" pattern="[0-9]*" maxlength="4" id="confirm_password">
                                    </div>
                                    @error('confirm_password')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Mudar
                                            senha</button>
                                    </div>
                                    <p class="mt-4 text-sm text-center">
                                        Lembre-se que a senha é composta somente de 4 dígitos de 0 a 9.
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.getElementById('password').addEventListener('input', function(e) {
            e.target.value = e.target.value.replace(/[^0-9]/g, '');
        });
        document.getElementById('confirm_password').addEventListener('input', function(e) {
            e.target.value = e.target.value.replace(/[^0-9]/g, '');
        });
    </script>

</x-layout>
