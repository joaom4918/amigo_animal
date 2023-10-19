    <label for="nome">Nome</label>
      <input type="text" name="nome" class="form-control"  value="{{isset($registro->nome)?$registro->nome:''}}" placeholder="Digite do animal"> <br>
      <label for="especie">Especie</label>
       <select name="especie" value="{{isset($registro->especie)?$registro->especie:''}}" class="form-control">
          <option value="cao">Cão</option>
          <option value="gato">Gato</option>
          <option value="ave">Ave</option>
          <option value="peixe">Peixe</option>
          <option value="Outro">Outro</option>
       </select>
       <label for="data_chegada"> Data que o Animal Chegou para Adoção</label>
       <input  type="date" name="data_chegada" value="{{isset($registro->data_chegada)?$registro->data_chegada:''}}" class="form-control"><br>
       <input type="file" name="imagem" value="{{isset($registro->imagem)?$registro->imagem:''}}"><br>
       <label for="descricao">Descricao</label> <br>
       <textarea name="descricao" id="" value="{{isset($registro->descricao)?$registro->descricao:''}}"cols="30" rows="10"></textarea><br>
  
      