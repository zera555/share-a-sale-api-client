<?php

namespace Zera555\ShareASale\Validator\Factory;


use Zera555\ShareASale\Validator\SortDirectionParameterValidator;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;


class SortDirectionParameterValidatorFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $sm, $requestedName, array $options = null)
    {
        $validator = new SortDirectionParameterValidator();
        return $validator;
    }

}