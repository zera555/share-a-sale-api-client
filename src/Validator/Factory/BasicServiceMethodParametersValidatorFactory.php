<?php
namespace Zera555\ShareASale\Validator\Factory;


use Zera555\ShareASale\Validator\BasicServiceMethodParametersValidator;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;


class BasicServiceMethodParametersValidatorFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $sm, $requestedName, array $options = null)
    {
        $validator = new BasicServiceMethodParametersValidator();
        $validator->setProperServiceMethodParametersValidator($sm->get('Zera555\ShareASale\Validator\ProperServiceMethodParametersValidator'));
        $validator->setDefaultParametersNotEmptyValidator($sm->get('Zera555\ShareASale\Validator\DefaultParametersNotEmptyValidator'));
        $validator->setSortDirectionValidator($sm->get('Zera555\ShareASale\Validator\SortDirectionParameterValidator'));
        $validator->setFormatParameterValidator($sm->get('Zera555\ShareASale\Validator\FormatParameterValidator'));
        $validator->setXmlFormatParameterValidator($sm->get('Zera555\ShareASale\Validator\XmlFormatParameterValidator'));
        return $validator;
    }

}