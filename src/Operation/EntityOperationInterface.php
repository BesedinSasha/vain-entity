<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 5/4/16
 * Time: 11:36 AM
 */

namespace Vain\Entity\Operation;

use Vain\Entity\EntityInterface;
use Vain\Operation\OperationInterface;

interface EntityOperationInterface extends OperationInterface
{
    /**
     * @return EntityInterface
     */
    public function getEntity();
}