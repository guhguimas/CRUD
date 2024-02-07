@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('usuarios') }}">Voltar</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @if( Request::is('*/edit'))
                    <form action="{{ url('usuarios/update') }}/{{ $usuario->id }}" method="post">
                    @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nome:</label>
                        <input type="text" name="name" class="form-control" value="{{ $usuario->name  }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">E-mail:</label>
                        <input type="email" name="email" class="form-control" value="{{ $usuario->email }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">CPF:</label>
                        <input type="number" name="cpf" class="form-control" value="{{ $usuario->cpf }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Idade:</label>
                        <input type="text" name="idade" class="form-control" value="{{ $usuario->data  }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Data de Nascimento:</label>
                        <input type="date" name="data nascimento" class="form-control" value="{{ $usuario->data  }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Rua:</label>
                        <input type="text" name="rua" class="form-control" value="{{ $usuario->rua }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Número:</label>
                        <input type="number" name="número" class="form-control" value="{{ $usuario->number }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">CEP:</label>
                        <input type="number" name="cep" class="form-control" value="{{ $usuario->cep }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Cidade:</label>
                        <input type="text" name="cidade" class="form-control" value="{{ $usuario->cidade }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Estado:</label>
                        <input type="text" name="estado" class="form-control" value="{{ $usuario->estado  }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">UF:</label>
                        <input type="text" name="uf" class="form-control" value="{{ $usuario->uf }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Ativo:</label>
                        <input type="True" name="ativo" class="form-control" value="{{ $usuario->ativo }}">
                      </div>

                      <button type="submit" class="btn btn-primary">Atualizar</button>
                    </form>

                    @else

                    <form action="{{ url('usuarios/add') }}" method="post">
                    @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nome:</label>
                        <input type="text" name="name" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">E-mail:</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">CPF:</label>
                        <input type="cpf" name="cpf" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Idade:</label>
                        <input type="number" name="idade" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Data de Nascimento:</label>
                        <input type="date" name="data nascimento" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Rua:</label>
                        <input type="text" name="rua" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Número:</label>
                        <input type="number" name="número" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">CEP:</label>
                        <input type="number" name="cep" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Cidade:</label>
                        <input type="text" name="cidade" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Estado:</label>
                        <input type="text" name="estado" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">UF:</label>
                        <input type="text" name="uf" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Ativo:</label>
                        <input type="True" name="ativo" class="form-control">
                      </div>

                      <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
