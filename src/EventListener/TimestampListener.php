<?php

namespace Rorschach\UtilityBundle\EventListener;

use Doctrine\Persistence\Event\LifecycleEventArgs;


class TimestampListener
{
    public function prePersist(LifecycleEventArgs $event)
    {
        $object = $event->getObject();
        if(method_exists($object, 'setCreatedAt')){
            $object->setCreatedAt(new \DateTime('now', new \DateTimeZone('Europe/Berlin')));
        }if(method_exists($object, 'setUpdatedAt')){
        $object->setUpdatedAt(new \DateTime('now', new \DateTimeZone('Europe/Berlin')));
    }
    }

    public function preUpdate(LifecycleEventArgs $event)
    {
        $object = $event->getObject();
        if(method_exists($object, 'setUpdatedAt')){
            $object->setUpdatedAt(new \DateTime('now', new \DateTimeZone('Europe/Berlin')));
        }
    }
}