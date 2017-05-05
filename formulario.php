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

        <!-- Marketing Icons Section -->
        <div class="row">
            <?php 
                $id = $_GET['id'];
                $select1 =  "SELECT * FROM `cadastroclientes` where `id` = $id";                             
                $select2 = mysqli_query($conn,$select1);    
                $linha = mysqli_fetch_assoc($select2);      
                if ($id){} else{header('Location: index.php');}               
            ?>
            <div class="col-lg-8 col-lg-offset-2">
                <a href="index.php" class="btn btn-default"><i class="fa  fa-mail-reply"></i> Voltar</a>
                <hr>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-edit"></i> Formúlario de Edição</h4>
                    </div>
                    <div class="panel-body">
                        <form class='form-horizontal' action='code/editar.php?id=<?php echo $linha['id']; ?>' method='POST'>
                            <div class='has-default'>
                                    <label for='nome' class='control-label'>Nome:</label>
                                    <input type='text' value="<?php echo $linha['nome'];?>" class='form-control' name='nome' id='nota1'>
                            </div> 
                            <div class='has-default'>
                                    <label for='nome' class='control-label'>Sobrenome:</label>
                                    <input type='text' value="<?php echo $linha['sobrenome'];?>" class='form-control' name='sobrenome' id='nota1'>
                            </div> 
                            <div class='has-default'>
                                    <label for='nome' class='control-label'>Telefone:</label>
                                    <input type='text' value="<?php echo $linha['telefone'];?>" class='form-control' name='telefone' id='nota1'>
                            </div> 
                            <div class='has-default'>
                                    <label for='nome' class='control-label'>E-mail:</label>
                                    <input type='email' value="<?php echo $linha['email'];?>" class='form-control' name='email' id='nota1'>
                            </div> 
                         
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-primary">Editar</button>
                         </form>
                    </div>
                </div>

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
