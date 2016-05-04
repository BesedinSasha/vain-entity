<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 5/4/16
 * Time: 11:49 AM
 */

namespace Vain\Entity\Operation\Factory;

use Vain\Entity\EntityInterface;
use Vain\Entity\Operation\Create\CreateEntityOperation;
use Vain\Entity\Operation\Event\EventOperationFactoryInterface;
use Vain\Operation\Collection\Factory\CollectionFactoryInterface;
use Vaind\Id\Generator\IdGeneratorInterface;

class EntityOperationFactory implements EntityOperationFactoryInterface
{
    private $collectionFactory;

    private $eventOperationFactory;

    private $idGenerator;

    /**
     * EntityOperationFactory constructor.
     * @param CollectionFactoryInterface $collectionFactory
     * @param EventOperationFactoryInterface $eventOperationFactory
     * @param IdGeneratorInterface $idGenerator
     */
    public function __construct(CollectionFactoryInterface $collectionFactory, EventOperationFactoryInterface $eventOperationFactory, IdGeneratorInterface $idGenerator)
    {
        $this->collectionFactory = $collectionFactory;
        $this->eventOperationFactory = $eventOperationFactory;
        $this->idGenerator = $idGenerator;
    }

    /**
     * @inheritDoc
     */
    public function create(EntityInterface $entity)
    {
        return $this->collectionFactory
            ->create()
            ->add(new CreateEntityOperation($entity, $this->idGenerator->generate()))
            ->add($this->eventOperationFactory->create($entity));
    }

    /**
     * @inheritDoc
     */
    public function update(EntityInterface $entity)
    {
        // TODO: Implement update() method.
    }

    /**
     * @inheritDoc
     */
    public function delete(EntityInterface $entity)
    {
        // TODO: Implement delete() method.
    }
}