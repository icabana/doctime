<?php

class DocumentosControlador extends ControllerBase {

    public function abrirVentanaDocumento() {
        
        $this->model->cargar("DocumentosModel.php", 'configuracion');
        $DocumentosModel = new DocumentosModel();
	                
        include("vistas/configuracion/documentos/formulario.php");
    }
    
    public function insertarDocumentoModal() {
		
	$this->model->cargar("DocumentosModel.php", "configuracion");
        $DocumentosModel = new DocumentosModel();
        
        $resp = $DocumentosModel->insertarDocumentoModal(
            $_POST['id_contrato'], $_POST['documento_modal'], $_POST['tipodocumento_contrato']
	);	
        
    }
    
    public function insertarDocumentoModal2() {
		
	$this->model->cargar("DocumentosModel.php", "configuracion");
        $DocumentosModel = new DocumentosModel();
        
        $resp = $DocumentosModel->insertarDocumentoModal2(
            $_POST['id_proceso'], $_POST['documento_modal'], $_POST['tipodocumento_proceso']
	);	
        
    }
    
    
    
    ////////////////////// LP
    
    public function GuardarDocumentoLP() {
		
	$this->model->cargar("DocumentosModel.php", "configuracion");
        $DocumentosModel = new DocumentosModel();
        
        $resp = $DocumentosModel->agregarDocumento(
            $_POST['documento'], "LP"
	);	
        
        $documentos_lp = $DocumentosModel->getTodosDocumentos("LP");
        
	include("vistas/configuracion/documentos/tabla_lp.php");
        
        echo $tabla_documento_lp;
        
    }
    
    public function eliminarDocumentoLP(){
		
	$this->model->cargar("DocumentosModel.php");
        $DocumentosModel = new DocumentosModel();
        
        $resp = $DocumentosModel->eliminarDocumento($_POST['id_documento']);	
        
        $documentos_lp = $DocumentosModel->getTodosDocumentos("LP");
        
	include("vistas/configuracion/documentos/tabla_lp.php");
                
        echo $tabla_documento_lp;
    }
    
    
    
    
    
    
    ////////////////////// SAMC
    
    public function GuardarDocumentoSAMC() {
		
	$this->model->cargar("DocumentosModel.php", "configuracion");
        $DocumentosModel = new DocumentosModel();
        
        $resp = $DocumentosModel->agregarDocumento(
            $_POST['documento'], "SAMC"
	);	
        
        $documentos_samc = $DocumentosModel->getTodosDocumentos("SAMC");
        
	include("vistas/configuracion/documentos/tabla_samc.php");
        
        echo $tabla_documento_samc;
        
        
    }
    
    public function eliminarDocumentoSAMC(){
		
	$this->model->cargar("DocumentosModel.php");
        $DocumentosModel = new DocumentosModel();
        
        $resp = $DocumentosModel->eliminarDocumento($_POST['id_documento']);	
        
        $documentos_samc = $DocumentosModel->getTodosDocumentos("SAMC");
        
	include("vistas/configuracion/documentos/tabla_samc.php");
        
        echo $tabla_documento_samc;
        
    }
    
    
    
    
    
    
    
    ////////////////////// SASI
    
    public function GuardarDocumentoSASI() {
		
	$this->model->cargar("DocumentosModel.php", "configuracion");
        $DocumentosModel = new DocumentosModel();
        
        $resp = $DocumentosModel->agregarDocumento(
            $_POST['documento'], "SASI"
	);	
        
        $documentos_sasi = $DocumentosModel->getTodosDocumentos("SASI");
        
	include("vistas/configuracion/documentos/tabla_sasi.php");
        
        echo $tabla_documento_sasi;
        
    }
    
    public function eliminarDocumentoSASI(){
		
	$this->model->cargar("DocumentosModel.php");
        $DocumentosModel = new DocumentosModel();
        
        $resp = $DocumentosModel->eliminarDocumento($_POST['id_documento']);	
        
        $documentos_sasi = $DocumentosModel->getTodosDocumentos("SASI");
        
	include("vistas/configuracion/documentos/tabla_sasi.php");
                
        echo $tabla_documento_sasi;
    }
    
    
    
    
    
    
    
    
    ////////////////////// SA
    
