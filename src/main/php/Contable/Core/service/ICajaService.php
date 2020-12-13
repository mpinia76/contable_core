<?php
namespace Contable\Core\service;


use Contable\Core\model\MovimientoCuenta;

use Contable\Core\model\Empleado;
use Contable\Core\model\Caja;

use Cose\Crud\service\ICrudService;
use Cose\Security\model\User;

/**
 * interfaz para el servicio de caja
 *  
 * @author Bernardo
 * @since 23-05-2014
 *
 */
interface ICajaService extends ICrudService {
	
	function getCajasAbiertas( \Datetime $fecha = null );
	
	function getCajasFecha( \Datetime $fecha );
	
	function getCajaAbiertaByEmpleado(Empleado $empleado);
	
	function cerrarCaja(Caja $caja, User $user);
	
	function abrirCaja( Caja $caja, User $user );

}