<?php

namespace Personaliza\Auth\interfaces;
use Personaliza\Auth\Entity\People;

/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 03/04/17
 * Time: 10:49
 */
interface OutPutInterface
{
    public function load(People $people);
}