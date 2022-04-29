<?php
                                        //user         //password     ///base de datos
$conexion = new mysqli ('10.1.1.108', 'ag_tigo_adviser','ag_tigo_adviser9510*','ag_tigo_adviser');
    

$ip=getRealIP();
$fecha=date("Y_m_d__h_i_s");
$tipo_subida=$_POST['tipo_subida'];

$clave=$_POST['clave'];
$mes=$_POST['mes'];

   

if ($clave=="T1g02020*")
{


$query="Delete from `ofertas`";
$resultadoc=$conexion->query($query); 

$ruta = 'archivos/archivo'.$fecha.'_IP_'.$ip.'/';
$ruta2 = 'archivos/archivo'.$fecha.'_IP_'.$ip;

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


        if ($aux==20) {
           // echo "<br><br>";
            $aux=0;

            //INSERT INTO ofertas (portafolio,oferta,decos,tar_estrato12,tar_estrato3,tar_estrato4,tar_estrato56,desc_estrato12,desc_estrato3,desc_estrato4,desc_estrato56,tarf_estrato12,tarf_estrato3,tarf_estrato4,tarf_estrato56,tecnologia,capsulas,categoria,ciudad,favoritos) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?

        ///    Tecnología para la que aplica 1	Portafolio 2	OFERTA 3	Decos 4	Categoria 5	TARIFA PLENA CON IVAEstrato 1-2 6	TARIFA PLENA CON IVAEstrato 3 7	TARIFA PLENA CON IVAEstrato 4 8	TARIFA PLENA CON IVAEstrato 5-6 9	DESCUENTOEstrato 1-2 10	DESCUENTOEstrato 3 11	DESCUENTOEstrato 4 12	DESCUENTOEstrato 5-6 13	TARIFA FINAL CON IVAEstrato 1-2 14	TARIFA FINAL CON IVAEstrato 3 15	TARIFA FINAL CON IVAEstrato 4 16	TARIFA FINAL CON IVAEstrato 5-6 17	Ciudad 18	CAPSULAS 19	Favoritos de SIEBEL 20

        $query=" INSERT INTO ofertas (portafolio,oferta,decos,tar_estrato12,tar_estrato3,tar_estrato4,tar_estrato56,desc_estrato12,desc_estrato3,desc_estrato4,desc_estrato56,tarf_estrato12,tarf_estrato3,tarf_estrato4,tarf_estrato56,tecnologia,capsulas,categoria,ciudad,favoritos) VALUES ('$variable[2]', '$variable[3]', '$variable[4]', '$variable[6]', '$variable[7]', '$variable[8]','$variable[9]',  '$variable[10]',  '$variable[11]',  '$variable[12]', '$variable[13]', '$variable[14]', '$variable[15]', '$variable[16]', '$variable[17]', '$variable[1]', '$variable[19]', '$variable[5]', '$variable[18]', '$variable[20]');";
        $resultadoc=$conexion->query($query); 

        }
        $aux=$aux+1;

        
            $variable[$aux]=$data->sheets[0]['cells'][$i][$j];
           // echo "\"".$data->sheets[0]['cells'][$i][$j]."\",";

       
        
    }
   // echo "\n";

}


 header("Location:http://10.1.1.113/ag_adviser/login/editor");  




}

else{

    echo "<script>alert('Clave Invalida'); location.href = 'http://10.1.1.113/ag_adviser/login/editor';</script>";


}




function getRealIP() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}



?>