<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 5/4/16
 * Time: 11:41 AM
 */

namespace Vain\Entity\Operation;

use Vain\Entity\EntityInterface;
use Vain\Operation\AbstractOperation;

abstract class AbstractEntityOperation extends AbstractOperation implements EntityOperationInterface
{
    private $entity;

    /**
     * AbstractEntityOperation constructor.
     * @param EntityInterface $entity
     * @param string $id
     */
    public function __construct(EntityInterface $entity = null, $id = null)
    {
        $this->entity = $entity;
        parent::__construct($id);
    }

    /**
     * @return EntityInterface
     */
    public function getEntity()
    {
        return $this->entity;
    }
}