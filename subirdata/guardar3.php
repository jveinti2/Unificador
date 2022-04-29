<?php
                                        //user         //password     ///base de datos
$conexion = new mysqli ('10.1.1.108', 'ag_gainformes','ag_gainformes9510*','ag_gainformes');
    


$ip=getRealIP();
$fecha=date("Y_m_d__h_i_s");
$tipo_subida=$_POST['tipo_subida'];

$clave=$_POST['clave'];
$mes=$_POST['mes'];

 
if ($clave=="GA2021+")
{


    if ($tipo_subida=="Reemplazo")
{
    
  ///$query="TRUNCATE TABLE `ocupacion`";
  /// $resultadoc=$conexion->query($query); 
  $query="Delete from `ocupacion` where fecha_t like '%/$mes/%'";
  $resultadoc=$conexion->query($query); 


}



$ruta = 'archivos/archivo_ocupacion_'.$fecha.'_IP_'.$ip.'/';

if (!file_exists($ruta)) {
    mkdir($ruta, 0777, true);
}

$uploads_dir =$ruta;

foreach ($_FILES["documento"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["documento"]["tmp_name"][$key];
        // basename() puede evitar ataques de denegación de sistema de ficheros;
        // podría ser apropiada más validación/saneamiento del nombre del fichero
        $name = basename($_FILES["documento"]["name"][$key]);
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
    }
}




require_once 'Excel/reader.php';

// ExcelFile($filename, $encoding);
$data = new Spreadsheet_Excel_Reader();

$data->setOutputEncoding('CP1251');

$data->read($uploads_dir."/".$name);


error_reporting(E_ALL ^ E_NOTICE);
$aux=0;
for ($i = 2; $i <= $data->sheets[0]['numRows'] +1 ; $i++) {
    for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) {


        if ($aux==19) {
           // echo "<br><br>";
            $aux=0;

            $query="INSERT INTO `ocupacion`(ticket, crear_ticket, fecha_t, tipo, servicio, cola, nombre, programa, gerencia, cargo, agente, cedulas, cc_agente, asunto, tt_nota, usuario, tiempo, tiempo_dd, drivers) VALUES ('$variable[1]', '$variable[2]', '$variable[3]', '$variable[4]', '$variable[5]', '$variable[6]','$variable[7]',  '$variable[8]',  '$variable[9]',  '$variable[10]', '$variable[11]', '$variable[12]', '$variable[13]', '$variable[14]', '$variable[15]', '$variable[16]', '$variable[17]', '$variable[18]', '$variable[19]');";
            $resultadoc=$conexion->query($query); 

        }
        $aux=$aux+1;

        
            $variable[$aux]=$data->sheets[0]['cells'][$i][$j];
           // echo "\"".$data->sheets[0]['cells'][$i][$j]."\",";

       
        
    }
   // echo "\n";

}


 header("Location:http://10.1.1.113/app_ga/base");  




}

else{

    echo "<script>alert('Clave Invalida'); location.href = 'http://10.1.1.113/app_ga/base';</script>";


}




function getRealIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
        return $_SERVER['HTTP_CLIENT_IP'];
       
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
   
    return $_SERVER['REMOTE_ADDR'];
}



?>