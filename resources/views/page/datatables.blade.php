@extends('layouts.app')
@php session()->put('activePage', 'datatables'); @endphp
@section('style')
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <style>
        td button.btn-icon {
            padding: 10px;
        }
    </style>
@endsection
@section('content')
<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-auto my-auto ms-3">
                            <h5 class="mb-0">Datatables</h5>
                            <p class="text-sm mb-0">
                                Exemplo de Datatables
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                            <div class=" me-3 my-3 text-end">
                                <a class="btn bg-gradient-dark mb-0" href="#">
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
                            <table id="empreendimentos" class="table table-striped table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7"
                                            data-sortable="">
                                            <a href="#" class="dataTable-sorter">ID</a>
                                        </th>
                                        <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7"
                                            data-sortable="">
                                            <a href="#" class="dataTable-sorter">Nome</a>
                                        </th>
                                        <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7"
                                            data-sortable="">
                                            <a href="#" class="dataTable-sorter">Cargo</a>
                                        </th>
                                        <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7"
                                            data-sortable="">
                                            <a href="#" class="dataTable-sorter">Pagamento</a>
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
                                    <tr>
                                        <td>1</td>
                                        <td><a href="#">José da Costa Silva</a></td>
                                        <td>Aux. Administrativo</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">done</i></button>
                                                <span>Pago</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-primary"
                                                style="padding: 5px">Encostado</span></td>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td><a href="#">Raquel meticosta</a></td>
                                        <td>Programador HTML</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">clear</i></button>
                                                <span>Atrasado</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success" style="padding: 5px">Ativo</span>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td><a href="#">Sérgio Castro</a></td>
                                        <td>Estoque</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">refresh</i></button>
                                                <span>Devolvido</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-warning" style="padding: 5px">Pausado</span>
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
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><a href="#">Maria Rosália</a></td>
                                        <td>Biomedicina</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">done</i></button>
                                                <span>Pago</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-light"
                                                style="padding: 5px">Aguardando</span></td>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td><a href="#">Ruth Santos</a></td>
                                        <td>Costureira</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">clear</i></button>
                                                <span>Atrasado</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger" style="padding: 5px">Recesso</span>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td><a href="#">Flávio Jorge Júnior</a></td>
                                        <td>Estoque</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">refresh</i></button>
                                                <span>Devolvido</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-info" style="padding: 5px">Em aprovação</span>
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
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td><a href="#">Rafael Lima</a></td>
                                        <td>Manutenção</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">done</i></button>
                                                <span>Pago</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-dark" style="padding: 5px">Experiência</span>
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
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td><a href="#">José da Costa Silva</a></td>
                                        <td>Aux. Administrativo</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">done</i></button>
                                                <span>Pago</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-primary"
                                                style="padding: 5px">Encostado</span></td>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>9</td>
                                        <td><a href="#">Raquel meticosta</a></td>
                                        <td>Programador HTML</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">clear</i></button>
                                                <span>Atrasado</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success" style="padding: 5px">Ativo</span>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>10</td>
                                        <td><a href="#">Sérgio Castro</a></td>
                                        <td>Estoque</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">refresh</i></button>
                                                <span>Devolvido</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-warning" style="padding: 5px">Pausado</span>
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
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td><a href="#">Maria Rosália</a></td>
                                        <td>Biomedicina</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">done</i></button>
                                                <span>Pago</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-light"
                                                style="padding: 5px">Aguardando</span></td>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>12</td>
                                        <td><a href="#">Ruth Santos</a></td>
                                        <td>Costureira</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">clear</i></button>
                                                <span>Atrasado</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger" style="padding: 5px">Recesso</span>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>13</td>
                                        <td><a href="#">Flávio Jorge Júnior</a></td>
                                        <td>Estoque</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">refresh</i></button>
                                                <span>Devolvido</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-info" style="padding: 5px">Em aprovação</span>
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
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td><a href="#">Rafael Lima</a></td>
                                        <td>Manutenção</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">done</i></button>
                                                <span>Pago</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-dark" style="padding: 5px">Experiência</span>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>15</td>
                                        <td><a href="#">Ruth Santos</a></td>
                                        <td>Costureira</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">clear</i></button>
                                                <span>Atrasado</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger" style="padding: 5px">Recesso</span>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>16</td>
                                        <td><a href="#">Flávio Jorge Júnior</a></td>
                                        <td>Estoque</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">refresh</i></button>
                                                <span>Devolvido</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-info" style="padding: 5px">Em aprovação</span>
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
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td><a href="#">Rafael Lima</a></td>
                                        <td>Manutenção</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">done</i></button>
                                                <span>Pago</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-dark" style="padding: 5px">Experiência</span>
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
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td><a href="#">Rafael Lima</a></td>
                                        <td>Manutenção</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">done</i></button>
                                                <span>Pago</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-dark" style="padding: 5px">Experiência</span>
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
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td><a href="#">Rafael Lima</a></td>
                                        <td>Manutenção</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">done</i></button>
                                                <span>Pago</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-dark" style="padding: 5px">Experiência</span>
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
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td><a href="#">Flávio Jorge Júnior</a></td>
                                        <td>Estoque</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">refresh</i></button>
                                                <span>Devolvido</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-info" style="padding: 5px">Em aprovação</span>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>21</td>
                                        <td><a href="#">José da Costa Silva</a></td>
                                        <td>Aux. Administrativo</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">done</i></button>
                                                <span>Pago</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-primary"
                                                style="padding: 5px">Encostado</span></td>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>22</td>
                                        <td><a href="#">Raquel meticosta</a></td>
                                        <td>Programador HTML</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">clear</i></button>
                                                <span>Atrasado</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success" style="padding: 5px">Ativo</span>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>23</td>
                                        <td><a href="#">Sérgio Castro</a></td>
                                        <td>Estoque</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">refresh</i></button>
                                                <span>Devolvido</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-warning" style="padding: 5px">Pausado</span>
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
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td><a href="#">Maria Rosália</a></td>
                                        <td>Biomedicina</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">done</i></button>
                                                <span>Pago</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-light"
                                                style="padding: 5px">Aguardando</span></td>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>25</td>
                                        <td><a href="#">Ruth Santos</a></td>
                                        <td>Costureira</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">clear</i></button>
                                                <span>Atrasado</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger" style="padding: 5px">Recesso</span>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>26</td>
                                        <td><a href="#">Flávio Jorge Júnior</a></td>
                                        <td>Estoque</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">refresh</i></button>
                                                <span>Devolvido</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-info" style="padding: 5px">Em aprovação</span>
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
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td><a href="#">Rafael Lima</a></td>
                                        <td>Manutenção</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">done</i></button>
                                                <span>Pago</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-dark" style="padding: 5px">Experiência</span>
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
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td><a href="#">José da Costa Silva</a></td>
                                        <td>Aux. Administrativo</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">done</i></button>
                                                <span>Pago</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-primary"
                                                style="padding: 5px">Encostado</span></td>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>29</td>
                                        <td><a href="#">Raquel meticosta</a></td>
                                        <td>Programador HTML</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">clear</i></button>
                                                <span>Atrasado</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success" style="padding: 5px">Ativo</span>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>30</td>
                                        <td><a href="#">Sérgio Castro</a></td>
                                        <td>Estoque</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">refresh</i></button>
                                                <span>Devolvido</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-warning" style="padding: 5px">Pausado</span>
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
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>31</td>
                                        <td><a href="#">Maria Rosália</a></td>
                                        <td>Biomedicina</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">done</i></button>
                                                <span>Pago</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-light"
                                                style="padding: 5px">Aguardando</span></td>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>32</td>
                                        <td><a href="#">Ruth Santos</a></td>
                                        <td>Costureira</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">clear</i></button>
                                                <span>Atrasado</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger" style="padding: 5px">Recesso</span>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>33</td>
                                        <td><a href="#">Flávio Jorge Júnior</a></td>
                                        <td>Estoque</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">refresh</i></button>
                                                <span>Devolvido</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-info" style="padding: 5px">Em aprovação</span>
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
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>34</td>
                                        <td><a href="#">Rafael Lima</a></td>
                                        <td>Manutenção</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">done</i></button>
                                                <span>Pago</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-dark" style="padding: 5px">Experiência</span>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>35</td>
                                        <td><a href="#">Ruth Santos</a></td>
                                        <td>Costureira</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">clear</i></button>
                                                <span>Atrasado</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger" style="padding: 5px">Recesso</span>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>36</td>
                                        <td><a href="#">Flávio Jorge Júnior</a></td>
                                        <td>Estoque</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">refresh</i></button>
                                                <span>Devolvido</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-info" style="padding: 5px">Em aprovação</span>
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
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>37</td>
                                        <td><a href="#">Rafael Lima</a></td>
                                        <td>Manutenção</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">done</i></button>
                                                <span>Pago</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-dark" style="padding: 5px">Experiência</span>
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
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>38</td>
                                        <td><a href="#">Rafael Lima</a></td>
                                        <td>Manutenção</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">done</i></button>
                                                <span>Pago</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-dark" style="padding: 5px">Experiência</span>
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
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>39</td>
                                        <td><a href="#">Rafael Lima</a></td>
                                        <td>Manutenção</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">done</i></button>
                                                <span>Pago</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-dark" style="padding: 5px">Experiência</span>
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
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>40</td>
                                        <td><a href="#">Flávio Jorge Júnior</a></td>
                                        <td>Estoque</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">refresh</i></button>
                                                <span>Devolvido</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-info" style="padding: 5px">Em aprovação</span>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>41</td>
                                        <td><a href="#">José da Costa Silva</a></td>
                                        <td>Aux. Administrativo</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">done</i></button>
                                                <span>Pago</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-primary"
                                                style="padding: 5px">Encostado</span></td>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>42</td>
                                        <td><a href="#">Raquel meticosta</a></td>
                                        <td>Programador HTML</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">clear</i></button>
                                                <span>Atrasado</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success" style="padding: 5px">Ativo</span>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>43</td>
                                        <td><a href="#">Sérgio Castro</a></td>
                                        <td>Estoque</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">refresh</i></button>
                                                <span>Devolvido</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-warning" style="padding: 5px">Pausado</span>
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
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>44</td>
                                        <td><a href="#">Maria Rosália</a></td>
                                        <td>Biomedicina</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">done</i></button>
                                                <span>Pago</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-light"
                                                style="padding: 5px">Aguardando</span></td>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>45</td>
                                        <td><a href="#">Ruth Santos</a></td>
                                        <td>Costureira</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">clear</i></button>
                                                <span>Atrasado</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger" style="padding: 5px">Recesso</span>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>46</td>
                                        <td><a href="#">Flávio Jorge Júnior</a></td>
                                        <td>Estoque</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">refresh</i></button>
                                                <span>Devolvido</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-info" style="padding: 5px">Em aprovação</span>
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
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>47</td>
                                        <td><a href="#">Rafael Lima</a></td>
                                        <td>Manutenção</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">done</i></button>
                                                <span>Pago</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-dark" style="padding: 5px">Experiência</span>
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
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>48</td>
                                        <td><a href="#">José da Costa Silva</a></td>
                                        <td>Aux. Administrativo</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">done</i></button>
                                                <span>Pago</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-primary"
                                                style="padding: 5px">Encostado</span></td>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>49</td>
                                        <td><a href="#">Raquel meticosta</a></td>
                                        <td>Programador HTML</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">clear</i></button>
                                                <span>Atrasado</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success" style="padding: 5px">Ativo</span>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>50</td>
                                        <td><a href="#">Sérgio Castro</a></td>
                                        <td>Estoque</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">refresh</i></button>
                                                <span>Devolvido</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-warning" style="padding: 5px">Pausado</span>
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
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>51</td>
                                        <td><a href="#">Maria Rosália</a></td>
                                        <td>Biomedicina</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">done</i></button>
                                                <span>Pago</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-light"
                                                style="padding: 5px">Aguardando</span></td>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>52</td>
                                        <td><a href="#">Ruth Santos</a></td>
                                        <td>Costureira</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">clear</i></button>
                                                <span>Atrasado</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger" style="padding: 5px">Recesso</span>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>53</td>
                                        <td><a href="#">Flávio Jorge Júnior</a></td>
                                        <td>Estoque</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">refresh</i></button>
                                                <span>Devolvido</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-info" style="padding: 5px">Em aprovação</span>
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
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>54</td>
                                        <td><a href="#">Rafael Lima</a></td>
                                        <td>Manutenção</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">done</i></button>
                                                <span>Pago</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-dark" style="padding: 5px">Experiência</span>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>55</td>
                                        <td><a href="#">Ruth Santos</a></td>
                                        <td>Costureira</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">clear</i></button>
                                                <span>Atrasado</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger" style="padding: 5px">Recesso</span>
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
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>56</td>
                                        <td><a href="#">Flávio Jorge Júnior</a></td>
                                        <td>Estoque</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">refresh</i></button>
                                                <span>Devolvido</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-info" style="padding: 5px">Em aprovação</span>
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
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>57</td>
                                        <td><a href="#">Rafael Lima</a></td>
                                        <td>Manutenção</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">done</i></button>
                                                <span>Pago</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-dark" style="padding: 5px">Experiência</span>
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
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>58</td>
                                        <td><a href="#">Rafael Lima</a></td>
                                        <td>Manutenção</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">done</i></button>
                                                <span>Pago</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-dark" style="padding: 5px">Experiência</span>
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
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>59</td>
                                        <td><a href="#">Rafael Lima</a></td>
                                        <td>Manutenção</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">done</i></button>
                                                <span>Pago</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-dark" style="padding: 5px">Experiência</span>
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
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>60</td>
                                        <td><a href="#">Flávio Jorge Júnior</a></td>
                                        <td>Estoque</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="material-icons text-sm"
                                                        aria-hidden="true">refresh</i></button>
                                                <span>Devolvido</span>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-info" style="padding: 5px">Em aprovação</span>
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
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js" integrity="sha256-2RS1U6UNZdLS0Bc9z2vsvV4yLIbJNKxyA4mrx5uossk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMGhxJOz7GYvZvFw5rQm8IHmvLtQ0I7oztaC2w" crossorigin="anonymous" />

    <script>
        $(document).ready(function() {
            var table = $('#empreendimentos').DataTable({
                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.13.4/i18n/pt-BR.json",
                    paginate: {
                        previous: "<span class='material-icons'>keyboard_arrow_left</span>",
                        next: "<span class='material-icons'>keyboard_arrow_right</span>"
                    }
                },
                paging: true,
                ordering: true,
                info: true,
                responsive: true,
                pageLength: 10,
                stateSave: true,
            });
        });
    </script>
@endsection
