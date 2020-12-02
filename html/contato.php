<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="fullstack";


    $conn = mysqli_connect($server, $username, $password, $database);

    if (!$conn){
        die ("Falha na conexão com o BD " . mysqli_connect_errno());
    }

    if(isset($_POST['nome'])&& isset($_POST['idade'])&& isset($_POST['email'])&& isset($_POST['genero'])&& isset($_POST['mensagem'])){

        $nome=$_POST['nome'];
        $idade=$_POST['idade'];
        $email=$_POST['email'];
        $genero=$_POST['genero'];
        $mensagem=$_POST['mensagem'];

        $sql="insert into contato (nome,idade,email,genero,mensagem) values('$nome','$idade','$email','$genero','$mensagem')";
        $result=$conn->query($sql);
    }
    
    
    ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Stack Elletro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">   
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/contato.css">
</head>

<body>
    <header>
    <?php
            include('menu.html');
        ?>
    </header>
    <main>
        <div class="container" >
            <form method="post"  action="" class="form-group">

                        <div class="form-group">
                            <label type="text" for="nome">Nome: </label>
                            <input type="text"  class="form-control" name="nome" id="nome" required>
                        </div>
                        <div class="form-group">
                            <label type="number" for="idade">idade: </label>
                            <input type="number"class="form-control" name="idade" id="idade"  required>
                        </div>
                        <div class="form-group">
                        <label for="email">E-mail: </label> 
                            <input type="email" class="form-control" name="email" id="email"  aria-describedby="emailHelp" required     placeholder="name@example.com"> 
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="masculino"name="genero" value="masculino" >
                            <label class="form-check-label" for="masculino">Masculino</label>                              
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="feminino"name="genero" value="feminino" >
                            <label class="form-check-label" for="feminino">Feminino</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="outro"name="genero" value="outro">
                            <label class="form-check-label" for="outro">Outro</label>                 
                        </div>
                        <div class="form-group envioFormulario" style="display: flex; align-items: center; padding: 0 5px;">
                            <label class="form-check-label" for="mensagem" >Mensagem: </label> 
                            <textarea name="mensagem" id="descricao" cols="30" rows="5" style="margin: 0 10px;" required></textarea>
                            <button type="submit"  class="btn btn-danger"name="submit" value="Enviar">Enviar</button>
                        </div>
                        
            </form>
        </div>
    </main>
    <footer>
        <p>Conheça nossas redes sociais</p>
        <div class="containerGeral">
            <div class="redesSociais" id="twitter">
                <a href="https://twitter.com/"><img src="../imagens/redes sociais/twitter.png" alt="Twitter"></a>
            </div>
            <div class="redesSociais" id="youtube">
                <a href="https://www.youtube.com/"><img src="../imagens/redes sociais/youtube.png" alt="Youtube"></a>
            </div>
            <div class="redesSociais" id="facebook">
                <a href="https://www.facebook.com/"><img src="../imagens/redes sociais/facebook.png" alt="Facebook"></a>
            </div>
            <div class="redesSociais" id="instagram">
                <a href="https://www.instagram.com/"><img src="../imagens/redes sociais/instagram.png" alt="Instagram">
            </div>
        </div>
        <img class="formaDePagamento"src="../imagens/forma-de-pagamento.png" alt="Formas de pagamento">
    </footer>
</body>

</html>