<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Ryo88c\Authority;

/**
 * @property int    $id
 * @property string $role
 * @property string $label
 */
abstract class AbstractAudience
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $role;

    /**
     * @var string
     */
    protected $label;

    abstract public function __get(string $name);

    abstract public function toArray(): array;
}
