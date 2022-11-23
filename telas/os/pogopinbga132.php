<?php
include_once("/xampp/htdocs/ccbs/php/bd/conexao.php");
session_start();
?>

<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/ccbs/CSSS/pongping.css">
    <link rel="shortcut icon" type="image/x-icon" href="/ccbs/img/favicon_ccbs.ico">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Blade Registration</title>

</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <img class="imglogin" src="/ccbs/assets/img/CCBS-removebg-preview.png" alt="" style="width: 200px;">
        <div class="offcanvas-header" style="color: white; font-size: 25px; margin-left: -13%" >
            <h1>PogoPin - BGA 132</h1>
        </div>
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
                            <li><a class="dropdown-item" href="/ccbs/telas/sgl/cadastro.php">Blade</a></li>
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
    <div class="main">
        <div class="input-group">
            <input type="text" aria-label="pogopin1" class="form-control" placeholder="PogoPin1" style="text-align: center;" maxlength="6">
            <input type="text" aria-label="pogopin2" class="form-control" placeholder="PogoPin2" style="text-align: center;" maxlength="6">
            <input type="text" aria-label="pogopin3" class="form-control" placeholder="PogoPin3" style="text-align: center;" maxlength="6">
            <input type="text" aria-label="pogopin4" class="form-control" placeholder="PogoPin4" style="text-align: center;" maxlength="6">
            <input type="text" aria-label="pogopin5" class="form-control" placeholder="PogoPin5" style="text-align: center;" maxlength="6">
            <input type="text" aria-label="pogopin6" class="form-control" placeholder="PogoPin6" style="text-align: center;" maxlength="6">
            <input type="text" aria-label="pogopin7" class="form-control" placeholder="PogoPin7" style="text-align: center;" maxlength="6">
            <input type="text" aria-label="pogopin8" class="form-control" placeholder="PogoPin8" style="text-align: center;" maxlength="6">
            <input type="text" aria-label="head1" class="form-control" placeholder="Head 1" style="text-align: center;" maxlength="6">
            <input type="text" aria-label="head2" class="form-control" placeholder="Head 2" style="text-align: center;" maxlength="6">
        </div>   
        </br>


        <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" style="width: 350px;">Record Reason</th>
                <th scope="col" style="width: 350px;">Dummy Run</th>
                <th scope="col" style="width: 350px;">Counter Re-Set</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input class="form-check-input" type="radio" name="reason" value="Change Type" id="changetype" required>
                <label class="form-check-label" for="flexCheckDefault">A - Change Type</label></br>
                <input class="form-check-input" type="radio" name="reason" value="Damaged Maintenance" id="damagedmaintenance" required>
                <label class="form-check-label" for="flexCheckDefault">B - Damaged Maintenance</label></br>
                <input class="form-check-input" type="radio" name="reason" value="Reach Number of uses" id="reachnumberofuses" required>
                <label class="form-check-label" for="flexCheckDefault">C - Reach Number of uses</label></br>
                <input class="form-check-input" type="radio" name="reason" value="Other" id="others" required>
                <label class="form-check-label" for="flexCheckDefault">D - Other</label></br></td>
                <td><input class="form-check-input" type="radio" name="re-set" value="ok" id="dummy" required>
                <label class="form-check-label" for="flexCheckDefault">OK</label></br>
                <input class="form-check-input" type="radio" name="re-set" value="not" id="dummy" required>
                <label class="form-check-label" for="flexCheckDefault">NOT</label></br></td>
                <td><input class="form-check-input" type="radio" name="re-set" value="ok" id="re-set" required>
                <label class="form-check-label" for="flexCheckDefault">OK</label></br>
                <input class="form-check-input" type="radio" name="re-set" value="not" id="re-set" required>
                <label class="form-check-label" for="flexCheckDefault">NOT</label></br></td>
                
            </tr>
            <tr>
                <th scope="col" colspan="2">Golden Sample try Run Check lead Pin and Solder Ball</th>
                <th scope="col">Shift</th>
            </tr>
            <tr>
                <td colspan="2"><input class="form-check-input" type="radio" name="goldensample" value="ok" id="goldensample" required>
                <label class="form-check-label" for="flexCheckDefault">OK</label></br>
                <input class="form-check-input" type="radio" name="goldensample" value="not" id="goldensample" required>
                <label class="form-check-label" for="flexCheckDefault">NOT</label></br></td>
                <td><input class="form-check-input" type="radio" name="turno" value="Comercial" id="turno" required>
                <label class="form-check-label" for="flexCheckDefault">Comercial</label></br>
                <input class="form-check-input" type="radio" name="turno" value="1º Turno" id="turno" required>
                <label class="form-check-label" for="flexCheckDefault">1º Turno</label></br>
                <input class="form-check-input" type="radio" name="turno" value="2º Turno" id="turno" required>
                <label class="form-check-label" for="flexCheckDefault">2º Turno</label></br>
                <input class="form-check-input" type="radio" name="turno" value="3º Turno" id="turno" required>
                <label class="form-check-label" for="flexCheckDefault">3º Turno</label></br></td>
            </tr>
        </tbody>
        </table>

        <div class="input-box">
                <input type="hidden" name="who" value="<?php
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
                                                ?>">
        </div> 

        <a class="btn btn-primary" href="#" role="button">Updated</a>
    </div>

    <table class="table">
    <thead>
        <tr>
            <th scope="col" colspan="4" style="text-align: center; font-size: 25px;">Remarks</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="width: 350px;"><b>Change reason:</b><br>
                                                        <b>A</b> -> Change Type.<br>
                                                        <b>B</b> -> Damaged Maintenace.<br>
                                                        <b>C</b> -> Reach Number of Uses.<br>
                                                        <b>D</b> -> Others.<br></td>
            <td style="width: 350px;"><b>After the counter Re-Set, on the machine system need key in last time record data.</b><br></td>
            <td style="width: 350px;"><b>Count Life time:</b><br>
                                                        <b>PogoPin</b> -> 200000 ± 1000.<br>
                                                        <b>Block</b> -> 1000000 ± 1000. <br>
                                                        <b>Socket</b> -> 2000000 ± 1000. <br></td>
        </tr>
    </tbody>
    </table>
</body>
</html>