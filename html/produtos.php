<?php
    $server="localhost";
    $username="espacolucas";
    $password="123456";
    $database="fullstack";


    $conn = mysqli_connect($server, $username, $password, $database);

    if (!$conn)
        die ("Falha na conexão com o BD " . mysqli_connect_errno());
    

    ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Stack Elletro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">   
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/produtos.css">
    <script src="../javascript/funcoes.js"></script>
</head>

<body>
    <header>
        <?php
            include('menu.html');
        ?>
    </header>
    <main>
        <div class="container-fluid" >
            <div class="categorias">
                <h2>Categorias</h2>
                <ul>
                    <li onclick="exibirTodos()">Todos(12)</li>
                    <li onclick="filtrar('televisao')">Televisão (3)</li>
                    <li onclick="filtrar('celular')">Celular (3)</li>
                    <li onclick="filtrar('maquinaDeLavar')">Máquina de lavar (1)</li>
                    <li onclick="filtrar('geladeira')">Geladeira (3)</li>
                    <li onclick="filtrar('microondas')">Microondas (2)</li>
                </ul>
            </div>
            <div class="products">
                <?php
                        $sql="Select * from produtos";
                        $result=$conn->query($sql);
                
                        if($result->num_rows>0){
                            while($rows=$result->fetch_assoc()){
                            
                ?>
                                <div class="box-produtos" id="<?php echo $rows["categoria"];?>"  style="display: block;">
                                    <img class="pictureProduct"src="..<?php echo $rows["nomeImagem"];?>" alt="Celular Motorola" width="170px" onclick="destaque(this)">
                                    <p class="nomeAparelho"><?php echo $rows["descricao"];?></p>
                                    <hr>
                                    <p class="priceFrom">De: R$<?php echo $rows["precoAnterior"];?></p>
                                    <p class="priceTo">Por: R$<?php echo $rows["preco"];?></p>
                                </div>
                <?php
                            }
                        }else{
                            echo "Nenhum produto cadastrado";
                        }
                ?>


            </div>
        </div>
    </main>


    
</body>

</html>