    public function GuardarDocumentoSA() {
		
	$this->model->cargar("DocumentosModel.php", "configuracion");
        $DocumentosModel = new DocumentosModel();
        
        $resp = $DocumentosModel->agregarDocumento(
            $_POST['documento'], "SA"
	);	
        
        $documentos_sa = $DocumentosModel->getTodosDocumentos("SA");
        
	include("vistas/configuracion/documentos/tabla_sa.php");
        
        echo $tabla_documento_sa;
        
    }
    
    public function eliminarDocumentoSA(){
		
	$this->model->cargar("DocumentosModel.php");
        $DocumentosModel = new DocumentosModel();
        
        $resp = $DocumentosModel->eliminarDocumento($_POST['id_documento']);	
        
        $documentos_sa = $DocumentosModel->getTodosDocumentos("SA");
        
	include("vistas/configuracion/documentos/tabla_sa.php");
                
        echo $tabla_documento_sa;
    }
    
    
    
    
    
    
    
    
    
    ////////////////////// CM
    
    public function GuardarDocumentoCM() {
		
	$this->model->cargar("DocumentosModel.php", "configuracion");
        $DocumentosModel = new DocumentosModel();
        
        $resp = $DocumentosModel->agregarDocumento(
            $_POST['documento'], "CM"
	);	
        
        $documentos_cm = $DocumentosModel->getTodosDocumentos("CM");
        
	include("vistas/configuracion/documentos/tabla_cm.php");
        
        echo $tabla_documento_cm;
        
    }
    
    public function eliminarDocumentoCM(){
		
	$this->model->cargar("DocumentosModel.php");
        $DocumentosModel = new DocumentosModel();
        
        $resp = $DocumentosModel->eliminarDocumento($_POST['id_documento']);	
        
        $documentos_cm = $DocumentosModel->getTodosDocumentos("CM");
        
	include("vistas/configuracion/documentos/tabla_cm.php");
        
        echo $tabla_documento_cm;
        
    }
    
    
    
    
    
    
    
    
    ////////////////////// CD
    
    public function GuardarDocumentoCD() {
		
	$this->model->cargar("DocumentosModel.php", "configuracion");
        $DocumentosModel = new DocumentosModel();
        
        $resp = $DocumentosModel->agregarDocumento(
            $_POST['documento'], "CD"
	);	
        
        $documentos_cd = $DocumentosModel->getTodosDocumentos("CD");
        
	include("vistas/configuracion/documentos/tabla_cd.php");
        
        echo $tabla_documento_cd;
        
    }
    
    public function eliminarDocumentoCD(){
		
	$this->model->cargar("DocumentosModel.php");
        $DocumentosModel = new DocumentosModel();
        
        $resp = $DocumentosModel->eliminarDocumento($_POST['id_documento']);	
        
        $documentos_cd = $DocumentosModel->getTodosDocumentos("CD");
        
	include("vistas/configuracion/documentos/tabla_cd.php");
        
        echo $tabla_documento_cd;
        
    }
    
    
    
    
    
    
    
    
    
    ////////////////////// MC
    
    public function GuardarDocumentoMC() {
		
	$this->model->cargar("DocumentosModel.php", "configuracion");
        $DocumentosModel = new DocumentosModel();
        
        $resp = $DocumentosModel->agregarDocumento(
            $_POST['documento'], "MC"
	);	
        
        $documentos_mc = $DocumentosModel->getTodosDocumentos("MC");
        
	include("vistas/configuracion/documentos/tabla_mc.php");
         
        echo $tabla_documento_mc;
        
    }
    
    public function eliminarDocumentoMC(){
		
	$this->model->cargar("DocumentosModel.php");
        $DocumentosModel = new DocumentosModel();
        
        $resp = $DocumentosModel->eliminarDocumento($_POST['id_documento']);	
        
        $documentos_mc = $DocumentosModel->getTodosDocumentos("MC");
        
	include("vistas/configuracion/documentos/tabla_mc.php");
        
        echo $tabla_documento_mc;
        
    }
    
    
    
}

?>