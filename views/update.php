<?php
 require("../vendor/autoload.php");
 use Models\ClassDB;

    $id = filter_input(INPUT_GET,"id",FILTER_SANITIZE_SPECIAL_CHARS);

    $obj = new ClassDB();
    $row=$obj->selectDB(
        "*",
        "list",
        "where id=?",
        array($_GET['id'])
    );
    $rows=$row->fetch(\PDO::FETCH_ASSOC);

    $id=$rows['id'];
    $dataList=$rows['dataList'];
    $qtd=$rows['qtd'];
    $prod=$rows['prod'];
    $precoUni=$rows['precoUni'];

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Peças</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/style.css">
  </head>
  <body>
    <header>
      <nav class="navbar">
        <a href="http://127.0.0.1/list/index.php" class="logo">Lista de Peças</a>
        <ul>
          <li><a href="./visualizar.php">Visualizar Tabela</a></li>
        </ul>
      </nav>
    </header>

    <section>
    <h1>Lista de Peças</h1>
    <div id="msg"></div>
      <div class="container">
          <form class="row g-3" method="POST" id="formListUpdate">
              <div class="col-md-1">
                  <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
                <label for="data" class="form-label">Data</label>
                <input type="text" class="form-control" name="dataList" value="<?php echo $rows['dataList']; ?>" id="dataList">
              </div>
              <div class="col-md-1">
                <label for="quant" class="form-label">Quantidade</label>
                  <input type="num" class="form-control" name="qtd" value="<?php echo $rows['qtd']; ?>" id="qtd">
              </div>
              <div class="col-md-1">
                <label for="prod" class="form-label">Produto</label>
                  <input class="form-control" name="prod" value="<?php echo $rows['prod']; ?>" id="prod">
              </div>
              <div class="col-md-1">
                <label for="precoUnitario" class="form-label"> Preço Unitário</label>
                  <input type="num" class="form-control" name="precoUni" value="<?php echo $rows['precoUni']; ?>" id="precoUni">
              </div>
          
              <div class="col-md-1">
                <button type="button" name="btnUpdate" id="btnUpdate">Atualizar</button>
              </div>
          </form>
      </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../public/js/script.js"></script>
  </body>
</html>