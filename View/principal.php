<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="hhtps://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Enlatados Juarez</title>
    <style>
        /* Definimos que a sidebar terá uma largura de 120px e cor a cord de fundo #222 */

        .w3-sidebarr{
            width: 120px;

        }

        /*Define Fonte para todas as tags listadas abaixo*/
        body,
        h1,h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Montserrat", sans-serif
        }
    </style>        
</head>
<body class="w3-light-grey">
    <nav class="w3-sidebar w3-bar-block w3-center w3-blue">
        <a href="#home" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
            <i class="fa fa-home w3-xxlarge"></i>
            <p>HOME</p>
        </a>
        <a href="#dPessoais" class="w3-bar-item w3-button
        w3-block n w3-cell w3-hover-light-grey h3-hover-text-cyan w3-text-light-grey">
            <i class="fa fa-address-book-o w3-xxlarge"></i>
            <p>Dados Pessoais</p>
        </a>
        <a href="#formacao" class="w3-bar-item w3-button w3-block n w3-cell 
        w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
            <i class="fa fa-mortar-board w3-xxlarge"></i>
            <p>Formação</p>
        </a>
    </nav>
    <div class="w3-padding-large" id="main"></div>
    <div class="w3-padding-128 w3-content w3-text-grey" id="eProfissionall">
        <h2 class="w3-text-cyan">Experiencia Profissional</h2>
        <form action="" method="post" class="w3-row w3-light-grey 
        w3-text-blue w3-margin" style="width: 70%">
                <div class="w3-row w3-center">
                    <div class="w3-col" style="width:50%;">
                        Data Inicial
                    </div>
                    <div class="w3-res" style="">
                        Data Final
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-row w3-section w3-col" style="width:45%;">
                        <div class="w3-col" style="width:15%;">
                            <i class="w3-xxlarge fa fa-calendar"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large"
name="txtInicioEP" type="date" placeholder="">
                        </div>
                    </div>
                    <div class="w3-row w3-section w3-rest" style="">
                        <div class="w3-col w3-margin-left" style="width: 13%;">
                            <i class="w3-xxlarge fa fa-calendar"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" 
name="txtEmpEp" type="text" placeholder="Centro Paulo Souza">
                        </div>
                    </div>
                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width: 7%;">
                            <i class="w3-xxlarge fa fa-align-justify"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-borderb w3-round-large"
name="txtDescEp" type="text" placeholder="Descrição: Ex.: Técnico em 
Desenvolvimento de Sistemas - Desenvolvimento de Páginas WEB">
                        </div>
                    </div>

                    <div class="w3-row w3-section">
                        <div class="w3-center" style="">
                            <button name="btnAddEP" class="w3-button w3-block w3-blue 
w3-cell w3-round-large" style="width: 20%;">
                                <i class="w3-xxlarge fa fa-user-plus"></i>
                            </button>
                        </div>
                    </div>
        </form>
    </div>
    <div class="w3-container">
        <table class="w3-table-all w3-centered">
        <thead>
            <tr class="w3-center w3-blue">
                <th>Início</th>
                <th>Fim</th>
                <th>Empresa</th>
                <th>Descrição</th>
                <th>Apagar</th>
            </tr>
        </thead>

            <?php
                $ePro = new ExperienciaProfissionalController();
                $results = $ePro->gerarLista(unserialize($_SESSION['Usuario'])->getID);
                if($results != null)

                while($row = $results->fetch_object()) {
                    echo '<tr>';
                    echo '<td style="width: 10%;">'.$row->inicio.'</td>';
                    echo '<td style="width: 10%;">'.$row->fim.'</td>';
                    echo '<td style="width: 10%;">'.$row->empresa.'</td>';
                    echo '<td style="width: 65%;">'.$row->descricao.'</td>';
                    echo '<td style="width: 5%;">
                    <form action="/Controller/Navegacao.php"method="post">
                    <input type="hidden" name="idEp" value="'.$row->idexperienciaprofissional.'">
                    <button name="btnExcluirEP" class="w3-button w3-block w3-blue w3-cell w3-round-large">
                    <i class="fa fa-user-times"></i> </button></td>
                    </form>';
                    echo '</tr>';
                }
            ?>
        </table>
    </div>
</body>
</html>