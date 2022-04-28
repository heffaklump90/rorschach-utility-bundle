<?php

namespace Rorschach\UtilityBundle\EventListener;

use Doctrine\Persistence\Event\LifecycleEventArgs;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;


class TimestampListener
{
    private ParameterBagInterface $parameterBag;
    private string $timezone;

    public function __construct(ParameterBagInterface $parameterBag)
    {
        $this->parameterBag = $parameterBag;
        $this->timezone = $this->parameterBag->get('utility');
    }


    public function prePersist(LifecycleEventArgs $event)
    {
        $object = $event->getObject();
        if(method_exists($object, 'setCreatedAt')){
            $object->setCreatedAt(new \DateTime('now', new \DateTimeZone($this->timezone)));
        }if(method_exists($object, 'setUpdatedAt')){
        $object->setUpdatedAt(new \DateTime('now', new \DateTimeZone($this->timezone)));
    }
    }

    public function preUpdate(LifecycleEventArgs $event)
    {
        $object = $event->getObject();
        if(method_exists($object, 'setUpdatedAt')){
            $object->setUpdatedAt(new \DateTime('now', new \DateTimeZone($this->timezone)));
        }
    }
}