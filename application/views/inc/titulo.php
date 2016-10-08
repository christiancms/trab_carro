<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Revenda Carros </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Revenda Carros</a>
                </div>
                
                
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?= base_url() ?>">Home</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastros <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= base_url('veiculos') ?>">Veículos</a></li>
                                <li><a href="<?= base_url('clientes') ?>">Clientes</a></li>
                                <li><a href="<?= base_url('marcas') ?>">Marcas</a></li>
                                <li><a href="#">Usuários</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Movimentos</a></li>
                        <li><a href="<?= base_url('grafico/clientes') ?>">Gráficos</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Relatórios<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= base_url('relatorio/veiculos') ?>">Veículos</a></li>
                                <li><a href="<?= base_url('relatorio/clientes') ?>">Clientes</a></li>
                                <li><a href="#"> Propostas</a></li>
                                <li><a href="#">Marcas</a></li>
                                <li><a href="#">Usuários</a></li>
                            </ul>
                        </li>



                        <li><a href="#">Utilitários</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?= $this->session->nome ?></a></li>
                        <li><a href="<?= base_url('home/sair') ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>