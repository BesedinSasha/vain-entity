<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 5/5/16
 * Time: 10:24 AM
 */

namespace Vain\Entity\Operation\Factory\Decorator\Event;


use Vain\Entity\EntityInterface;
use Vain\Entity\Event\Operation\EventOperationFactoryInterface;
use Vain\Entity\Operation\Factory\Decorator\AbstractOperationFactoryDecorator;
use Vain\Entity\Operation\Factory\EntityOperationFactoryInterface;
use Vain\Operation\Collection\Factory\CollectionFactoryInterface;

class OperationFactoryEventDecorator extends AbstractOperationFactoryDecorator
{
    private $collectionFactory;

    private $eventFactory;

    /**
     * OperationFactoryEventDecorator constructor.
     * @param CollectionFactoryInterface $collectionFactory
     * @param EventOperationFactoryInterface $eventOperationFactory
     * @param EntityOperationFactoryInterface $operationFactory
     */
    public function __construct(CollectionFactoryInterface $collectionFactory, EventOperationFactoryInterface $eventOperationFactory, EntityOperationFactoryInterface $operationFactory)
    {
        $this->collectionFactory = $collectionFactory;
        $this->eventFactory = $eventOperationFactory;
        parent::__construct($operationFactory);
    }

    /**
     * @inheritDoc
     */
    public function create(EntityInterface $entity)
    {
        $operation = parent::create($entity);

        return $this->collectionFactory->create()
            ->add($operation)
            ->add($this->eventFactory->create($entity));
    }

    /**
     * @inheritDoc
     */
    public function update(EntityInterface $entity)
    {
        $operation = parent::update($entity);

        return $this->collectionFactory->create()
            ->add($operation)
            ->add($this->eventFactory->update($entity));
    }

    /**
     * @inheritDoc
     */
    public function delete(EntityInterface $entity)
    {
        $operation = parent::delete($entity);

        return $this->collectionFactory->create()
            ->add($operation)
            ->add($this->eventFactory->delete($entity));
    }
}