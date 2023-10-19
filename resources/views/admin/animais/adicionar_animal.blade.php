@include('layout.base')

<h1>Adicionar animais </h1> 

<div class="container">

   <form action="{{route('admin.animais.salvar_animal')}}" method="post" enctype="multipart/form-data">

      {{ csrf_field() }}
  
      @include('admin.animais.form')
  
   <button class="btn btn-primary"><i class="far fa-save"> Salvar</i></button>
  
  </form>

</div>



