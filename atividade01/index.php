<!--
Nome
E-mail
Telefone
Data de nascimento
Observações
Botão de envio 

Dados Complementares
Data de nascimento
Observações
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CadastroTableWear</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    
    <style>
        .form-group input:focus {
            border-color: #8b5cf6;
            box-shadow: 0 0 0 3px rgba(8, 6, 13, 0.2);
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #141415;
            border-radius: 8px;
            font-size: 1rem;
            outline: none;
            box-sizing: border-box;
            transition: border-color 0.2s, box-shadow 0.2s;
        }
    </style>


    <section>
        <h1>
            Se cadastre!
        </h1>
        <div class="card-cadastro">

            <!--ação de cadastro-->
            <form action="" method="post">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required>
                </div>

                <form action="" method="post">
                    <div class="form-group">
                        <label for="email"><E-mail></E-mail>E-mail</label>
                        <input type="text" name="email" id="email" placeholder="Digite seu email" required>
                    </div>
                    <!--forma de grupo-->
                    <div class="form-group">
                        <label for="data_nascimento">Data de Nascimento:</label>
                        <input type="date" name="data_nascimento" id="data_nascimento" required>
                    </div>

                    <div class="form-group">
                        <label for="Telefone">Telefone:</label>
                        <input type="Telefone" name="Telefone" id="Telefone" placeholder="(19) 99999999" required>
                    </div>

                    <div class="form-group">
                        <label for="dados_complementares">Dados Complementares:</label>
                        <input type="text" name="dados_complementares" id="dados_complementares"
                            placeholder="Ex: Genero, raça, etnia..">
                        <!--o placeholder serve pra colocar o texto mais opaco dentro do campo-->
                    </div>

                    <input type="submit" value="Cadastrar" class="btn-cadastrar">
                </form>
    </section>
    <?php require_once '../footer.php' ?>
</body>

</html>