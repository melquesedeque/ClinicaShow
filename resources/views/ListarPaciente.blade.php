@extends('NavBar')
@section('body')

    <div class="container">

            <h3 style="display: inline">Listar Paciente</h3>

            <div style="float:right">
                <a href=" {{ route('cadastrar-paciente') }} " class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Novo</a>
            </div>
    
            </br></br></br>
            {{-- barra de pesquisa --}}
            <form method="get" action="">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar" name="filtro">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            </br>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th width="30%">Opções</th>
                </tr>
            </thead>

            <tbody>
                @foreach($pacientes as $paciente)

                <tr class="trItens">
                    <td class="tex">{{$paciente['id']}}</td>
                    <td class="tex">{{$paciente['Nome']}}</td>
                    <td class="tex">{{$paciente['Cpf']}}</td>
    
                    <td>
                        <a href="{{route('paciente-visualizar', ['id' => $paciente['id']])}}" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> Visualizar</a>
                        <a href="{{route('paciente-editar', ['id' => $paciente['id']])}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> Editar</a>
                        <a href="{{route('paciente-excluir', ['id' => $paciente['id']])}}" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Excluir</a>
                    </td>
                   
                </tr>
                @endforeach	 
            </tbody>

        </table>
    </div>
</div>

@endsection