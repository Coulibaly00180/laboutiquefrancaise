<?php
namespace App\EventSubscriber;

use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelInterface;

class EasyAdminSubcriber implements EventSubscriberInterface
{
    private $appKernel;

    public function __construct(KernelInterface $appKernel)
    {

    }

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

        $file_name = uniqid();

        $extension = pathinfo($_FILES['Product']['name']['illustration'], PATHINFO_EXTENSION);

        move_uploaded_file($tmp_name, $file_name. '.' .$extension);
    }
}
?>