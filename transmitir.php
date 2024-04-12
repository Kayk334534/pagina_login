<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if($email == 'kayk@gmail.com' and $senha == '12345'){
            echo("é isso aí");
        }else{
            echo("cai fora");
        }
    }
?>