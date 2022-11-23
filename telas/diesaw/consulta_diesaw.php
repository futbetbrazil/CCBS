<?php

include_once("/xampp/htdocs/ccbs/php/bd/conexao.php");

$sql = "SELECT * FROM cadastro_diesaw";
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
    <link rel="stylesheet" href="/ccbs/assets/CSSS/style2.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="/ccbs/img/favicon_ccbs.ico">
    <title>Blades Cadastradas</title>
    <style>
        .table-bg{
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
            <table class="table table-hover table-bordered table-sm table-dark" style="border-color: white;">
                <thead>
                <td colspan="10"><h1 style="text-align: center;">Blade History</h1></td>
                    <tr>
                        <th scope="col" style='text-align: center'>PN ÚNICO</th>
                        <th scope="col" style='text-align: center'>PN Customer</th>               
                        <th scope="col" style='text-align: center'>Tamanho</th> 
                        <th scope="col" style='text-align: center'>Insertion</th>
                        <th scope="col" style='text-align: center'>Location</th>
                        <th scope="col" style='text-align: center'>Who Created</th>
                        <th scope="col" style='text-align: center'>Blade Life(M)</th>
                        <th scope="col" style='text-align: center'>Actual Life(M)</th>
                        <th scope="col" style='text-align: center'>Remaining %</th>
                        <th scope="col" style='text-align: center'>Action</th>                                              
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($user_data = mysqli_fetch_assoc($result))
                        {
                            echo "<tr>";
                            echo "<td style='text-align: center'>".$user_data['partnumber_unico']."</td>";
                            echo "<td style='text-align: center'>".$user_data['partnumber']."</td>";
                            echo "<td style='text-align: center'>".$user_data['tamanho']."</td>";
                            echo "<td style='text-align: center'>".$user_data['data']."</td>";
                            echo "<td style='text-align: center'>".$user_data['location']."</td>";
                            echo "<td>".$user_data['who']."</td>";
                            echo "<td style='text-align: center'>".$user_data['vidautil']."m</td>";
                            $idoficial = $user_data['id'];
                            $pn = $user_data['vidautil'];
                            if($pn>=0){
                                $sql2 = "SELECT usado,reason FROM editblade_diesaw WHERE $pn=pnccbs";
                                $result2 = $conn->query($sql2);
                                
                                $totalusado = 0;
                                $reason = '';
                                while($user_data = mysqli_fetch_assoc($result2))
                                {
                                    $totalusado = $totalusado+$user_data['usado'];
                                    $reason = $user_data['reason'];
                                }
                                $total = 12000;
                                $porcentagem = (($total-$totalusado)/$total)*100;
                                echo "<td style='text-align: center'>".$total-$totalusado."m</td>";
                                echo "<td style='text-align: center'>".round($porcentagem,2)."%</td>";
                                $reason1 = 'Damaged Blade';
                                $reason2 = 'Life Reach';
                            }
                            if ($porcentagem<=0 or $reason==$reason1 or $reason==$reason2){
                                echo"<td style='text-align: right'>
                                        <a class='btn btn-sm btn-primary' href='detalhes_diesaw.php?id=$idoficial'>
                                            <svg xmlns='http://www.w3.org/2000/svg' width='10' height='10' fill='currentColor' class='bi bi-info-square-fill' viewBox='0 0 16 16'>
                                                <path d='M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.93 4.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z'/>
                                            </svg>
                                        </a>
                                    </td>";
                            }else{
                                echo"<td style='text-align: right'>    
                                        <a class='btn btn-sm btn-primary' href='editar_diesaw.php?id=$$idoficial'>
                                            <svg xmlns='http://www.w3.org/2000/svg' width='10' height='10' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
                                                <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z'/>
                                            </svg>
                                        </a>
                                        <a class='btn btn-sm btn-primary' href='detalhes_diesaw.php?id=$$idoficial'>
                                            <svg xmlns='http://www.w3.org/2000/svg' width='10' height='10' fill='currentColor' class='bi bi-info-square-fill' viewBox='0 0 16 16'>
                                                <path d='M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.93 4.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z'/>
                                            </svg>
                                        </a>
                                    </td>";
                            }
                            "</tr>";
                        }  
                    ?>
                <?php
                if(isset($_SESSION['msg1'])){                  
                    echo "<script> swal({
                        title: 'Blade Edited SUCCESSFULLY!!',
                        icon: 'success',    
                        });;</script>";
                    unset($_SESSION['msg1']);
                }
                if(isset($_SESSION['msg3'])){                  
                    echo "<script> swal({
                        title: 'Lifetime Value, not valid!!',
                        icon: 'error',    
                        });;</script>";
                    unset($_SESSION['msg3']);
                }
                if(isset($_SESSION['msg4'])){                  
                    echo "<script> swal({
                        title: 'Improper Change!!',
                        text: 'The value used cannot be greater than the Remainder.',
                        icon: 'error',    
                        });;</script>";
                    unset($_SESSION['msg4']);
                }
                ?>
                </tbody>
            </table>
        </div>
        <div class="continue-button">
            <a class="btn btn-primary" href="../menu.php" role="button">Voltar</a>
        </div>   
    </div>
</body>
</html>

