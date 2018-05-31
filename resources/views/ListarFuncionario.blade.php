@extends('NavBar')
@section('body')

    <div class="container">

            <h3 style="display: inline">Listar Funcionário</h3>

            <div style="float:right">
                <a href=" {{ route('cadastrar-funcionario') }} " class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Novo</a>
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
                    <th>Tipo de Permissão</th>
                    <th width="30%">Opções</th>
                </tr>
            </thead>

            <tbody>
                @foreach($Funcionarios as $Funcionario)

                <tr class="trItens">
                    <td class="tex">{{$Funcionario['id']}}</td>
                    <td class="tex">{{$Funcionario['Nome']}}</td>
                    <td class="tex">{{$Funcionario['TIPO_PERMISAO']}}</td>
    
                    <td>
                        <a href="{{route('funcionario-visualizar', ['id' => $Funcionario['id']])}}" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> Visualizar</a>
                        <a href="{{route('funcionario-editar', ['id' => $Funcionario['id']])}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> Editar</a>
                        <a href="{{route('funcionario-excluir', ['id' => $Funcionario['id']])}}" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Excluir</a>
                    </td>
                   
                </tr>
                @endforeach	 
            </tbody>

        </table>

        <div class="center">
            {{$paginacao}}
        </div>
    </div>

    <script type="text/javascript">
        $(function(){
            $("#txtBusca").keyup(function(){
                var texto = $(this).val();
                
                $("#trItens tex").css("display", "block");
                $("#trItens tex").each(function(){
                    if($(this).text().indexOf(texto) < 0)
                       $(this).css("display", "none");
                });
            });
        });
    </script>
@endsection