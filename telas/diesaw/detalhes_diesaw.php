<?php
include_once("/xampp/htdocs/ccbs/php/bd/conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$sql = "SELECT * FROM editblade_diesaw WHERE idblade = '$id'";

$result = $conn->query($sql);

session_start();

?>

<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="/ccbs/assets/CSSS/style2.css">
    <link rel="shortcut icon" type="image/x-icon" href="/ccbs/img/favicon_ccbs.ico">
    <title>Details</title>
    <style>
        .table-bg{
            background: rgba(0,0,0,0.7);
            border-radius: 0 15px 15px 15px;
        }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <img class="imglogin" src="/ccbs/assets/img/CCBS-removebg-preview.png" alt="" style="width: 200px;">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <?php
                    if($_SESSION['idUser'] == 1){
                        echo 'Pedro Sena';
                    };
                    if($_SESSION['idUser'] == 2){
                        echo 'Rafael Camurça';
                    };
                    if($_SESSION['idUser'] == 3){
                        echo 'Romulo Oliveira';
                    };
                    if($_SESSION['idUser'] == 4){
                        echo 'Kariton Gomes';
                    };
                    if($_SESSION['idUser'] == 5){
                        echo 'Mauricio Freitas';
                    };
                ?>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
           
            <?php
                if($_SESSION['idUser'] == 1 or $_SESSION['idUser'] == 2 or $_SESSION['idUser'] == 3){

                    echo'<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Die Saw</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="/ccbs/telas/diesaw/cadastro_diesaw.php">Blade Registration</a></li>
                            <li><a class="dropdown-item" href="/ccbs/telas/diesaw/consulta_diesaw.php">Blade Query</a></li>
                            </ul>
                        </li>';

                    echo '<li class=nav-item dropdown>
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Singulation</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="/ccbs/telas/sgl/cadastro.php">Blade Registration</a></li>
                            <li><a class="dropdown-item" href="/ccbs/telas/sgl/consulta.php">Blade Query</a></li>
                            </ul>
                        </li>';

                    echo'<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">O/S Station</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="/ccbs/telas/os/pogopinbga132.php">PogoPig - BGA 132</a></li>
                            <li><a class="dropdown-item" href="/ccbs/telas/os/pogopinbga272.php">PogoPig - BGA 272</a></li>
                            </ul>
                        </li>';

                    echo'<li class="nav-item dropdown">
                            <li><a class="dropdown-item" href="../menu.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                          </svg> Home </a></li>
                        </li>';

                    //echo'<form class="d-flex mt-3" role="search">
                    //    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    //    <button class="btn btn-success" type="submit">Search</button>
                    //    </form>';

                }else{
                    echo'<li class=nav-item dropdown>
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Singulation</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="/ccbs/telas/sgl/cadastro.php">Blade Registration</a></li>
                            <li><a class="dropdown-item" href="/ccbs/telas/sgl/consulta.php">Blade Query</a></li>
                            </ul>
                        </li>';
                    echo'<li class="nav-item dropdown">
                        <li><a class="dropdown-item" href="../php/login/logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                        </svg> Logout </a></li>
                    </li>';

                    //echo'<form class="d-flex mt-3" role="search">
                    //    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    //    <button class="btn btn-success" type="submit">Search</button>
                    //   </form>';
                }
            ?>                        
        </div>
        </div>
    </div>
    </nav>
    <div class="container">
        <div class="m-5">
            <table class="table table-hover table-bordered table-sm table-dark table-responsive" style="border-color: white;">
                <thead>
                <td colspan="10"><h2 style="text-align: center; ">Details of this Blade</h2></td>
                    <tr>
                        <th scope="col" style='text-align: center'>PN CCBS</th>
                        <th scope="col" style='text-align: center'>PN Customer</th>
                        <th scope="col" style='text-align: center'>Customer</th>
                        <th scope="col" style='text-align: center'>Size</th>
                        <th scope="col" style='text-align: center'>Blade Life(M)</th>
                        <th scope="col" style='text-align: center'>Used(M)</th>
                        <th scope="col" style='text-align: center'>Modification</th>
                        <th scope="col" style='text-align: center'>Reason</th>
                        <th scope="col" style='text-align: center'>Who Modified</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                        $totalusado = 0;
                        while($user_data = mysqli_fetch_assoc($result))
                        {           
                            echo "<tr>";
                            echo "<td style='text-align: center'>".$user_data['pnccbs']."</td>";
                            echo "<td style='text-align: center'>".$user_data['pnccbs']-$user_data['idblade']."</td>";
                            echo "<td style='text-align: center'>".$user_data['marcablade']."</td>";
                            echo "<td style='text-align: center'>".$user_data['tamanhoblade']."</td>";
                            echo "<td style='text-align: center'>".$user_data['vidautilblade']."</td>";
                            echo "<td style='text-align: center'>".$user_data['usado']."</td>";
                            echo "<td style='text-align: center'>".$user_data['modificacao']."</td>";
                            echo "<td style='text-align: center'>".$user_data['reason']."</td>";
                            echo "<td style='text-align: center'>".$user_data['who']."</td>";
                            
                            $totalusado = $totalusado+$user_data['usado'];
                        };     
                        "</tr>";                        
                    ?>
                </tbody>
            </table>
            <div class="input-box">
                <div class="input-group mb-0">
                    <span class="input-group-text">Currently Used</span>
                    <input type="text" class="form-control" value="<?php echo $totalusado ?>M" aria-label="Dollar amount (with dot and two decimal places)" Disabled>
                </div>
            </div>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

                <?php 
                    $total = 12000;
                    $porcentagem = (($total-$totalusado)/$total)*100;
                    echo "<td> </br> </td>";
                    if(($total-$totalusado)<=1000){
                        echo "<script> swal({
                            title: 'Attention: Request a New Blade!',
                            icon: 'warning',    
                          });;</script>";
                    }
                ?>
            <script>
            
            </script>
            <h6> Remaing Life </h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="<?php echo round($porcentagem, 2);?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $porcentagem;?>%"><?php echo round($porcentagem, 2); ?>%</div>
            </div>
        </div>
        <div class="continue-button">
            <a class="btn btn-primary" href="consulta_diesaw.php" role="button">Voltar</a>
        </div>   
    </div>
</body>
</html>

