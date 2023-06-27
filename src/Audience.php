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

final class Audience extends AbstractAudience
{
    public function __construct($params)
    {
        if ($params instanceof \stdClass) {
            $params = json_decode((string) json_encode($params), true);
        }
        foreach (['id', 'role', 'label'] as $name) {
            if (!\array_key_exists($name, $params)) {
                throw new \InvalidArgumentException(sprintf('%s is required in %s', $name, __CLASS__));
            }

            $this->{$name} = $params[$name];
        }
    }

    /**
     * {@inheritdoc}
     */
    public function __get(string $name)
    {
        if (!isset($this->{$name})) {
            throw new \InvalidArgumentException(sprintf('%s in undefined.', $name));
        }

        return $this->{$name};
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(): array
    {
        return ['id' => $this->id, 'role' => $this->role, 'label' => $this->label];
    }
}
