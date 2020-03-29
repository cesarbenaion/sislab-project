@extends('layouts.app', ['activePage' => 'reserva', 'titlePage' => __('Reserva Páginal Inicial')])

@section('content')
  <div class="content">
    <div class="container-fluid">

                @if (session('status'))
                  <div class="row">
                    <div class="col-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif

        <div class="row">
            <div class="col-md-12">
                <div class="card card-profile">
                    <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                            <i class="material-icons">perm_identity</i>
                        </div>

                    </div>
                    <div class="card-body">

                        @foreach($dadosReserva as $dado)

                            <div class="col-12 text-right">
                                <a href="{{route('reserva.laboratorio.index', $dado->laboratorio_id)}}" class="btn btn-lg btn-info">Voltar Para Tela Inicial <div class="ripple-container"></div></a>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title ">Dados Reserva</h4>
                                    </div>
                                    <div class="card-body table-responsive">

                                        <p class="card-description">
                                        <div class="tim-typo">
                                            <h5>
                                                <span class="tim-note" style="color: black"><b>Laboratório: </b></span>{{$dado->nomeLaboratorio}}
                                            </h5>

                                        </div>
                                        </p>
                                        <p class="card-description">
                                        <div class="tim-typo">
                                            <h5>
                                                <span class="tim-note" style="color: black"><b>Solicitante: </b></span>{{$dado->nomeSolicitante}}
                                            </h5>

                                        </div>
                                        </p>


                                        <p class="card-description">
                                        <div class="tim-typo">
                                            <h5>
                                                <span class="tim-note" style="color: black"><b>Data Reserva: </b></span>{{date('d/M/Y', strtotime($dado->data))}}
                                            </h5>

                                        </div>
                                        </p>

                                        <p class="card-description">
                                        <div class="tim-typo">
                                            <h5>
                                                <span class="tim-note" style="color: black"><b>Hora Inicio Reserva: </b></span>{{$dado->hora_inicio}}
                                            </h5>

                                        </div>
                                        </p>


                                        <p class="card-description">
                                        <div class="tim-typo">
                                            <h5>
                                                <span class="tim-note" style="color: black"><b>Hora Fim Reserva: </b></span>{{$dado->hora_fim}}
                                            </h5>

                                        </div>
                                        </p>

                                        <p class="card-description">
                                        <div class="tim-typo">
                                            <h5>
                                                <span class="tim-note" style="color: black"><b>Observação: </b></span>{{$dado->observacao}}
                                            </h5>

                                        </div>
                                        </p>

                                        <div class="col-12 text-center">
                                            <a href="http://localhost:8000/reserva/laboratorio/2/criar" class="btn btn-lg btn-rose"><i class="material-icons">add_circle</i> Adicionar Equipamento<div class="ripple-container"></div></a>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="card-header card-header-danger">
                                                    <h4 class="card-title ">Equipamentos Reservados</h4>
                                                </div>
                                                <div class="card-body table-responsive">

                                                    <table class="table">
                                                        <thead class="text-left">
                                                            <th>
                                                                {{ __('Equipamento') }}
                                                            </th>
                                                            <th class="text-right" width="20%">
                                                                {{ __('Ação') }}
                                                            </th>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-left">
                                                                    teste
                                                                </td>

                                                                <td class="td-actions text-right">
                                                                    <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Você tem certeza que deseja excluir?") }}') ? this.parentElement.submit() : ''">
                                                                        <i class="material-icons">close</i>
                                                                        <div class="ripple-container"></div>
                                                                    </button>
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

                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-success">
                                        <h4 class="card-title ">Dados de Cadastro da Reserva</h4>
                                    </div>
                                    <div class="card-body table-responsive">

                                        <p class="card-description">
                                        <div class="tim-typo">
                                            <h5>
                                                <span class="tim-note" style="color: black"><b>Cadastrado Por: </b></span>{{$dado->nomeUsuario}}
                                            </h5>

                                        </div>
                                        </p>
                                        <p class="card-description">
                                        <div class="tim-typo">
                                            <h5>
                                                <span class="tim-note" style="color: black"><b>Cadastrado no dia/hora: </b></span>{{date('d/m/yy - h:m:s', strtotime($dado->created_at))}}
                                            </h5>

                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </div>


                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
