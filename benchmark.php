<?php

include "./db/db.php";

if (isset($_POST['id_ofertas'])) {

    $consultaBench = "SELECT * FROM ofertas WHERE id_ofertas = '" . $_POST['id_ofertas'] . "'";

    $consultaQueryBench = mysqli_query($conexion, $consultaBench);

    while ($camposBench = mysqli_fetch_array($consultaQueryBench)) {

        if ($_POST['estrato'] == '1-2') {
            $tarifaFinalBench1 = $camposBench['TarifaFinalEstrato1-2'];
            $tarifaFinalBench2 = $camposBench['Estrato1-2Claro'];
            $tarifaFinalBench3 = $camposBench['Estrato1-2Movistar'];
        }
        if ($_POST['estrato'] == '3') {
            $tarifaFinalBench1 = $camposBench['TarifaFinalEstrato3'];
            $tarifaFinalBench2 = $camposBench['Estrato3Claro'];
            $tarifaFinalBench3 = $camposBench['Estrato3Movistar'];
        }
        if ($_POST['estrato'] == '4') {
            $tarifaFinalBench1 = $camposBench['TarifaFinalEstrato4'];
            $tarifaFinalBench2 = $camposBench['Estrato4Claro'];
            $tarifaFinalBench3 = $camposBench['Estrato4Movistar'];
        }
        if ($_POST['estrato'] == '5-6') {
            $tarifaFinalBench1 = $camposBench['TarifaFinalEstrato5-6'];
            $tarifaFinalBench2 = $camposBench['Estrato5-6Claro'];
            $tarifaFinalBench3 = $camposBench['Estrato5-6Movistar'];
        }

        echo '<div class="col s4">
            <h6>OFERTA 1 </h6>
            <div class="card">
                <div class="card-content styles-card-custom">
                    <span class="card-title"> LA OFERTA CON MÁS AHORRO <i class="material-icons"> star </i></span>
                    <table class="striped centered">
                        <thead>
                            <tr>
                                <th>
                                    ' . $camposBench['Oferta'] . '
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> ' . $tarifaFinalBench1 . ' </td>
                            </tr>
                            <tr>
                                <td> ' . $camposBench['Decos'] . ' </td>
                            </tr>
                            <tr>
                                <td>No definido en excel</td>
                            </tr>
                            <tr>
                                <td>No definido en excel</td>
                            </tr>
                            <tr>
                                <td>No definido en excel</td>
                            </tr>
                            <tr>
                                <td>No definido en excel</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col s4">
            <h6>OFERTA 2 </h6>
            <div class="card">
                <div class="card-content">
                    <span class="card-title"> CLARO <i class="material-icons"> <img src="./public/img/Claro.png"> </i></span>
                    <table class="striped centered">
                        <thead>
                            <tr>
                                <th>
                                    ' . $camposBench['OfertaClaro']  . '
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>' . $tarifaFinalBench2 . '</td>
                            </tr>
                            <tr>
                                <td>' . $camposBench['DecosClaro'] . '</td>
                            </tr>
                            <tr>
                                <td>No definido en excel</td>
                            </tr>
                            <tr>
                                <td>No definido en excel</td>
                            </tr>
                            <tr>
                                <td>No definido en excel</td>
                            </tr>
                            <tr>
                                <td>No definido en excel</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col s4">
            <h6>OFERTA 3 </h6>
            <div class="card">
                <div class="card-content">
                    <span class="card-title"> MOVISTAR <i class="material-icons"> <img src="./public/img/Movistar.png"> </i></span>
                    <table class="striped centered">
                        <thead>
                            <tr>
                                <th>
                                    ' . $camposBench['OfertaMovistar']  . '
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>' . $tarifaFinalBench3 . '</td>
                            </tr>
                            <tr>
                                <td>' . $camposBench['DecosMovistar'] . '</td>
                            </tr>
                            <tr>
                                <td>No definido en excel</td>
                            </tr>
                            <tr>
                                <td>No definido en excel</td>
                            </tr>
                            <tr>
                                <td>No definido en excel</td>
                            </tr>
                            <tr>
                                <td>No definido en excel</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>';
    }
}
