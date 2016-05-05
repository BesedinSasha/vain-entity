<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 5/4/16
 * Time: 12:00 PM
 */

namespace Vain\Entity\Event;

use Vain\Entity\EntityInterface;
use Vain\Event\EventInterface;

interface EntityEventInterface extends EventInterface
{
    /**
     * @return EntityInterface
     */
    public function getEntity();
}