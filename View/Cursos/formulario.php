<?php include __DIR__.'/../inicio-html.php'; ?>
    <form action="/salvar-curso" method='post'>
      <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" id="descricao" name="descricao" class="form-control" 
        value="<?= isset($curso) ? $curso->getDescricao() : ''; ?> ">
      </div>
      <button class="btn btn-outline-success">Salvar</button>
    </form>   
    <?php include __DIR__.'/../fim-html.php'; ?>