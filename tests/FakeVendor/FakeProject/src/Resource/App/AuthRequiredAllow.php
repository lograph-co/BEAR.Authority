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

namespace FakeVendor\FakeProject\Resource\App;

use BEAR\Resource\ResourceObject;
use Ryo88c\Authority\Auth;

class AuthRequiredAllow extends ResourceObject
{
    /**
     * @Auth(allow="admin")
     */
    public function onGet()
    {
        return $this;
    }

    /**
     * @Auth(allow="admin")
     */
    public function onPost()
    {
        return $this;
    }
}
