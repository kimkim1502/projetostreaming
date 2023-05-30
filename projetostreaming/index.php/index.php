<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="
        width=device-width, initial=scale=1">
        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="
        stylesheet">
        <title> cadastro </title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">cadastro</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../Novo-Usuario.php/Novo-Usuario.php">Novo Usuario</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../Listar-Usuario.php/Listar-Usuario.php">Listar Usuarios</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav> 
           <div class="container">
            <div class="row">
             <div class="col mt-5">
              <?php              
            switch("@_REQUEST"){
              case "novo";
                 include("Novo-Usuario.php");
          break;
            case "listar";
               include("Listar-Usuario.php");
           break;
            case "salvar":
              include("salvar-usuario.php");
              break;
              case "editar":
                include("editar-usuario.php");
                break;
            default;
              print "<h1>Bem vindos!</h1>";
              
            }

          ?>
             </div>
            </div>
           </div>
           
        <script> src="js/bootstrap.bundle.min.js">
        </script>
        
    </body>
</html>

