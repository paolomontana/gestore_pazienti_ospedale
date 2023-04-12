<?php

namespace Container29IxKkU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPatientControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PatientController' shared autowired service.
     *
     * @return \App\Controller\PatientController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PatientController.php';

        $container->services['App\\Controller\\PatientController'] = $instance = new \App\Controller\PatientController(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), ($container->privates['App\\Repository\\PatientRepository'] ?? $container->load('getPatientRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\PatientController', $container));

        return $instance;
    }
}
