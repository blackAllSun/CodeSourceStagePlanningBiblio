<?php
ini_set('display_errors','on');
error_reporting(E_ALL);
/**

Fatal error: Uncaught Doctrine\DBAL\Exception: Unknown column type "timestamp" requested. Any Doctrine type that you use has to be registered with \Doctrine\DBAL\Types\Type::addType(). You can get a list of all the known types with \Doctrine\DBAL\Types\Type::getTypesMap(). If this error occurs during database introspection then you might have forgotten to register all database types for a Doctrine Type. Use AbstractPlatform#registerDoctrineTypeMapping() or have your custom types implement Type#getMappedDatabaseTypes(). If the type name is empty you might have a problem with the cache or forgot some mapping information. in /home/planning/www/planningbiblio/vendor/doctrine/dbal/lib/Doctrine/DBAL/DBALException.php:282 Stack trace: #0 /home/planning/www/planningbiblio/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/TypeRegistry.php(39): Doctrine\DBAL\DBALException::unknownColumnType() #1 /home/planning/www/planningbiblio/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/Type.php(233): Doctrine\DBAL\Types\TypeRegistry->get() #2 /home/ in /home/planning/www/planningbiblio/vendor/doctrine/dbal/lib/Doctrine/DBAL/DBALException.php on line 282

Fatal error: Uncaught Error: Cannot access protected property App\Model\Absence::$perso_id in /home/planning/www/planningbiblio/public/test.php:12 Stack trace: #0 {main} thrown in /home/planning/www/planningbiblio/public/test.php on line 12
**/


require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/init.php';
use App\Model\Absence;

$em=$entityManager->getRepository(Absence::class);

$absence=$em->find(1);
echo $absence->perso_id;
var_dump($absence);

echo 'test';
