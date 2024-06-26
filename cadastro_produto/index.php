<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Cadastro de Produtos</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="images/box_open_products_package_icon.png" alt="product" class="img-product">
            </div>
            <div class="col-8">
                <form method="GET" action="controller/save.php">
                    <div class="mt-3 form-floating">
                        <input type="number" class="form-control desabilitado" id="codigo" name="codigo" readonly>
                        <label for="codigo" class="form-label">Código</label>
                    </div>
                    <div class="mt-3 form-floating">
                        <input type="text" class="form-control" id="nome" name="nome">
                        <label for="nome" class="form-label">Nome do Produto</label>
                    </div>
                    <div class="mt-3 form-floating">
                        <input type="text" class="form-control" id="valor" name="valor">
                        <label for="valor" class="form-label">Valor</label>
                    </div>
                    <div class="mt-3 form-floating">
                        <div class="row">
                            <div class="col">
                                <button type="button" class="btn btn-primary form-control botaoNovo">
                                    Novo
                                </button>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary form-control botaoSalvar">
                                    Salvar
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h2>Produtos Cadastrados</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-light table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome do Produto</th>
                            <th>Valor</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>