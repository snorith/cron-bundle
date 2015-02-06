<?php

/**
 * This file is part of AequasiCronBundle
 *
 * (c) Aaron Scherer <aequasi@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE
 */

namespace Aequasi\Bundle\CronBundle\Annotation;

/**
 */
use Doctrine\Common\Annotations\Annotation;

/**
 * @Annotation()
 * @Target("CLASS")
 * @author Aaron Scherer <aequasi@gmail.com>
 */
class CronJob extends Annotation
{
    public $value;
}
