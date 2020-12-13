<?php
namespace Contable\Core\dao;

/**
 * Factory de DAOs
 *  
 *  @author Marcos
 * @since 02-08-2018
 *
 */


use Contable\Core\dao\impl\MovimientoPagoDoctrineDAO;



use Contable\Core\dao\impl\InformeDiarioComisionDoctrineDAO;

use Contable\Core\dao\impl\InformeDiarioDebitoCreditoDoctrineDAO;

use Contable\Core\dao\impl\InformeSemanalDoctrineDAO;

use Contable\Core\dao\impl\BancoDoctrineDAO;


use Contable\Core\dao\impl\MovimientoTransferenciaDoctrineDAO;

use Contable\Core\dao\impl\TransferenciaDoctrineDAO;

use Contable\Core\dao\impl\CajaChicaDoctrineDAO;

use Contable\Core\dao\impl\MovimientoGastoDoctrineDAO;

use Contable\Core\dao\impl\CuentaDoctrineDAO;

use Contable\Core\dao\impl\MovimientoCuentaDoctrineDAO;

use Contable\Core\dao\impl\PagoDoctrineDAO;

use Contable\Core\dao\impl\GastoDoctrineDAO;

use Contable\Core\dao\impl\ConceptoMovimientoDoctrineDAO;

use Contable\Core\dao\impl\ConceptoGastoDoctrineDAO;

use Contable\Core\dao\impl\CajaDoctrineDAO;

class DAOFactory {


	/**
	 * DAO para Banco.
	 * 
	 * @return IBancoDAO
	 */
	public static function getBancoDAO(){
	
		return new BancoDoctrineDAO();	
	}
	/**
	 * DAO para CajaChica.
	 * 
	 * @return ICajaChicaDAO
	 */
	public static function getCajaChicaDAO(){
	
		return new CajaChicaDoctrineDAO();	
	}
	
	/**
	 * DAO para Caja.
	 * 
	 * @return ICajaDAO
	 */
	public static function getCajaDAO(){
	
		return new CajaDoctrineDAO();	
	}
	

	

	/**
	 * DAO para ConceptoGasto.
	 * 
	 * @return IConceptoGastoDAO
	 */
	public static function getConceptoGastoDAO(){
	
		return new ConceptoGastoDoctrineDAO();	
	}

	/**
	 * DAO para ConceptoMovimiento.
	 * 
	 * @return IConceptoMovimientoDAO
	 */
	public static function getConceptoMovimientoDAO(){
	
		return new ConceptoMovimientoDoctrineDAO();	
	}
	
	
	
	
	/**
	 * DAO para Cuenta.
	 * 
	 * @return ICuentaDAO
	 */
	public static function getCuentaDAO(){
	
		return new CuentaDoctrineDAO();	
	}
	
	
	
	
	/**
	 * DAO para Gasto.
	 * 
	 * @return IGastoDAO
	 */
	public static function getGastoDAO(){
	
		return new GastoDoctrineDAO();	
	}
	

	/**
	 * DAO para InformeSemanal.
	 * 
	 * @return IInformeSemanalDAO
	 */
	public static function getInformeSemanalDAO(){
	
		return new InformeSemanalDoctrineDAO();	
	}
	

	/**
	 * DAO para InformeDiarioComision.
	 * 
	 * @return IInformeDiarioComisionDAO
	 */
	public static function getInformeDiarioComisionDAO(){
	
		return new InformeDiarioComisionDoctrineDAO();	
	}
	

	/**
	 * DAO para InformeDiarioDebitoCredito.
	 * 
	 * @return IInformeDiarioDebitoCreditoDAO
	 */
	public static function getInformeDiarioDebitoCreditoDAO(){
	
		return new InformeDiarioDebitoCreditoDoctrineDAO();	
	}
	
	
	/**
	 * DAO para MovimientoCuenta.
	 * 
	 * @return IMovimientoCuentaDAO
	 */
	public static function getMovimientoCuentaDAO(){
	
		return new MovimientoCuentaDoctrineDAO();	
	}
	
	
	/**
	 * DAO para MovimientoGasto.
	 * 
	 * @return IMovimientoGastoDAO
	 */
	public static function getMovimientoGastoDAO(){
	
		return new MovimientoGastoDoctrineDAO();	
	}
	
	
	
	
	
	/**
	 * DAO para MovimientoPago.
	 * 
	 * @return IMovimientoPagoDAO
	 */
	public static function getMovimientoPagoDAO(){
	
		return new MovimientoPagoDoctrineDAO();	
	}
	
	
	
	/**
	 * DAO para MovimientoTransferencia.
	 * 
	 * @return IMovimientoTransferenciaDAO
	 */
	public static function getMovimientoTransferenciaDAO(){
	
		return new MovimientoTransferenciaDoctrineDAO();	
	}
	
	
	
	/**
	 * DAO para Pago.
	 * 
	 * @return IPagoDAO
	 */
	public static function getPagoDAO(){
	
		return new PagoDoctrineDAO();	
	}
	
	
	
	
	/**
	 * DAO para Transferencia.
	 * 
	 * @return ITransferenciaDAO
	 */
	public static function getTransferenciaDAO(){
	
		return new TransferenciaDoctrineDAO();	
	}
		
	
		
}
