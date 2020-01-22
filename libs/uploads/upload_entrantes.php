<?php
print_r($_FILES["fileToUploadEntradas"]);
//echo count($_FILES["file0"]["name"]);exit;
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_FILES["fileToUploadEntradas"]["type"])){
$target_dir = "../../archivos/uploads/entrantes/".$_FILES["fileToUploadEntradas"]["error"]."/";
$carpeta=$target_dir;
if (!file_exists($carpeta)) {
    mkdir($carpeta, 0777, true);
}

$directorio=opendir($carpeta);
//recoger los  datos
$cont = 0;
while ($archivo = readdir($directorio)) { 
  if(($archivo != '.') && ($archivo != '..')){
     $cont++; 
  } 
}
closedir($directorio);

echo "id".$_POST['id_entrante'];
echo "cont".$cont;
$target_file = $carpeta . basename($_FILES["fileToUploadEntradas"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$target_file = $carpeta . "2020012100001.".$imageFileType ;
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUploadEntradas"]["tmp_name"]);
    if($check !== false) {
        $errors[]= "El archivo es una imagen - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $errors[]= "El archivo no es una imagen.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    $errors[]="Lo sentimos, archivo ya existe.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUploadEntradas"]["size"] > 524288) {
    $errors[]= "Lo sentimos, el archivo es demasiado grande.  Tamaño máximo admitido: 0.5 MB";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "pdf" && $imageFileType != "docx"
&& $imageFileType != "doc" && $imageFileType != "xls" && $imageFileType != "xlsx" ) {
    $errors[]= "Lo sentimos, sólo archivos JPG, JPEG, PNG & GIF  son permitidos.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $errors[]= "Lo sentimos, tu archivo no fue subido.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUploadEntradas"]["tmp_name"], $target_file)) {
       $messages[]= "El Archivo ha sido subido correctamente.";
	   
	   
    } else {
       $errors[]= "Lo sentimos, hubo un error subiendo el archivo.";
    }
}

if (isset($errors)){
	?>
	<div class="alert alert-danger alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Error!</strong> 
	  <?php
	  foreach ($errors as $error){
		  echo"<p>$error</p>";
	  }
	  ?>
	</div>
	<?php
}

if (isset($messages)){
	?>
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Aviso!</strong> 
	  <?php
	  foreach ($messages as $message){
		  echo"<p>$message</p>";
	  }
	  ?>
	</div>
	<?php
}
}
?> 