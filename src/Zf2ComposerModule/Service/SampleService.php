<?php

namespace Zf2ComposerModule\Service;

/**
 * Your ZF2 Service
 */
class SampleService implements \Zend\ServiceManager\ServiceManagerAwareInterface
{

    protected $serviceManager;

    public function setServiceManager(\Zend\ServiceManager\ServiceManager $serviceManager)
    {
        $this->serviceManager = $serviceManager;
    }

}
