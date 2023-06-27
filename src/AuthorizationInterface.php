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

interface AuthorizationInterface
{
    public function authorize($accessToken = null): Audience;

    public function tokenize(AbstractAudience $aud, int $exp = null): array;

    public function hasToken(): bool;

    public function extractToken(): string;

    public function encodeToken($payload, $key = null): string;

    public function decodeToken($jwt, $key = null);

    public function generatePrivateKey(): string;
}
