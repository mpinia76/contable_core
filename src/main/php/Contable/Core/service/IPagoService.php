<?php
namespace Contable\Core\service;


use Contable\Core\model\Pago;
use Cose\Security\model\User;

use Cose\Crud\service\ICrudService;

/**
 * interfaz para el servicio de Pago
 *  
 * @author Bernardo
 * @since 23-05-2014
 *
 */
interface IPagoService extends ICrudService {

	function anular(Pago $pago, User $user);
}