<?php
	
class Correos extends PHPMailer{
		
	public function __construct()
	    {
            	    	
		$params = Parametros::singleton();
		                
                $this->IsSMTP();
                $this->SMTPSecure = 'tls';
                $this->Host = 'smtp.gmail.com';
                $this->SMTPAuth= true;
                $this->Port = 465;                 
	        $this->From = "ismael.cabana@gmail.com";
                $this->FromName = utf8_decode("SIVI");
                 $this->Username = "ismael.cabana@gmail.com";
                $this->Password = "L0g1nT1m301012020*";
	    	$this->AltBody = "Enfocados en la Calidad";
               
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
	
	}
?>