@extends('NavBar')
@section('body')

    <div class="container">

            {{-- <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                  </form> --}}

        {{-- <div class="input-group">  
            <span class="input-group-addon">Text</span>
            <input type="text" name="pesquisa" class="form-control mb-2 mr-sm-2 mb-sm-0"/>
        </div>
        <button type="button" class="btn btn-primary">
            <span class="glyphicon glyphicon-search"></span> Buscar
        </button> --}}

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th width="30%">Opções</th>
                </tr>
            </thead>
            <!-- DADOS -->
            <tbody>
                @foreach($consultas as $consulta)
                <tr>
                    <td>{{$consulta['NomePaciente']}}</td>
                    <td>{{$consulta['NomeMedico']}}</td>
                    <td>{{$consulta['Queixa']}}</td>
    
                    <td>
                        <a href="{{route('consultaVisualizar', ['id' => $consulta['id']])}}" class="btn btn-primary">Visualizar</a>
                        <a href="{{route('consultaEditar', ['id' => $consulta['id']])}}" class="btn btn-warning">Editar</a>
                        <a href="" class="btn btn-danger">Excluir</a>
                    </td>
                   
                </tr>
                @endforeach	 
            </tbody>
            <!-- DADOS [FIM] -->
        </table>
    </div>
@endsection