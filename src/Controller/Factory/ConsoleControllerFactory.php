<?php
namespace Zera555\ShareASale\Controller\Factory;


use Zera555\ShareASale\Controller\ConsoleController;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;


class ConsoleControllerFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $sm, $requestedName, array $options = null)
    {

        $service = $sm->get('Zera555\ShareASale\Service\ShareASaleService');

        $controller = new ConsoleController();
        $controller->setService($service);

        return $controller;

    }

}