<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Minha Prova</title>
    <?php
        include './estilos/estilos.php';
        include './scripts/scripts.php';
    ?>
    <style>
    #btnGerarPdf{
        margin-top: 25px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }
    </style>
</head>
<body>
    <!-- Navbar Minha Prova -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Minha Prova</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto"></ul>
    </div>
    </nav>
    <!-- Fim Navbar Minha Prova -->

    <!-- Formulário Pré Prova -->
    <div class="container mt-5">
        <form>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Digite o nome do seu aluno</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>Digite a turma do aluno</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>Digite a data da prova</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label>Digite o título da prova</label>
                <input type="text" class="form-control">
            </div>
        </form>    
    </div>
    <!-- Fim Formulário Pré Prova -->

    <!-- Formulario para Adicionar/Remover Pergunta -->
    <form>
        <div class="container mt-5" id="adicionarQuestao">
            <div class="col">
            <button type="button" class="btn btn-primary" id="addQuestion"><i class="fas fa-plus mr-2"></i>Adicionar Pergunta</button>
            </div>
        </div>
    </form>
    <!-- Fim Formulario para Adicionar/Remover Pergunta -->

    <!-- Gerar PDF -->
    <div class="container" id="btnGerarPdf">
        <button type="button" class="btn btn-primary"><i class="fas fa-file-pdf mr-2"></i>Gerar PDF</button>
    </div>
    <!-- Fim Gerar PDF -->

    <?php
        include './scripts/addRemoveQuestion.php';
    ?>
</body>
</html>