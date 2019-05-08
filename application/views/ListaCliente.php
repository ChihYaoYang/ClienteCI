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