<?php

namespace Zera555\ShareASale\Validator\Factory;


use Zera555\ShareASale\Validator\ProperServiceMethodParametersValidator;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;


class ProperServiceMethodParametersValidatorFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $sm, $requestedName, array $options = null)
    {
        $validator = new ProperServiceMethodParametersValidator();
        return $validator;
    }

}