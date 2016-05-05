<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 5/4/16
 * Time: 12:01 PM
 */

namespace Vain\Entity\Event\Operation;

use Vain\Entity\EntityInterface;
use Vain\Event\Dispatcher\EventDispatcherInterface;
use Vain\Operation\Collection\Factory\CollectionFactoryInterface;

class EventOperationFactory implements EventOperationFactoryInterface
{
    private $collectionFactory;

    private $eventDispatcher;

    /**
     * EventOperationFactory constructor.
     * @param CollectionFactoryInterface $collectionFactory
     * @param EventDispatcherInterface $eventDispatcher
     */
    public function __construct(CollectionFactoryInterface $collectionFactory, EventDispatcherInterface $eventDispatcher)
    {
        $this->collectionFactory = $collectionFactory;
        $this->eventDispatcher = $eventDispatcher;
    }

    /**
     * @inheritDoc
     */
    public function create(EntityInterface $entity)
    {
        return $this->collectionFactory->create()
            ->add(new EntityEventOperation($this->eventDispatcher, 'entity:create', $entity))
            ->add(new EntityEventOperation($this->eventDispatcher, sprintf('%s:create', get_class($entity)), $entity));
    }

    /**
     * @inheritDoc
     */
    public function update(EntityInterface $entity)
    {
        return $this->collectionFactory->create()
            ->add(new EntityEventOperation($this->eventDispatcher, 'entity:update', $entity))
            ->add(new EntityEventOperation($this->eventDispatcher, sprintf('%s:update', get_class($entity)), $entity));
    }

    /**
     * @inheritDoc
     */
    public function delete(EntityInterface $entity)
    {
        return $this->collectionFactory->create()
            ->add(new EntityEventOperation($this->eventDispatcher, 'entity:delete', $entity))
            ->add(new EntityEventOperation($this->eventDispatcher, sprintf('%s:delete', get_class($entity)), $entity));
    }
}