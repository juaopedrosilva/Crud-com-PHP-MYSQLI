<?php require_once 'code/conexao.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Crud PHP 7</title>

    <!-- Bootstrap Core CSS -->
    <link href="boostrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="boostrap/font-awesome/css/font-awesome.min.css">
 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <br/>
    <br/>
    <br/>
    <div class="container">

        <!--  -->
        <div class="row">

            <div class="col-lg-12">
                <h2>CRUD COM PHP 7 - Cadastro de Clientes - <a href=""  data-toggle="modal" data-target="#sobre">Sobre</a></h2>
                <hr>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-user"></i> Cadastro de Clientes</h4>
                    </div>
                    <div class="panel-body">
                        <div class="alert alert-info alert-dismissible">
                            <button class="close" data-dismiss="alert">&times;</button>
                            <b>Total:</b> <i>
                            <?php
                                $select1 =  "SELECT * FROM `cadastroclientes`";
                                $select2 = mysqli_query($conn,$select1);
                                $total = mysqli_num_rows($select2);
                                echo $total; 
                            ?></i>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nº</th>
                                        <th>Nome:</th>
                                        <th>Sobrenome:</th>
                                        <th>Telefone:</th>
                                        <th>E-mail</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php
                                            while ($row = mysqli_fetch_assoc($select2)):
                                         ?> 
                                        <tr>
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['nome'];?></td>
                                            <td><?php echo $row['sobrenome'];?></td>
                                            <td><?php echo $row['telefone'];?></td>
                                            <td><?php echo $row['email'];?></td>
                                            <td>
                                                <a href="code/apagar.php?id=<?php echo $row['id']; ?>"><label class="label label-danger" data-toggle="tooltip"  data-placement="bottom" title="Apagar"><i class="fa fa-close"></i></label></a>
                                                <a href="formulario.php?id=<?php echo $row['id']; ?>"><label class="label label-info" data-toggle="tooltip"  data-placement="bottom" title="Editar"><i class="fa fa-edit"></i></label></a>
                                            </td> 
                                        </tr> 
                                        <?php endwhile;?>
                                   
                                </tbody>
                            </table>
                        </div>
                        <p class="text-right"><i><b>Total:</b><?php echo $total; ?></i></p>
                    </div>
                    <div class="panel-footer">
                        <a href="" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Enviar</a>
                    </div>
                </div>

                <div class="modal fade modal-xs-1" id="myModal"> <!--Star Modal -->
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span arial-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Enviar</h4>
                            </div>
                            <div class="modal-body">
                                <form action="code/enviar.php" method="post">
                                    <div class='has-default'>
                                        <label for='nome' class='control-label'>Nome:</label>
                                        <input type='text' value='' class='form-control' required="" name='nome' id='nome'>
                                    </div>
                                    <div class='has-default'>
                                        <label for='sobrenome' class='control-label'>Sobrenome:</label>
                                        <input type='text' value='' class='form-control' required="" name='sobrenome' id='sobrenome'>
                                    </div>
                                    <div class='has-default'>
                                        <label for='telefone' class='control-label'>Telefone:</label>
                                        <input type='text' value='' class='form-control' required="" name='telefone' id='telefone'>
                                    </div>
                                    <div class='has-default'>
                                        <label for='email' class='control-label'>E-mail:</label>
                                        <input type='text' value='' class='form-control' required="" name='email' id='email'>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                                </form>
                            </div>                               
                        </div>
                    </div>
                </div>  <!-- End Modal -->

                <div class="modal fade modal-xs-1" id="sobre"> <!--Star Modal -->
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span arial-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Sobre</h4>
                                </div>
                                <div class="modal-body">
                                    <p><b>Nome: </b> CRUD COM PHP 7 - Cadastro de Clientes</p>
                                    <p><b>Autor:</b> João Pedro Silva</p>
                                    <p><b>Contato:</b> <a href="">pedrojoaoti@gmail.com</a></p>
                                    <p><b>Criação:</b><i>   13/04/2017 - 00:13 até 13/04/2017 - 01:49</i> </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                 </div>                               
                            </div>
                        </div>
                    </div>  <!-- End Modal -->


            </div>

        </div>
    </div>
    <!-- jQuery -->
    <script src="boostrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="boostrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('[data-toggle="tooltip"]').tooltip();
    </script>


</body>

</html>
