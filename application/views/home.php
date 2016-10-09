<style>
    /* Full-width input fields */
    input[type=text], input[type=password] {
        width: 50%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: auto;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    /* Center the image and position the close button */
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
    }

    img.avatar {
        width: 40%;
        border-radius: 50%;
    }

    .container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0, 0, 0); /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
        padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: red;
        cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
        from {
            -webkit-transform: scale(0)
        }
        to {
            -webkit-transform: scale(1)
        }
    }

    @keyframes animatezoom {
        from {
            transform: scale(0)
        }
        to {
            transform: scale(1)
        }
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 200px) {
        span.psw {
            display: block;
            float: none;
        }

        .cancelbtn {
            width: auto;
        }
    }
</style>
<center>
    <div class="col-lg-8">
        <img src="imagens/logo.png" class="img-circle" alt="Cinque Terre" width="304" height="236">
    </div>
    <div class="col-xs-4">
        <input type="text" class="form-control" placeholder="Modelo do Veiculo"><br>
        <button type="button" class="btn btn-info">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Pesquisar &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</button>

    </div>
</center><br>

<div class="container-fluid">
    
     
     
     </div>



<div class='col-xs-12'>
    <h3>Veiculos em Destaque</h3><br><br>
</div>

<div class="col-sm-12">
<?php foreach ($veiculos as $veiculo) { ?>
    <div class="col-sm-2" style="text-align:center; background-color: lightgray; color: black">
        <h3><?= $veiculo->marca ?>-<?= $veiculo->modelo ?></h3>
        <img src="./fotos/<?= $veiculo->foto ?>" style="width: 120px; height: 80px;">
        <h5>R$ <?= number_format($veiculo->preco, 2, ',', '.') ?></h5>
        <h6>Ano: <?= $veiculo->ano ?></h6>
        <button data-toggle="collapse" data-target="#opcoes" class="btn btn-danger btn-block">Enviar Proposta
        </button>
        </br>
        <div id="opcoes" class="collapse">

            <button onclick="document.getElementById('id01').style.display = 'block'">Com Cadastrado</button>
            <a href="<?= base_url('clientes/open_incluir') ?>" class="btn btn-success btn-block" role="button"> Sem Cadastro </a>
            &nbsp;
        </div>


        <!-- Button to open the modal login form -->


        <!-- The Modal -->
        <div id="id01" class="modal">
            <span onclick="document.getElementById('id01').style.display = 'none'" class="close" title="Close Modal">&times;</span>

            <!-- Modal Content -->
            <form class="modal-content animate" action="action_page.php">
                <div class="imgcontainer">
                    <img src="img_avatar2.png" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                    <label><b>Usuário</b></label>
                    <input type="text" placeholder="Nome do Usuário" name="uname" required>

                    <label><b>Senha</b></label>
                    <input type="password" placeholder="Senha" name="psw" required>

                    <button type="submit">Login</button>

                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display = 'none'"
                            class="cancelbtn">Cancelar
                    </button>

                </div>
            </form>
        </div>
    </div>

<?php } ?>
</div>
</body>
</html>

