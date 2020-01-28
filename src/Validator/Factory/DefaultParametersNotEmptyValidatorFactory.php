<?php

namespace Zera555\ShareASale\Validator\Factory;


use Zera555\ShareASale\Validator\DefaultParametersNotEmptyValidator;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;


class DefaultParametersNotEmptyValidatorFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $sm, $requestedName, array $options = null)
    {
        $validator = new DefaultParametersNotEmptyValidator();
        return $validator;
    }

}