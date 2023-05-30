<h1>editar-usuario</h1>
<?php
     $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
     $res = $conn->query($sql);
     $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
     <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php
         print $row->id; ?>">
     <div class="mb-3">
        <label>nome</label>
        <input type="text" name="nome" value="
</php print $row->nome; ?>" class="form-control">
</div>
<div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" value="
</php print $row->email; ?>" class="form-control">
</div>
<div class="mb-3">
        <label>senha</label>
        <input type="password" name="senha" 
         class="form-control" required>       
</div>
<div class="mb-3">
        <label>idade</label>
        <input type="date" name="idade"value="
</php print $row->idade; ?>" class="form-control">
</div>
<div class="mb-3">
         <button type="submit" class="btn btn-primary">Enviar</button>
</div>
</form>