<?php


include_once  dirname(__DIR__) . '/vendor/autoload.php';


use Contable\Core\conf\ContableConfig;
use Cose\persistence\PersistenceContext;
use Contable\Core\notificaciones\backupBBDD\BackupBBDD;

//inicializamos cuentas core.
ContableConfig::getInstance()->initialize();
ContableConfig::getInstance()->initLogger( dirname(__FILE__).  "/log4php.xml");
				
$persistenceContext =  PersistenceContext::getInstance();


$notificacion = new BackupBBDD();
$notificacion->send();

//cerramos la conexión a la base.
$persistenceContext->close();
    



?>