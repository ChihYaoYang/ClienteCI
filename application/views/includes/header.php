<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!---Bootstrap CSS--->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!--Fontawesome--->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    </head>
    <style>
    .breathe-div {
        cursor: Default;
        border: 1px solid #2b92d4;
        border-radius: 15%;
        box-shadow: 0 1px 2px rgba(255, 255, 255, 1);
        overflow: hidden;
        -webkit-animation-timing-function: linear;
        /*緩動 分為 "linear" "ease-in" "ease-out" "ease-in-out" */
        -webkit-animation-name: breathe;
        -webkit-animation-duration: 1500ms;
        /* time animation*/
        -webkit-animation-iteration-count: infinite;
        /*loop animation*/
        -webkit-animation-direction: alternate;
        /*呼吸 animation*/
    }
    @-webkit-keyframes breathe {
        0% {
            opacity: .4;
            box-shadow: 0 1px 2px rgba(217, 210, 210, 1), 0 1px 1px rgba(255, 255, 255, 1) inset;
        }
        100% {
            opacity: 1;
            border: 1px solid rgba(255, 255, 255, 1);
            box-shadow: 0 1px 30px #FFFFFF, 0 1px 20px #FFFFFF inset;
        }
    }
    </style>
    <body>
        <!---Menu--->
        <nav class="navbar navbar-dark btn-primary  navbar-expand-md">
            <a class="navbar-brand breathe-div" href="<?= $this->config->base_url(); ?>"><i class="fas fa-store"></i> Sistema Comércio</a>
            <!---Menu mobile--->
            <div class="collapse navbar-collapse">
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
                    <li class="nav-item"><a class="nav-link text-light" href="<?= base_url().'Usuario/sair' ?>">
                           Sair  <i class="fas fa-sign-out-alt"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
       
        <!---Bootstrap JS--->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>