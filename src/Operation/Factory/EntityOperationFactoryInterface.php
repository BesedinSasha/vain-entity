<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 5/5/16
 * Time: 10:20 AM
 */
namespace Vain\Entity\Operation\Factory;

use Vain\Entity\EntityInterface;
use Vain\Operation\OperationInterface;

interface EntityOperationFactoryInterface
{
    /**
     * @param EntityInterface $entity
     *
     * @return OperationInterface
     */
    public function create(EntityInterface $entity);

    /**
     * @param EntityInterface $entity
     *
     * @return OperationInterface
     */
    public function update(EntityInterface $entity);

    /**
     * @param EntityInterface $entity
     *
     * @return OperationInterface
     */
    public function delete(EntityInterface $entity);
}