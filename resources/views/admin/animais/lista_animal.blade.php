@include('layout.base')

<h1>Lista De animais</h1>



<div class="container">
    <table class="table table-bodered">
        <thead>
            <th>Id</th>
            <th>Nome</th>
            <th>Especie</th>
            <th>Opções</th>
        </thead>
    
        <tbody>
            
            
            @foreach ($registros as $registro)
    
            <tr>
                <td>{{$registro->idani}}</td>
                <td>{{$registro->nome}}</td>
                <td>{{$registro->especie}}</td>
                <td><a href="{{route('admin.animais.excluir_animal',$registro->idani)}}" class="btn btn-danger" ><i class="far fa-trash-alt"></i></a>
                    <a href="{{route('admin.animais.editar_animal',$registro->idani)}}" class="btn btn-primary" ><i class="fas fa-edit"></i></a>
                </td>
                
            </tr>
            @endforeach
            
        </tbody>
    </table>
    

</div>
<br>
<div class="text-center">
    <a href="{{route('admin.animais.adicionar_animal')}}" class="btn btn-success"> adicionar_animal</a>
</div>


<div class="mt-4">
    @include('layout.includes.rodape')
  </div>
  