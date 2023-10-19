@include('layout.base')

<h1>Lista de Outros Animais</h1>

<div class="row mt-5">

    @foreach ($registros as $registro)

    <div class="col-md-4">
      <div class="card mb-4" style="width: 18rem;"> 
        <img src="{{asset($registro->imagem)}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$registro->nome}}</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">ver mais</a>
        </div>
      </div>

    </div>
    @endforeach

  </div>  

  <div class="mt-4">
    @include('layout.includes.rodape')
  </div>
