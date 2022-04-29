<?php
include "./db/db.php";
?>

<script>
    window.addEventListener("load", function() {       
      location.href = "index.php#section-oferta"
    })
</script>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unificador</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="./public/css/styles.css">
</head>

<body id="body" >
    <nav class="navbar-fijo">
        <div style="background-color: #001950; " class="nav-wrapper">
            <a href="#" class="brand-logo center">JARVIS</a>
        </div>
    </nav>

    <div class=" center">
        <div class="row">
            <div class="col s12">

                <div class="col s3 sidebar">
                    <!-- Izq -->
                    <form id="formularioConsulta" method="POST">
                        <!-- Seleccionar Ciudad -->
                        <div class="input-field col s12 margin-0" style="margin-top:20px">
                            <i class="material-icons prefix">location_city</i>
                            <input name="ciudadbuscar" type="text" id="autocomplete-input" class="autocomplete inputs-custom">
                            <label for="autocomplete-input" style="color: black">Ciudad</label>
                        </div>
                        <!-- Seleccionar estrato -->
                        <div class="input-field col s12 margin-0">
                            <div class="row" style="margin-bottom: 0; ">
                                <div class="col s1">
                                    <i class="material-icons prefix">format_list_numbered</i>
                                </div>
                                <div class="col s11" style="padding-left: 30px;">
                                    <select name="estrato" id="estrato">
                                        <option value="">Estrato</option>
                                        <option>1-2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5-6</option>

                                    </select>
                                </div>

                            </div>

                        </div>
                        <!-- Seleccionar cobertura -->
                        <div class="input-field col s12 margin-0">
                            <div class="row">
                                <div class="col s1">
                                    <i class="material-icons prefix">cell_tower</i>
                                </div>
                                <div class="col s11" style="padding-left: 30px;">
                                    <select name="cobertura" id="cobertura">
                                        <option value="">Cobertura</option>
                                        <option>HFC</option>
                                        <option">N/A</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Sleecionar adicionales -->
                        <div>
                            <ul class="collapsible">
                                <li>
                                    <div class="collapsible-header" style="padding-top: 0">
                                        <i class="material-icons" style="margin-right: 7px;">business_center</i>Portafolio
                                    </div>
                                    <div class="collapsible-body styles-desplegable-tabla">
                                        <table class=" centered striped responsive-table z-depth-2">
                                            <thead class="thead-adicionales">
                                                <tr>
                                                    <th>Full tigo</th>
                                                    <th>Solo movil</th>
                                                    <th>Duo TV+TO</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <label>

                                                            <input type="radio" class="filled-in" name="adicionales" value="FULLTIGO" />
                                                            <span class="span-table"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input type="radio" class="filled-in" name="adicionales" value="MOVILIDAD" />
                                                            <span class="span-table"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input type="radio" class="filled-in" name="adicionales" value="DUO TV + TO" />
                                                            <span class="span-table"></span>
                                                        </label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <thead class="thead-adicionales">
                                                <tr>
                                                    <th>Triple</th>
                                                    <th>Solo BA</th>
                                                    <th>Duo TO+BA</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            <input type="radio" class="filled-in" name="adicionales" value="TRIPLES" checked=true />
                                                            <span class="span-table"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input type="radio" class="filled-in" name="adicionales" value="INDIVIDUAL DE INTERNET" />
                                                            <span class="span-table"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input type="radio" class="filled-in" name="adicionales" value="DUO INTERNET + TO" />
                                                            <span class="span-table"></span>
                                                        </label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <thead class="thead-adicionales">
                                                <tr>
                                                    <th>Solo TO</th>
                                                    <th>Solo TV</th>
                                                    <th>Duo TV+BA</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            <input type="radio" class="filled-in" name="adicionales" value="INDIVIDUAL DE TO" />
                                                            <span class="span-table"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input type="radio" class="filled-in" name="adicionales" value="INDIVIDUAL DE TELEVISION" />
                                                            <span class="span-table"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input type="radio" class="filled-in" name="adicionales" value="DUO INTERNET + TV" />
                                                            <span class="span-table"></span>
                                                        </label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </li>
                            </ul>

                        </div>


                        <div class="container">
                            <button form="formularioConsulta" onclick="mostrarOcultarTabla()" class="btn btn-large waves-effect waves-light" type="submit" name="action" id="btnForm" style="top: -12px; background-color: #00c8ff; " >Consultar
                                <i class="material-icons right">refresh</i>
                            </button>
                        </div>
                    </form>

                </div>


                <div class="col s9">
                    <!-- Der -->
                    <div class="container col s12">

                        <div class="row">
                            <!-- Ofertas -->
                            <div id="section-oferta" class="col s12" style="height: 100vh;padding-top: 64px;">
                                <div class="row">
                                    <div class=" container col s12 ">

                                        <span class="z-depth-1" style="font-size:1.2rem; padding: 10px; border-radius: 5px;"> <strong> Ciudad:</strong> <?php echo $_POST['ciudadbuscar']; ?> | <strong>Estrato:</strong> <?php echo $_POST['estrato']; ?> | <strong> Cobertura: </strong><?php echo $_POST['cobertura']; ?> |  <strong>Portafolio:</strong> <?= $_POST['adicionales'] ?> </strong> </span>

                                    </div>
                                </div>
                                <div>
                                    <h5>OFERTAS <i class="material-icons small">local_offer</i> </h5>
                                </div>
                                <div class="row">
                                    <?php
                                    if (isset($_POST["ciudadbuscar"])) {
                                        $consultaOfertas = "SELECT * FROM ofertas WHERE Ciudad LIKE '%" . $_POST['ciudadbuscar'] . "%' AND AplicaTecnologia = '" . $_POST['cobertura'] . "' AND Portafolio = '" . $_POST['adicionales'] . "' ORDER BY CategoriaPrioridad ASC LIMIT 3";
                                        $consultaQuery = mysqli_query($conexion, $consultaOfertas);
                                        $increment = 0;
                                        $titulo = '';
                                        $iconoTitulo = '';
                                        $tarifaFinal = '';
                                        $tarifaClaro = '';
                                        $tarifaMovistar = '';
                                        $descuento = '';
                                        $tarifaPlena = '';
                                    ?>
                                        <script>
                                            function ocultarMostrarTable() {
                                                liTabla.classList.add("active")
                                                setTimeout(() => {
                                                    liTabla.classList.remove("active")
                                                }, 20000);
                                            }
                                            ocultarMostrarTable()
                                        </script>

                                        <?php
                                        while ($campos = mysqli_fetch_assoc($consultaQuery)) {
                                            $increment++;
                                            if ($increment == 1) {
                                                $titulo = 'LA MEJOR OFERTA PARA TU COMISIÓN';
                                                $iconoTitulo = 'star';
                                            }
                                            if ($increment == 2) {
                                                $titulo = 'LA OFERTA CON MÁS AHORRO';
                                                $iconoTitulo = 'star_half';
                                            }
                                            if ($increment == 3) {
                                                $titulo = 'UNA BUENA OPCIÓN';
                                                $iconoTitulo = 'star_border';
                                            }

                                            if ($_POST['estrato'] == '1-2') {
                                                $tarifaFinal = $campos['TarifaFinalEstrato1-2'];
                                                $tarifaPlena = $campos['TarifaPlenaEstrato1-2'];
                                                $descuento = $campos['DescuentoEstrato1-2'];
                                            }
                                            if ($_POST['estrato'] == '3') {
                                                $tarifaFinal = $campos['TarifaFinalEstrato3'];
                                                $tarifaPlena = $campos['TarifaPlenaEstrato3'];
                                                $descuento = $campos['DescuentoEstrato3'];
                                            }
                                            if ($_POST['estrato'] == '4') {
                                                $tarifaFinal = $campos['TarifaFinalEstrato4'];
                                                $tarifaPlena = $campos['TarifaPlenaEstrato4'];
                                                $descuento = $campos['DescuentoEstrato4'];
                                            }
                                            if ($_POST['estrato'] == '5-6') {
                                                $tarifaFinal = $campos['TarifaFinalEstrato5-6'];
                                                $tarifaPlena = $campos['TarifaPlenaEstrato5-6'];
                                                $descuento = $campos['DescuentoEstrato5-6'];
                                            }
                                        ?>
                                            <div class="col s4" onclick="buscarDatos(<?= $campos['id_ofertas'] ?>,'<?= $_POST['estrato'] ?>')">
                                                <a href="#section-benchmark" style="color :black">

                                                    <h6 id="titulo">OFERTA <?= $increment ?> </h6>
                                                    <div class="card card-bench">
                                                        <div class="card-content ">
                                                            <span class="card-title">

                                                                <?= $titulo ?> <i class="material-icons"><?= $iconoTitulo ?></i></span>
                                                            <table class="striped centered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <?= $campos['Oferta'] ?>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <p><strong>Tarifa Final</strong></p>
                                                                            <?= $tarifaFinal ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <p><strong>Descuento</strong></p>
                                                                            <?= $descuento ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <p><strong>Tarifa Plena</strong></p>
                                                                            <?= $tarifaPlena ?>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                    <?php
                                        };
                                    }
                                    ?>

                                </div>
                            </div>
                            <!-- Benchmark -->
                            <div id="section-benchmark" class="col s12" style="height: 100vh;padding-top:65px">
                                <div>
                                    <h5>COMPARADOR DE OFERTAS<i class="material-icons small">difference</i> </h5>
                                </div>
                                <div id="benchmark" class="row">
                                    <!-- Objeto ajax -->
                                </div>
                            </div>
                            <!-- Argumentos economicos -->
                            <div id="section-calculadora" class="col s12" style="height: 100vh;padding-top:65px;">
                                <div>
                                    <h5>CALCULA EL AHORRO DE TU CLIENTE<i class="material-icons small" style="top:10px;" >calculate</i></h5>
                                </div>
                                <div id="descuentos" class="row">
                                    <!-- ajax Descuentos -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed-action-btn" style="margin-right: 15px;">
        <a href="#section-oferta" class="btn-floating btn-large red tooltipped" data-position="top" data-tooltip="Ofertas">
            <i class="large material-icons" style="background-color: #00377b; ">local_offer</i>
        </a>
        <a href="#section-benchmark" class="btn-floating btn-large red tooltipped" data-position="top" data-tooltip="Benchmark">
            <i class="large material-icons" style="background-color: #00377b; ">difference</i>
        </a>
        <a href="#section-calculadora" class="btn-floating btn-large red tooltipped" data-position="top" data-tooltip="Calculadora">
            <i class="large material-icons" style="background-color: #00377b;">calculate</i>
        </a>
    </div>

    <!--  -->
    <script>
        function objetoAjax() {
            var xmlhttp = false;
            try {
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (E) {
                    xmlhttp = false;
                }
            }
            if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
                xmlhttp = new XMLHttpRequest();
            }
            return xmlhttp;
        }


        function buscarDatos(id_ofertas, estrato) {

            var benchmark = document.getElementById("benchmark");
            ajaxBench = objetoAjax();
            ajaxBench.open("POST", "benchmark.php", true);
            ajaxBench.onreadystatechange = function() {
                if (ajaxBench.readyState == 4) {
                    benchmark.innerHTML = ajaxBench.responseText;

                }
            }
            ajaxBench.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            ajaxBench.send("id_ofertas=" + id_ofertas + "&estrato=" + estrato);

            var descuentos = document.getElementById("descuentos");
            ajaxDesc = objetoAjax();
            ajaxDesc.open("POST", "descuentos.php", true);
            ajaxDesc.onreadystatechange = function() {

                if (ajaxDesc.readyState == 4) {
                    descuentos.innerHTML = ajaxDesc.responseText;
                    
                }
            }
            ajaxDesc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            ajaxDesc.send("id_ofertas=" + id_ofertas + "&estrato=" + estrato);
        }
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="./public/js/main.js"></script>
</body>

</html>