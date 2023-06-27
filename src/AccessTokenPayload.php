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

final class AccessTokenPayload extends AbstractPayload
{
    /**
     * @var AbstractAudience
     */
    protected $aud;

    /**
     * @var int
     */
    protected $exp;

    /**
     * @var int
     */
    protected $createdAt;

    /**
     * @see https://tools.ietf.org/html/rfc7519#section-4.1
     */
    public function __construct(AbstractAudience $aud, int $exp)
    {
        $this->aud = $aud;
        $this->exp = $exp;
        $this->createdAt = time();
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(): array
    {
        return ['aud' => $this->aud->toArray(), 'exp' => $this->exp, 'createdAt' => $this->createdAt];
    }
}
