<?php

namespace NAMESPACE;

use \Anax\Configure\ConfigureInterface;
use \Anax\Configure\ConfigureTrait;
use \Anax\DI\InjectionAwareInterface;
use \Anax\Di\InjectionAwareTrait;

/**
 * A controller class.
 */
class CLASS_NAME implements ConfigureInterface, InjectionAwareInterface
{
    use ConfigureTrait,
        InjectionAwareTrait;



    /**
     * @var $data description
     */
    private $data;



    /**
     * Description.
     *
     * @param $data description.
     *
     * @throws Exception
     *
     * @return void
     */
    public function method($data)
    {
        ;
    }
}
