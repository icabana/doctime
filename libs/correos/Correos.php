<?php
	
class Correos extends PHPMailer{
		
	public function __construct(){
		
		//Para Usar Gmail se debe activar la siguiente opción
		//https://myaccount.google.com/lesssecureapps

		$params = Parametros::singleton();
					 
				/* GMAIL
                $this->IsSMTP();
                $this->SMTPSecure = 'tls';
                $this->Host = 'smtp.gmail.com';
                $this->SMTPAuth= true;
                $this->Port = 587;                 
	        	$this->From = "ismael.cabana@gmail.com";
                $this->FromName = utf8_decode("SIVI");
                $this->Username = "ismael.cabana@gmail.com";
                $this->Password = "L0g1nT1m301012020*";
	    		$this->AltBody = "Enfocados en la Calidad";
			   	*/
				
				/* LOGNTIME 
				$this->IsSMTP();
				$this->Host = 'mail.logintime.co';
				$this->FromName = "Logintime";
	    		$this->AltBody = "Enfocados en la Calidad";
                $this->Port="587";
                $this->SMTPAuth = true;
                $this->Username = "icabana@logintime.co";
                $this->Password = "Login2017";
                $this->From = "icabana@logintime.co";
					*/

				/* LEGALTEAM */
				$this->IsSMTP();

				$this->Host = 'mail.legalteamcolombia.co';
				$this->Port="587";
                $this->SMTPAuth = true;
				
				$this->FromName = "SEPT";
				$this->AltBody = "Sistema Estrategico de Transporte Publico de Santa Marta";
				
                $this->Username = "contacto@legalteamcolombia.co";
				$this->Password = "Ismael777880428";
				
                $this->From = "info@setpsantamarta.gov.co";
				/*	*/




		}
	
		function agregarDestinos($str){			
			$cc = explode(';', $str);
			foreach($cc as $ccMail ){
				$dtsCC = explode(',', $ccMail );
				$this->AddAddress($dtsCC[1],$dtsCC[0]);	
			}
			
		}
	
		function agregarCC($strCC){			
			$cc = explode(';', $strCC);
			foreach($cc as $ccMail ){
				$dtsCC = explode(',', $ccMail );
				$this->AddCC($dtsCC[1],$dtsCC[0]);	
			}
			
		}
	
		function agregarCCO($str){			
			$cc = explode(';', $str);
			foreach($cc as $ccMail ){
				$dtsCC = explode(',', $ccMail );
				$this->AddBCC($dtsCC[1],$dtsCC[0]);	
			}			
		}	
		
		function agregarReenvio($str){
			$cc = explode(';', $str);
			foreach($cc as $ccMail ){
				$dtsCC = explode(',', $ccMail );
				$this->AddReplyTo($dtsCC[1],$dtsCC[0]);	
			}			
		}
		
		function EnviarCorreo($mensaje, $asunto, $correos){
					 
			foreach($correos as $correo){
				$this->AddBCC( $correo );                
			}
							
			$this->Subject = $asunto;          
			$this->Body = $mensaje;              
					 
			$enviado = $this->Send();         
				
			if($enviado){
				return   "Correo electrónico enviado Correctamente";
			}else{
				return "NO FUE POSIBLE ENVIAR EL MENSAJE ".$this->ErrorInfo;             
			}  
			
		}
	
	}
?>