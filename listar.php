<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Registro de facetas">
    <meta name="keywords" content="Registro de facetas, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de facetas </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
         
            
            <nav class="header__menu">
                            <ul>
                                <li><a href="./index.php">inicio</a></li>
                                <li><a href="./paciente.php">pacientes</a></li>
                                <li><a href="./cadastro.php">cadastro</a></li>
                                <li><a href="http://www.drakaryneoliveira.com.br/">sair</a>
                                </li>
                                
                            </ul>
                        </nav>
        </div>
        
        
       
        
            
        
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
      
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__menu__option">
                        <nav class="header__menu">
                            <ul>
                                <li><a href="./index.php">inicio</a></li>
                                <li><a href="./paciente.php">pacientes</a></li>
                                <li><a href="./cadastro.php">cadastro</a></li>
                                <li><a href="http://www.drakaryneoliveira.com.br/">sair</a>
                                </li>
                                
                            </ul>
                        </nav>
                        
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Registro de Facetas</h2>  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
           
            <div class="contact__content">
                <div class="row">
                    
                    <div class="col-lg-12 col-md-6">
                        <div class="contact__form">
                                    
                           <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Data</th>
                                    <th scope="col">Observação</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                            include ('conexao/conexao.php');
                                            $cont = 0;
                                            $sql =  "SELECT * FROM pacientes";
                                            $query = mysqli_query($con, $sql);
                                            while ($item = mysqli_fetch_array($query, MYSQLI_ASSOC)){
                                                $cont = $cont + 1;
                                    ?>
                                    <tr>
                                    <th scope="row"><?php echo $cont ?></th>
                                    <td><?php echo $item['nome']; ?></td>
                                    <td><?php echo date('d/m/y', strtotime ($item['data'] ))  ?></td>
                                   
                                    <td><a href="<?php  echo "editar.php?pacienteId=".$item['id'];   ?>">
                                                   <span class="glyphicon glyphicon-edit"></span>
                                                                </a></td>

                                    <td><a href="#">
                                         <span class="glyphicon glyphicon-remove"></span>
                                                      </a></td>
                                    </tr>
                                  
                                    <?php
                                                 }
                                              ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer"> 
        <div class="footer__copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <div class="footer__copyright__text">
                            <p>Copyright &copy;  Todos Direitos Reservado | Desenvolvido <i class="fa fa-heart" aria-hidden="true"></i> por <a href="https://colorlib.com" target="_blank">WE-PRO SISTEMA</a></p>
                        </div>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                   
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>