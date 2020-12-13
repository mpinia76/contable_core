<?php
namespace Contable\Core\service\impl;


use Contable\Core\model\Cuenta;

use Contable\Core\service\IMovimientoCuentaService;

use Contable\Core\model\MovimientoVenta;

use Contable\Core\service\ServiceFactory;

use Contable\Core\model\Caja;

use Contable\Core\model\Venta;

use Contable\Core\model\EstadoVenta;

use Contable\Core\service\IVentaService;

use Contable\Core\dao\DAOFactory;

use Cose\Crud\service\impl\CrudService;

use Cose\Security\service\SecurityContext;
use Cose\Security\model\User;

use Cose\exception\ServiceException;
use Cose\exception\ServiceNoResultException;
use Cose\exception\ServiceNonUniqueResultException;
use Cose\exception\DuplicatedEntityException;
use Cose\exception\DAOException;

/**
 * servicio para MovimientoTransferencia
 *  
 *  @author Marcos
 * @since 02-08-2018
 *
 */
class MovimientoTransferenciaServiceImpl extends MovimientoCuentaServiceImpl {

	
	protected function getDAO(){
		return DAOFactory::getMovimientoTransferenciaDAO();
	}
		
	function getTotales( Cuenta $cuenta=null, \Datetime $fecha = null){
		
		$result = $this->getDAO()->getTotales($cuenta, $fecha);
		$totales = $result[0];
		return $totales["haber"] - $totales["debe"];
		
	}	

}	