<?php

namespace Rorschach\UtilityBundle;

use Rorschach\UtilityBundle\DependencyInjection\UtilityExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * UtilityBundle
 */
class UtilityBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new UtilityExtension();
    }
}