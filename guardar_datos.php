<?PHP
$habitacion=""; 
if (!empty($_REQUEST['habitacion'])){ 
$habitacion=$_REQUEST['habitacion']; 
} 
  
$tiempo=""; 
if (!empty($_REQUEST['tiempo'])){ 
$apellido=$_REQUEST['tiempo']; 
} 

$saltoLinea="\r\n";
  
//Si no existe fichero TXT se crea. En caso contrario, se sobrescribe 
  
$archivo="$habitacion.txt"; 
  
     $file=fopen($archivo,"a"); 
     fwrite($file,$habitacion." ".$tiempo.$saltoLinea); 
     fclose($file);  

?>