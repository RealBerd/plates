<?php

use League\Plates\Extension;
use League\Plates\Engine;

/**
 * Extension that adds slim() method (returns slim-app instance)
 */
class PlatesSlimExtension implements League\Plates\Extension\ExtensionInterface
{
    public $slimApp;

    public function __construct($slimApp)
    {
        $this->slimApp = $slimApp;
    }

    public function register(Engine $engine)
    {
        $engine->registerFunction('slim', array($this, 'getSlim'));
    }

    public function getSlim()
    {
        return $this->slimApp;
    }


}
