<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 5/4/16
 * Time: 12:01 PM
 */

namespace Vain\Entity\Event\Operation;

use Vain\Entity\EntityInterface;
use Vain\Entity\Event\Create\CreateEventOperation;
use Vain\Entity\Event\Delete\DeleteEventOperation;
use Vain\Entity\Event\Update\UpdateEventOperation;
use Vaind\Id\Generator\IdGeneratorInterface;

class EventOperationFactory implements EventOperationFactoryInterface
{
    private $idGenerator;

    /**
     * EventOperationFactory constructor.
     * @param IdGeneratorInterface $idGenerator
     */
    public function __construct(IdGeneratorInterface $idGenerator)
    {
        $this->idGenerator = $idGenerator;
    }

    /**
     * @inheritDoc
     */
    public function create(EntityInterface $entity)
    {
        return new CreateEventOperation($entity, $this->idGenerator->generate());
    }

    /**
     * @inheritDoc
     */
    public function update(EntityInterface $entity)
    {
        return new UpdateEventOperation($entity, $this->idGenerator->generate());
    }

    /**
     * @inheritDoc
     */
    public function delete(EntityInterface $entity)
    {
        return new DeleteEventOperation($entity, $this->idGenerator->generate());
    }
}