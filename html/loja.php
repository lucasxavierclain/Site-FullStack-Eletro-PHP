<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Stack Elletro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">   
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/loja.css">
    
    <script src="../javascript/funçoes.js"></script>
</head>
<body>
    <header>
        <?php
            include('menu.html');
        ?>
    </header>
    <main>
        <div class="container-endereço">
            <div onmouseout="diminuir(this)"  onmousemove="aumentar(this)" class="endereço bg-danger">
                <p class="textoDoEndereço ">Av. Paulista, 1500 <br>
                    Bela Vista <br>
                    São Paulo <br>
                    SP, 01310-100</p>
            </div>
            <div onmouseout="diminuir(this)" onmousemove="aumentar(this)" class="endereço bg-danger">
                <p class="textoDoEndereço">Av. dos Bandeirantes, 4000 <br>
                    Planalto Paulista <br>
                    São Paulo <br>
                    SP, 04071-000</p>
            </div>
            <div onmouseout="diminuir(this)" onmousemove="aumentar(this)" class="endereço bg-danger">
                <p class="textoDoEndereço">Av. São Miguel, 4205 <br>
                    Vila Rio Branco<br>
                    São Paulo <br>
                    SP, 03871-000</p>
            </div>
        </div>
    </main>
    <footer>
        <img src="../imagens/forma-de-pagamento.png" alt="Formas de pagamento">
    </footer>
</body>
</html>