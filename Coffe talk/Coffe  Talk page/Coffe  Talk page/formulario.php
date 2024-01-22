<?php
    if(isset($_POST['submit'])){
        /*
        print_r($_POST['nome']);
        print_r($_POST['email']);
        print_r($_POST['senha']);
        print_r($_POST['confirmeSenha']);
        */

    include_once('config.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha= $_POST['senha'];
    $confirmeSenha = $_POST['confirmeSenha'];

    $resultado = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha, confirmeSenha) 
    VALUES('$nome', '$email', '$senha', '$confirmeSenha')");
    
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="css/style.css">
    <title>Coffe Talk page</title>
</head>
<body>
    <header>
        <nav class="navigation">
            <a href="index.html" class="titulo">Coffe Talk</a>
            <ul class="nav-menu">
                <li class="nav-item"><a href="index.html">Home</a></li>
                <li class="nav-item"><a href="sobre.html">Sobre</a></li>
                <li class="nav-item"><a href="formulario.php">Cadastre-se</a></li>
            </ul>
            
        </nav>
    </header>

    <section>
            <div class="formulario">
                <form action="formulario.php" method="POST">
                    <div  class="form-titulo">
                            <h1>Cadastre-se</h1>
                    </div>
                    <div class="entradas">
                        <!-- Entrada para o nome de usuario-->
                        <label for="nome">Nome</label>
                        <input id="nome" type="text" name="nome" placeholder="Digite o seu nome" required>

                        <!-- Entrada para o email-->
                        <label for="email">Email</label>
                        <input id="email" type="text" name="email" placeholder="Digite o email" required>

                        <!-- Entrada para a senha-->
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite a sua senha" required>

                        <!-- Entrada para confirma a senha -->
                        <input id="confirmeSenha" type="password" name="confirmeSenha" placeholder="Confirme a sua senha" required>
                        
                        <button class="btn-form" type="su
                        " name="submit">Entrar</button>


                        <script src="scripts/gsap.min.js"></script>
                        <script src="scripts/main.js"></script>

                    </div>

                </form>
                       
                </div>
            </div>
</section>
</body>
</html>