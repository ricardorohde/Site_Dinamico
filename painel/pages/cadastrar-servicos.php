<div class="box-content">
  <h2><i class="fas fa-pen-alt"></i> Cadastrar Serviços</h2>
  <form method="post" enctype="multipart/form-data">

    <?php
      verificaPermissaoPagina(2);
      if(isset($_POST['acao'])){
        if(Painel::insert($_POST)){
          Painel::alert('sucesso','Serviço adicionado com sucesso!');
        }else{
          Painel::alert('erro','Campos vazios não são permitidos!');
        }
      }
    ?>
    <div class="form-group">
      <label>Descreva o Serviço:</label>
      <textarea name="servico"></textarea>
    </div><!--form-group-->
    <div class="form-group">
      <input type="hidden" name="order_id" value="0">
      <input type="hidden" name="nome_tabela" value="tb_site.servicos">
      <input class="btnsubmit" type="submit" name="acao" value="Cadastrar">
    </div><!--form-group-->
  </form>
</div><!--box-content-->
