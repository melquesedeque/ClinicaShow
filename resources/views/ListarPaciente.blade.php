@extends('NavBar')
@section('body')

    <div class="container">

        <h3>Listar Pacientes</h3> </br>

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
                    <th>Nome Paciente</th>
                    <th>Matricula</th>
                    <th>CPF</th>
                    <th width="30%">Opções</th>
                </tr>
            </thead>

            <!-- DADOS -->

            <tbody>
                @foreach($pacientes as $paciente)

                <tr class="trItens">
                    <td class="tex">{{$paciente['Nome']}}</td>
                    <td class="tex">{{$paciente['Matricula']}}</td>
                    <td class="tex">{{$paciente['Cpf']}}</td>
    
                    <td>
                        <a href="{{route('paciente-visualizar', ['id' => $paciente['id']])}}" class="btn btn-primary">Visualizar</a>
                        <a href="{{route('paciente-editar', ['id' => $paciente['id']])}}" class="btn btn-warning">Editar</a>
                        <a href="{{route('paciente-excluir', ['id' => $paciente['id']])}}" class="btn btn-danger">Excluir</a>
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