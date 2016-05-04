<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 5/4/16
 * Time: 11:34 AM
 */

namespace Vain\Entity\Operation\Factory;

use Vain\Entity\EntityInterface;
use Vain\Entity\Operation\EntityOperationInterface;

interface EntityOperationFactoryInterface
{
    /**
     * @param EntityInterface $entity
     *
     * @return EntityOperationInterface
     */
    public function create(EntityInterface $entity);

    /**
     * @return EntityOperationInterface
     */
    public function update(EntityInterface $entity);

    /**
     * @return EntityOperationInterface
     */
    public function delete(EntityInterface $entity);
}