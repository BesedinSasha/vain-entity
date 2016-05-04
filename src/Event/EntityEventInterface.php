<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 5/4/16
 * Time: 12:00 PM
 */

namespace Vain\Entity\Event;

use Vain\Entity\EntityInterface;

interface EntityEventInterface
{
    /**
     * @return EntityInterface
     */
    public function getEntity();
}