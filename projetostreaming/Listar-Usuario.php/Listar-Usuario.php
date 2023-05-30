<h1>Listar-Usuario</h1>
<?php
    
    if($qtd > 0){
        print "<table class='table table-hover
        table-striped table-bordered'>";
        print "<try>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>E-mail</th>";
        print "<th>Idade</th>";
        print "<th>ações</th>";
        print "</try>";
          while($row = $res->fetch_object()){
           print "<try>";
           print "<td>".$row->id."</td>";
           print "<td>".$row->nome."</td>";
           print "<td>".$row->email."</td>";
           print "<td>".$row->idade."</td>";
           print "<td>
           <button onclick=\"location.hr
           ef='?page=editar&id=".$row->id."';\" 
           class='btn btn-success'>Editar</button>
           <button onclick=\"if(confirm('tem certeza que deseja excluir?'){location.href='?page=salvar&acao=excluir&id=".$row->id."}else{false;}\" class='btn btn-danger'>Excluir</button>                  
                 </td>";
           print "</try>";
          }
          print "</table>";
    }else{
        print "<p class='alert alert-danger'>Não
        encontrou resultados</p>";
    }
    
?>
<li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../index.php/index.php">Home</a>
    </li>