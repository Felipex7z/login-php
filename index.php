<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="ft">
        <div class="">
            <form action="cad.php" method="POST">
                <h1>Cadastre-se</h1>
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" placeholder="Digite seu Nome">

                <label for="sobrenome">Sobrenome: </label>
                <input type="text" name="sobrenome" id="sobrenome" placeholder="Digite seu sobrenome">


                <label for="sobrenome">E-Mail: </label>
                <input type="text" name="email" id="email" placeholder="Seu E-mail">


                <label for="sobrenome">Senha: </label>
                <input type="password" name="senha" id="senha" placeholder="Sua senha">


                <label for="sobrenome">Insira novamente a senha: </label>
                <input type="password" name="senha2" id="senha2" placeholder="Insira a senha novamente">

                <div  class="btn">
                <input type="submit" value="Cadastrar">
                </div>





            </form>
        </div>

    </div>
    
</body>
</html>