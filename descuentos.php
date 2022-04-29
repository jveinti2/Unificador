<?php
include "./db/db.php";

if (isset($_POST['id_ofertas'])) {
    $consultaDesc = "SELECT * FROM ofertas WHERE id_ofertas = '" . $_POST['id_ofertas'] . "'";
    $consultaQueryDesc = mysqli_query($conexion, $consultaDesc);



    while ($camposDesc = mysqli_fetch_array($consultaQueryDesc)) {


        if ($_POST['estrato'] == '1-2') {
            $tarifaPlena = str_replace('$', '', $camposDesc['TarifaPlenaEstrato1-2']);
            $tarifaPlena = str_replace('.', '', $tarifaPlena);
            $tarifaPlena = str_replace(',', '', $tarifaPlena);
            $tarifaFinal = str_replace('$', '', $camposDesc['TarifaFinalEstrato1-2']);
            $tarifaFinal = str_replace('.', '', $tarifaFinal);
            $tarifaFinal = str_replace(',', '', $tarifaFinal);
            $ahorroHome = $tarifaPlena - $tarifaFinal;
            $descuento = $camposDesc['DescuentoEstrato1-2'];
            $promedio6meses = $ahorroHome * 6;
            $promedio12meses = $ahorroHome * 12;
        }
        if ($_POST['estrato'] == '3') {
            $tarifaPlena = str_replace('$', '', $camposDesc['TarifaPlenaEstrato3']);
            $tarifaPlena = str_replace('.', '', $tarifaPlena);
            $tarifaPlena = str_replace(',', '', $tarifaPlena);
            $tarifaFinal = str_replace('$', '', $camposDesc['TarifaFinalEstrato3']);
            $tarifaFinal = str_replace('.', '', $tarifaFinal);
            $tarifaFinal = str_replace(',', '', $tarifaFinal);
            $ahorroHome = $tarifaPlena - $tarifaFinal;
            $descuento = $camposDesc['DescuentoEstrato3'];
            $promedio6meses = $ahorroHome * 6;
            $promedio12meses = $ahorroHome * 12;
        }
        if ($_POST['estrato'] == '4') {
            $tarifaPlena = str_replace('$', '', $camposDesc['TarifaPlenaEstrato4']);
            $tarifaPlena = str_replace('.', '', $tarifaPlena);
            $tarifaPlena = str_replace(',', '', $tarifaPlena);
            $tarifaFinal = str_replace('$', '', $camposDesc['TarifaFinalEstrato4']);
            $tarifaFinal = str_replace('.', '', $tarifaFinal);
            $tarifaFinal = str_replace(',', '', $tarifaFinal);
            $ahorroHome = $tarifaPlena - $tarifaFinal;
            $descuento = $camposDesc['DescuentoEstrato4'];
            $promedio6meses = $ahorroHome * 6;
            $promedio12meses = $ahorroHome * 12;
        }
        if ($_POST['estrato'] == '5-6') {
            $tarifaPlena = str_replace('$', '', $camposDesc['TarifaPlenaEstrato5-6']);
            $tarifaPlena = str_replace('.', '', $tarifaPlena);
            $tarifaPlena = str_replace(',', '', $tarifaPlena);
            $tarifaFinal = str_replace('$', '', $camposDesc['TarifaFinalEstrato5-6']);
            $tarifaFinal = str_replace('.', '', $tarifaFinal);
            $tarifaFinal = str_replace(',', '', $tarifaFinal);
            $ahorroHome = $tarifaPlena - $tarifaFinal;
            $descuento = $camposDesc['DescuentoEstrato5-6'];
            $promedio6meses = $ahorroHome * 6;
            $promedio12meses = $ahorroHome * 12;
        }

        echo '<div class="col s4">

        <div class="card">
            <div class="card-content">
                <table class="centered ">
    
                    <tbody>
                        <tr>
                            <td class="tg-0pky bg-th-table-lt">Precio de la oferta</td>
                            <td class="tg-0pky "> $ ' . number_format($tarifaPlena, 0, ',', '.') . ' </td>
                            <td class="tg-0pky bg-th-table-rt">Descuentos</td>
                        </tr>
                        <tr>
                            <td class="tg-0pky bg-th-table-lt">Promo home</td>
                            <td class="tg-0pky "> $' . number_format($tarifaFinal, 0, ',', '.')  . '</td>
                            <td class="tg-0pky bg-tr-table-rt"> ' . $descuento . ' </td>
                        </tr>
                        <tr>
                            <td class="tg-0pky bg-th-table-lt">Ahorro home</td>
                            <td class="tg-0pky"> $' . number_format($ahorroHome, 0, ',', '.') . ' </td>
                            <td class="tg-0pky bg-tr-table-rt">Chek</td>
                        </tr>
                        <tr>
                            <td class="tg-baqh bg-th-table-lt" rowspan="2">Promo movil</td>
                            <td class="tg-0lax">No definido en excel</td>
                            <td class="tg-0lax bg-tr-table-rt">No definido en excel</td>
                        </tr>
                        <tr>
                            <td class="tg-0pky">No definido en excel</td>
                            <td class="tg-0pky bg-tr-table-rt">No definido en excel</td>
                        </tr>
                    </tbody>
    
                </table>
            </div>
        </div>
    </div>
    <div class="col s4">
        <div class="card">
            <div class="card-content">
    
                <table class="centered ">
    
                    <tbody>
                        <tr>
                            <td class="tg-baqh bg-th-table-lt" rowspan="2">AHORRO HOME</td>
                            <td class="tg-0lax">Promedio 6 meses</td>
                            <td class="tg-baqh"> $' . number_format($promedio6meses, 0, ',', '.') . '</td>
                        </tr>
                        <tr>
                            <td class="tg-0pky">Promedio 12 meses</td>
                            <td class="tg-c3ow">$' . number_format($promedio12meses, 0, ',', '.') . '</td>
                        </tr>
                        <tr>
                            <td class="tg-0pky bg-th-table-lt">AHORRO MOVIL</td>
                            <td class="tg-0pky">Promedio 3 meses</td>
                            <td class="tg-0pky">No definido en excel</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col s4">
        <div class="card">
            <div class="card-content">
                <table class="centered ">
    
                    <tbody>
                        <tr>
                            <td class="tg-0lax bg-th-table-lt">Amazon PV</td>
                            <td class="tg-0lax">$ No definido en excel</td>
                        </tr>
                        <tr>
                            <td class="tg-0pky bg-th-table-lt">Amazon Music</td>
                            <td class="tg-0pky">$ No definido en excel</td>
                        </tr>
                        <tr>
                            <td class="tg-0pky bg-th-table-lt">Dezzer</td>
                            <td class="tg-0pky">$ No definido en excel</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>';
    }
}
