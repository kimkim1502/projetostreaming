<h1>Novo-Usuario</h1>
<form action="?page=salvar" method="post">
    <input type="hidenn" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
         <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Senha</label>
         <input type="password" name="Senha" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
         <input type="date" name="idade" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../index.php/index.php">Home</a>
    </li>
</form>