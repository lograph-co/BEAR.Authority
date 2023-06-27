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

namespace FakeVendor\FakeProject\Module;

use BEAR\Resource\Module\ResourceModule;
use Ray\Di\AbstractModule;
use Ryo88c\Authority\Module;

class AppModule extends AbstractModule
{
    /**
     * {@inheritDoc}
     */
    protected function configure(): void
    {
        $this->install(new ResourceModule('FakeVendor\FakeProject'));
        $this->install(new Module());
    }
}
