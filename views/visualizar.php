<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Peças</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
<header>
      <nav class="navbar">
        <a href="http://127.0.0.1/list/index.php" class="logo">Lista de Peças</a>
        <ul>
          <li><a href="visualizar.php">Visualizar Tabela</a></li>
        </ul>
      </nav>
</header>

<h1>Lista de Peças</h1>
<div id="msg"></div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">DATA</th>
      <th scope="col">QUANTIDADE</th>
      <th scope="col">PRODUTO</th>
      <th scope="col">PREÇO UNITÁRIO</th>
      <th scope="col">PREÇO TOTAL</th>
      <th scope="col">AÇÕES</th>
    </tr>
  </thead>
  <tbody>
      <?php
        require("../vendor/autoload.php");
        use \Models\ClassDB;
        $obj = new ClassDB();
        $row=$obj->selectDB(
                "*",
                "list",
                "order by id",
                array()
            );
        //while
        while($rows=$row->fetch(\PDO::FETCH_ASSOC)):
            
      ?>
    <tr>
      <th scope="row"><?=$rows['id'];?></th>
      <td><?=$rows['dataList'];?></td>
      <td><?=$rows['qtd'];?></td>
      <td><?=$rows['prod'];?></td>
      <td><?=$rows['precoUni'];?></td>
      <td><?=number_format($rows['qtd']*$rows['precoUni'],2,",",".");?></td>
      <td><a href="<?php echo "../controllers/ControllerDelete.php?id={$rows['id']}" ?>"><i id="fa-trash" class="fa fa-trash"></i></a>  <a href="<?php echo "../views/update.php?id={$rows['id']}" ?>"><i id="fa-edit" class="fa fa-edit"></i></a></td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../public/js/script.js"></script>
</body>
</html>