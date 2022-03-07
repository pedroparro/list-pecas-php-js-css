<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Peças</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/style.css">
  </head>
  <body>
    <header>
      <nav class="navbar">
        <a href="http://127.0.0.1/list/index.php" class="logo">Lista de Peças</a>
        <ul>
          <li><a href="./views/visualizar.php">Visualizar Tabela</a></li>
        </ul>
      </nav>
    </header>

    <section>
    <h1>Lista de Peças</h1>
    <div id="msg"></div>
      <div class="container">
          <form class="row g-3" method="POST" id="formList">
              <div class="col-md-1">
                <label for="data" class="form-label">Data</label>
                <input type="date" class="form-control" name="dataList" id="dataList" required>
              </div>
              <div class="col-md-1">
                <label for="quant" class="form-label">Quantidade</label>
                  <input type="num" class="form-control" name="qtd" id="qtd" required>
              </div>
              <div class="col-md-1">
                <label for="prod" class="form-label">Produto</label>
                  <textarea class="form-control" name="prod" id="prod" required></textarea>
              </div>
              <div class="col-md-1">
                <label for="precoUnitario" class="form-label"> Preço Unitário</label>
                  <input type="num" class="form-control" name="precoUni" id="precoUni" required>
              </div>
          
              <div class="col-md-1">
                <button type="button" name="btnSubmit" id="btnSubmit">Enviar</button>
              </div>
          </form>
      </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./public/js/script.js"></script>
  </body>
</html>