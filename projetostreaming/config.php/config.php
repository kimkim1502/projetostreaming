<?php  
         function con(){
                $HOST= 'localhost';
                $USER= 'root';
                $PASS= '';
                $BASE= 'Cadastro';
            
                $conn = new mysqli{$BASE,$HOST,$USER,$PASS};    
        }