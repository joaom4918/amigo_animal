@include('layout.base')

<h1>Atualizar Animal</h1>

<form action="{{route('admin.animais.atualizar_animal',$registro->idani)}}" method="post" enctype="multipart/form-data">

    {{ csrf_field() }}

    <input type="hidden" name="_method" value="put">

    @include('admin.animais.form')

    <button class="btn btn-primary"><i class="far fa-save"> Atualizar</i></button>


</form>