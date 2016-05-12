<!-- start-form-->
<form class="form-horizontal" action="index.html" method="post">
  <div class="form-group">
    <label for="nome">Nome Completo:</label>
    <input type="text" name="nome" class="form-control" placeholder="Digite seu nome aqui" required="required">
    <label for="email">E-mail:</label>
    <input type="email" name="email" class="form-control" placeholder="email@exemplo.com.br" required="required">
    <label for="telefone">Telefone:</label>
    <input type="tel" name="telefone" class="form-control" placeholder="Somente números com o DDD" required="required">
    <label for="data">Data do Evento:</label>
    <input type="date" name="data" class="form-control" placeholder="Data do Evento" required="required">
    <label for="numero">Número de Pessoas:</label>
    <input type="number" name="numero" class="form-control" value="20" step="2" min="10" max="140" required="required">
    <label for="local">Local do Evento:</label>
    <select class="form-control" name="local" required="required">
      <option>Chácara</option>
      <option>Salão</option>
      <option>Residência</option>
    </select>
    <label for="tipo">Tipo de Evento:</label>
    <select class="form-control" name="tipo" required="required">
      <option>Casamento</option>
      <option>Festa Infantil</option>
      <option>Festa 15 anos</option>
      <option>Evento Corporativo</option>
    </select>
    <label for="cidade">Cidade:</label>
    <select class="form-control" name="cidade" required="required">
      <option>São Roque</option>
      <option>Mairinque</option>
      <option>Araçariguama</option>
      <option>Ibiúna</option>
      <option>Alumínio</option>
      <option>Sorocaba</option>
    </select>

    <label for="msg">Informações Adicionais:</label>
    <textarea name="msg" rows="8" cols="40" class="form-control" placeholder="Digite mais detalhes do evento" required="required"></textarea>
  </div>
  <div class="submit-btn">
    <form>
      <input type="submit" value="Enviar" class="btn btn-primary" >
    </form>
  </div>



</form>
