<?php

namespace Rorschach\UtilityBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration  implements ConfigurationInterface
{

    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('utility');

        $treeBuilder->getRootNode()
            ->children()
                ->arrayNode('timestamp')
                    ->children()
                        ->scalarNode('timezone')
                    ->end()
                ->end()
            ->end()
        ;

        return $treeBuilder;

    }

}