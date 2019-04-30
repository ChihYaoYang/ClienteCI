<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista Clientes</title>
        <!---Bootstrap CSS--->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!--Fontawesome--->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    </head>
    <body>
        <div class="container mt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Lista de Cliente</li>
                </ol>
            </nav>
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
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th>Nome</th>
                        <th>RG</th>
                        <th>CPF</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($clientes as $c) {
                        echo '<tr class="text-center">';
                        echo '<td>' . $c->nome . '</td>';
                        echo '<td>' . $c->rg . '</td>';
                        echo '<td>' . $c->cpf . '</td>';
                        echo '<td class="text-right">'                                                                                                 //id     //parametro
                        . '<a class="btn btn-sm btn-outline-secondary mr-2" href="' . $this->config->base_url() . 'Cliente/alterar/' . $c->id . '"><i class="fas fa-pen"></i> Alterar</a>' .
                        '<a class="btn btn-sm btn-outline-secondary" href="' . $this->config->base_url() . 'Cliente/deletar/' . $c->id . '"><i class="fas fa-times"></i> Deletar</a>' .
                        '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <!---Bootstrap JS--->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>