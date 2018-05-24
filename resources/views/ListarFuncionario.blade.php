@extends('NavBar')
@section('body')

    <div class="container">

        <h3>Listar Funcionarios</h3> </br>

        {{-- barra de pesquisa --}}
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Buscar" name="search">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i>
                </button>
            </div>
        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Matricula</th>
                    <th>Tipo de Permissão</th>
                    <th width="30%">Opções</th>
                </tr>
            </thead>

            <!-- DADOS -->

            <tbody>
                @foreach($Funcionarios as $Funcionario)

                <tr class="trItens">
                    <td class="tex">{{$Funcionario['Nome']}}</td>
                    <td class="tex">{{$Funcionario['Matricula']}}</td>
                    <td class="tex">{{$Funcionario['TIPO_PERMISAO']}}</td>
    
                    <td>
                        <a href="{{route('funcionario-visualizar', ['id' => $Funcionario['id']])}}" class="btn btn-primary">Visualizar</a>
                        <a href="{{route('funcionario-editar', ['id' => $Funcionario['id']])}}" class="btn btn-warning">Editar</a>
                        <a href="{{route('funcionario-excluir', ['id' => $Funcionario['id']])}}" class="btn btn-danger">Excluir</a>
                    </td>
                   
                </tr>
                @endforeach	 
            </tbody>
            <!-- DADOS [FIM] -->
        </table>
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