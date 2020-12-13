<?php

namespace Contable\Core\model;

use Contable\Core\utils\ContableUtils;

use Cose\model\impl\Entity;

use Cose\Security\model\User;

use Cose\utils\Logger;

/**
 * Caja chica
 * 
 * @Entity @Table(name="contable_caja_chica")
 * 
 *  @author Marcos
 * @since 02-08-2018
 */

class CajaChica extends Cuenta{

	//variables de instancia.

	
	
	
	public function __construct(){
	}
	
	public function __toString(){
		 return  "Caja Chica"; // .ContableUtils::formatMontoToView($this->getSaldo()) ;
	}
    

    
}
?>