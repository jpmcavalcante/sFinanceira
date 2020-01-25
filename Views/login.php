<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/adminlte/dist/css/adminlte.min.css">
    <!--Animate css-->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/animate.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">

    


        <div class="card card-login mx-auto text-center bg-info animated bounceInDown" style="max-width: 25%;">
            <div class="card-header mx-auto bg-info">
                <span> 
                    <img src="<?php echo BASE_URL; ?>assets/img/logo_ms.png" alt="Logo MS Crédito" class="brand-image"
                    style="max-width: 40%;">
                </span>
    
    <!--            <h1>--><?php //echo $message?><!--</h1>-->
            </div>

            <div class="card-body">

            <?php if (!empty($error)): ;?>
                <div class="callout callout-danger">
                    <p style="color: red"><?php echo $error;?></p>
                </div>
            <?php endif;?>

                <form action="<?php echo BASE_URL;?>login/index_action/" method="post">
                    <div class="input-group form-group justify-content-center">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text"  name="email" placeholder="Usuário ou E-mail">
                    </div>
                    <div class="input-group form-group justify-content-center">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password"  name="senha" placeholder="Senha">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-warning px-3" type="submit">ENTRAR</button>
                    </div>
                </form>
            </div>
        </div>



<!-- jQuery -->
<script src="<?php echo BASE_URL; ?>assets/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo BASE_URL; ?>assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>

