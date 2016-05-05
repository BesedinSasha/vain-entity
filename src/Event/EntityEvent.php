<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 5/5/16
 * Time: 9:50 AM
 */

namespace Vain\Entity\Event;

use Vain\Entity\EntityInterface;
use Vain\Event\AbstractEvent;

class EntityEvent extends AbstractEvent implements EntityEventInterface
{
    private $entity;

    /**
     * AbstractEntityEvent constructor.
     * @param string $name
     * @param EntityInterface $entity
     */
    public function __construct($name, EntityInterface $entity)
    {
        $this->entity = $entity;
        parent::__construct($name);
    }

    /**
     * @return EntityInterface
     */
    public function getEntity()
    {
        return $this->entity;
    }
}