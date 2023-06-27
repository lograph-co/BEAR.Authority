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

final class RefreshTokenPayload extends AbstractPayload
{
    /**
     * @var AbstractAudience
     */
    protected $aud;

    /**
     * @var int
     */
    protected $createdAt;

    public function __construct(AbstractAudience $aud)
    {
        $this->aud = $aud;
        $this->createdAt = time();
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(): array
    {
        return ['aud' => $this->aud->toArray(), 'createdAt' => $this->createdAt];
    }
}
