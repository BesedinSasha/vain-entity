<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 5/4/16
 * Time: 12:01 PM
 */

namespace Vain\Entity\Event\Operation;

use Vain\Entity\EntityInterface;
use Vain\Operation\OperationInterface;

interface EventOperationFactoryInterface
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