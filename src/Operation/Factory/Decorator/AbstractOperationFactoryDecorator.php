<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 5/5/16
 * Time: 10:24 AM
 */

namespace Vain\Entity\Operation\Factory\Decorator;


use Vain\Entity\EntityInterface;
use Vain\Entity\Operation\Factory\EntityOperationFactoryInterface;

class AbstractOperationFactoryDecorator implements EntityOperationFactoryInterface
{
    private $operationFactory;

    /**
     * AbstractOperationFactoryDecorator constructor.
     * @param EntityOperationFactoryInterface $operationFactory
     */
    public function __construct(EntityOperationFactoryInterface $operationFactory)
    {
        $this->operationFactory = $operationFactory;
    }

    /**
     * @inheritDoc
     */
    public function create(EntityInterface $entity)
    {
        return $this->operationFactory->create($entity);
    }

    /**
     * @inheritDoc
     */
    public function update(EntityInterface $entity)
    {
        return $this->operationFactory->update($entity);
    }

    /**
     * @inheritDoc
     */
    public function delete(EntityInterface $entity)
    {
        return $this->operationFactory->delete($entity);
    }
}