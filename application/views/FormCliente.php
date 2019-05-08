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
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
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