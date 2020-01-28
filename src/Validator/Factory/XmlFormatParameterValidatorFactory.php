<?php

namespace Zera555\ShareASale\Validator\Factory;


use Zera555\ShareASale\Validator\XmlFormatParameterValidator;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;


class XmlFormatParameterValidatorFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $sm, $requestedName, array $options = null)
    {
        $validator = new XmlFormatParameterValidator();
        return $validator;
    }

}