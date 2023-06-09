<?php

namespace ContainerS2QeZrq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_TwigComponent_ComponentFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.twig_component.component_factory' shared service.
     *
     * @return \Symfony\UX\TwigComponent\ComponentFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-twig-component/src/ComponentFactory.php';

        return $container->privates['ux.twig_component.component_factory'] = new \Symfony\UX\TwigComponent\ComponentFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'navbar_component' => [false, 'App\\Components\\Navbar', 'getNavbarService', true],
        ], [
            'navbar_component' => 'App\\Components\\Navbar',
        ]), ($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ['navbar_component' => ['key' => 'navbar_component', 'expose_public_props' => true, 'attributes_var' => 'attributes', 'service_id' => 'App\\Components\\Navbar', 'class' => 'App\\Components\\Navbar', 'template' => 'components/navbar_component.html.twig']]);
    }
}
