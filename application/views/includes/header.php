<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema Comércio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!---Bootstrap CSS--->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!--Fontawesome--->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body>
        <!---Menu--->
        <nav class="navbar navbar-dark btn-primary  navbar-expand-md">
            <a class="navbar-brand" href="<?= $this->config->base_url(); ?>"><i class="fas fa-store"></i>Sistema Comércio</a>
            <!---Menu mobile--->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a href="#" id="menuCliente" class="nav-link dropdown-toggle text-white" data-toggle="dropdown">Clientes</a>
                        <div class="dropdown-menu" aria-labelledby="menuCliente">
                            <a href="<?= $this->config->base_url() . 'Cliente/listar' ?>" class="dropdown-item">Listar</a>
                            <a href="<?= $this->config->base_url() . 'Cliente/cadastrar' ?>" class="dropdown-item">Cadastrar</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url() . 'Venda/listar'; ?>">Vendas</a>
                    </li>
                </ul>
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item"><a class="nav-link text-light" href="<?= base_url() . 'Usuario/sair' ?>">
                            Sair  <i class="fas fa-sign-out-alt"></i></a>
                    </li>
                </ul>
            </div>
        </nav>