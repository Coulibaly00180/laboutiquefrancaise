<?php
    namespace App\EventSubscriber;

use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
    
    class EasyAdminSubcriber implements EventSubscriberInterface
    {
        public static function getSubscribedEvents()
        {
            return [
                BeforeEntityPersistedEvent::class => ['setIllustration'],
            ];
        }
    }
?>