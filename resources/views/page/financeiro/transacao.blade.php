@extends('layouts.app')
@php session()->put('activePage', 'transacao'); @endphp
@section('style')
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <style>
    </style>
@endsection
@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div>
                <div class="col-lg-8 mt-lg-0 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="font-weight-bolder">Nova transação</h5>
                            <div class="row mt-4">

                                <div class="col-12 col-sm-6">
                                    <div class="input-group input-group-outline mb-4">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option value="" selected disabled>Selecione uma opção</option> <!-- Placeholder -->
                                            <option value="entrada">Entrada</option>
                                            <option value="saida">Saída</option>
                                        </select>
                                    </div>
                                </div>

{{--
                                https://www.creative-tim.com/live/material-dashboard-pro-laravel


                                como faço pra implementar o vuetify 3?

                                copiar na mao o css e montar meu proprio compoenente de select


                                e copiar algum input money --}}



                                <div class="col-sm-6 col-12">
                                    <div class="input-group input-group-outline">
                                        <label class="form-label">Valor</label>
                                        <input type="text" id="valor" class="form-control w-100" onfocus="focused(this)"
                                            onfocusout="defocused(this)">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-12">
                                    <div class="input-group input-group-outline">
                                        <label class="form-label">Data</label>
                                        <input type="text" id="data" class="form-control w-100" onfocus="focused(this)"
                                            onfocusout="defocused(this)">
                                    </div>
                                </div>


                                <div class="col-12 col-sm-6">
                                    <div class="input-group input-group-outline mb-4">
                                        <select class="form-control" >
                                            <option value="" selected disabled>Selecione um funcionário</option> <!-- Placeholder -->
                                            <option value="1">Amanda</option>
                                            <option value="2">Bernardo</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 mt-3">
                                    <div class="input-group input-group-dynamic">
                                      <textarea class="multisteps-form__textarea form-control" rows="5" placeholder="Say a few words about who you are or what you're working on."></textarea>
                                    </div>
                                  </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"
        integrity="sha256-2RS1U6UNZdLS0Bc9z2vsvV4yLIbJNKxyA4mrx5uossk=" crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMGhxJOz7GYvZvFw5rQm8IHmvLtQ0I7oztaC2w"
        crossorigin="anonymous" />

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.min.js"
        integrity="sha512-Ty04j+bj8CRJsrPevkfVd05iBcD7Bx1mcLaDG4lBzDSd6aq2xmIHlCYQ31Ejr+JYBPQDjuiwS/NYDKYg5N7XKQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{asset('assets/js/choices.min.js')}}"></script>
<script src="{{asset('assets/js/core/popper.min.js')}}"></script>
{{-- <script src="{{asset('assets/js/multistep-form.js')}}"></script> --}}



<script src="{{asset('assets/js/core/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/prism.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/docs.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/holder.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/moment.min.js')}}" type="text/javascript"></script>
    <script>
           $(document).ready(function() {
                $('#valor').mask('000,00');
                $('#data').mask('00/00/0000');
            });

        document.addEventListener("DOMContentLoaded", function(e) {

            document.querySelectorAll('#clientes_datalist').forEach(input => {
                input.addEventListener('change', function(e) {
                    let valueDatalist = 0
                    let pai = input.parentElement

                    let listagem = document.querySelectorAll('#choices-cliente option')
                    listagem.forEach(nome => {
                        if (nome.value == input.value) {
                            valueDatalist = nome.getAttribute('data-value')
                        }
                    })
                    pai.childNodes[3].value = valueDatalist
                })
            })
        })
    </script>
@endsection
