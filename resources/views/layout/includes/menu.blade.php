<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><i class="fas fa-heart"></i> Adote um amigo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="{{route('site.home')}}"><i class="fas fa-home"> Pagina Inicial</i></a>
          <a class="nav-link" href="{{route('listas.lista_caes')}}"><i class="fas fa-dog"> Cães</i></a>
          <a class="nav-link" href="{{route('listas.lista_gatos')}}"><i class="fas fa-cat"> Gatos</i></a>
          <a class="nav-link" href="{{route('listas.lista_aves')}}"><i class="fas fa-crow"> Aves</i></a>
          <a class="nav-link" href="{{route('listas.lista_peixes')}}"><i class="fas fa-fish"> Peixes</i></a>
          <a class="nav-link"  href="{{route('listas.lista_outros')}}" ><i class="fas fa-paw"> Outros</i></a>
          <a class="nav-link" href="{{route('admin.animais.lista_animal')}}"><i class="fas fa-clipboard"> Lista De Animais</i></a>
          
        </div>
      </div>
    </div>
  </nav>


  