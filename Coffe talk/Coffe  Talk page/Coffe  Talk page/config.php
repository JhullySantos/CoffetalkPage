<?php

    $dbHost = 'Localhost';
    $dbUsername ='root';
    $dbPassaword= ''; //tiver um banco de senha você pode coloca-la aqui
    $dbName = 'formulario-jhully';

    $conexao = new mysqli( $dbHost, $dbUsername,$dbPassaword, $dbName);

    /*if($conexao -> connect_errno){
        echo "Erro";
    }else{
        echo"conexão efetuada";
    }
    */
    
?>