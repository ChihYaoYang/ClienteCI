<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>FormCliente</title>
        <!---Bootstrap CSS--->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!--Fontawesome--->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body>
        <!---Menu--->
        <nav class="navbar navbar-dark bg-primary navbar-expand-md">
            <a class="navbar-brand" href="<?= $this->config->base_url(); ?>"><i class="fas fa-store"></i> Sistema Comércio</a>
            <!---Menu mobile--->
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a href="#" id="menuCliente" class="nav-link dropdown-toggle" data-toggle="dropdown">Clientes</a>
                        <div class="dropdown-menu" aria-labelledby="menuCliente">
                            <a href="<?= $this->config->base_url() . 'Cliente/listar' ?>" class="dropdown-item">Listar</a>
                            <a href="<?= $this->config->base_url() . 'Cliente/cadastrar' ?>" class="dropdown-item">Cadastrar</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() . 'Venda/listar'; ?>">Vendas</a>
                    </li>
                </ul>
                 
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item"><a class="nav-link text-light" href="<?= base_url() . 'Usuario/sair' ?>">
                            Sair  <i class="fas fa-sign-out-alt"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container mt-3">
            <?php
            $mensagem = $this->session->flashdata('mensagem');
            if (isset($mensagem)) {
                echo '<div class="alert alert-success" role="alert">' . $mensagem . '</div>';
            }
            $erro = $this->session->flashdata('erro');
            if (isset($erro)) {
                echo '<div class="alert alert-danger" role="alert">' . $erro . '</div>';
            }
            ?>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= $this->config->base_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cadastro de Cliente</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-md-5 col-xs-12">
                    <form method="POST" action="">
                        <input type="hidden" name="id" id="id" value="<?= (isset($cliente)) ? $cliente->id : ''; ?>">
                        <div>
                            <label for="nome">Nome:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                <input type="text"class="form-control" name="nome" id="nome" value="<?= (isset($cliente)) ? $cliente->nome : ''; ?>">
                            </div>
                        </div>

                        <div>
                            <label for="rg">RG:</label>
                            <div class="input-group mb-2">

                                <input type="text"class="form-control" name="rg" id="rg" value="<?= (isset($cliente)) ? $cliente->rg : ''; ?>">
                            </div>
                        </div>

                        <div>
                            <label for="cpf">CPF:</label>
                            <div class="input-group mb-2">

                                <input type="text"class="form-control" name="cpf" id="cpf" value="<?= (isset($cliente)) ? $cliente->cpf : ''; ?>">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Enviar</button>
                        <button type="reset" class="btn btn-outline-secondary"><i class="fas fa-redo"></i> Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
        <!---Bootstrap JS--->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
