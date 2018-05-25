@extends('NavBar')
@section('body')

    <div class="container">

        <h3>Listar Consultas</h3> </br>

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

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nome Paciente</th>
                    <th>Nome Médico</th>
                    <th>Queixa</th>
                    <th width="30%">Opções</th>
                </tr>
            </thead>

            <!-- DADOS -->

            <tbody>
                @foreach($consultas as $consulta)

                <tr class="trItens">
                    <td class="tex">{{$consulta['NomePaciente']}}</td>
                    <td class="tex">{{$consulta['NomeMedico']}}</td>
                    <td class="tex">{{$consulta['Queixa']}}</td>
    
                    <td>
                        <a href="{{route('consultaVisualizar', ['id' => $consulta['id']])}}" class="btn btn-primary">Visualizar</a>
                        <a href="{{route('consultaEditar', ['id' => $consulta['id']])}}" class="btn btn-warning">Editar</a>
                        <a href="{{route('consultaExcluir', ['id' => $consulta['id']])}}" class="btn btn-danger">Excluir</a>
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