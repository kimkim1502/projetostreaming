<?php
    switch($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $idade = $_POST["idade"];

            $sql = "INSERT INTO usuarios (nome, email, senha, idade) VALUES
            ('{$nome}', '{$email}', '{$senha}', '{$idade}')";

            $res = $conn->query($sql);

             if($res==true){
                print "<script>alert('assinatura feita!');</script>";
                print "<script>location.href='?page=listar;</script>";
             }else{
                print "<script>alert('assinatura invalida!');</script>";
                print "<script>location.href='?page=listar;</script>";

             }
            break;

            case 'editar':
               $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $idade = $_POST["idade"];

            $sql = "UPDATE usuarios SET
                         nome='{$nome}',
                         email='{$email}',
                         senha='{$senha}',
                         idade='{$idade}'
                         WHERE
                         id=".$_REQUEST["id"];
            
            $res = $conn->query($sql);

            if($res==true){
               print "<script>alert('assinatura renovada com sucesso!');</script>";
               print "<script>location.href='?page=listar;</script>";
            }else{
               print "<script>alert('renovação da conta invalida!');</script>";
               print "<script>location.href='?page=listar;</script>";

            }
                break;

                case 'excluir':
                    
                   $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"]  

                   $res = $conn->query($sql);

            if($res==true){
               print "<script>alert('Assinatura Cancela Com Sucesso!');</script>";
               print "<script>location.href='?page=listar;</script>";
            }else{
               print "<script>alert('Não Foi Possivel Cancelar A Conta!');</script>";
               print "<script>location.href='?page=listar;</script>";

            }
                    break;
    }