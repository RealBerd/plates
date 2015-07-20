<?php

namespace \RealBerd\Plates;

use League\Plates\Extension;
use League\Plates\Engine;

/**
 * Extension that adds slim() method (returns slim-app instance)
 */
class PlatesMailtoExtension implements League\Plates\Extension\ExtensionInterface
{
    public function register(Engine $engine)
    {
        $engine->registerFunction('mailto', array($this, 'generateMailtoLink'));
    }

    public function generateMailtoLink($email, $subject = null, $body = null, $cc = null)
    {
        $link = "mailto:"
            .$email."?"
            .($subject != null ? "&subject=".urlencode($subject): "")
            .($cc != null ? "&cc=".$cc: "")
            .($body != null ? "&body=".urlencode($body): "");
        return $link;
    }


}
