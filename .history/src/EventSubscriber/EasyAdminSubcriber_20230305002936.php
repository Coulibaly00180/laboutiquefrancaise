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

    public function setIllustration(BeforeEntityPersistedEvent $event)
    {
        $entity = $event->getEntityInstance();

        $tmp_name = $entity->getIllstration();

        $upload_file = $_FILES;

        $extension = pathinfo($_FILES['Product']['name']['illustration'], PATHINFO_EXTENSION);

        move_uploaded_file($tmp_name, $file_name. '.' .$extension);
    }
}
?>