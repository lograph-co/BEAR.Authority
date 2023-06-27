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

use Ray\Aop\MethodInvocation;
use Ray\Di\Di\Named;

final class Authentication implements AuthenticationInterface
{
    /**
     * @var array
     */
    private $config;

    /**
     * @Named("config=authentication_config")
     */
    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * {@inheritdoc}
     */
    public function authenticate(AbstractAudience $audience, MethodInvocation $invocation): bool
    {
        $annotation = $invocation->getMethod()->getAnnotation(Auth::class);
        if (empty($annotation) || !($annotation instanceof Auth)) {
            return true;
        }

        $condition = $this->extractAuthCondition($annotation);
        if ([] === $condition) {
            return true;
        }
        $evaluated = \in_array($audience->role, $condition['roles'], true);

        return 'allow' === $condition['comparison'] ? $evaluated : !$evaluated;
    }

    private function extractAuthCondition(Auth $annotation): array
    {
        if (!empty($annotation->allow)) {
            if (!empty($annotation->deny)) {
                throw new \InvalidArgumentException('Allow and deny can not coexistence.');
            }

            return ['roles' => $this->extractAuthAnnotation($annotation, 'allow'), 'comparison' => 'allow'];
        }
        if (!empty($annotation->deny)) {
            return ['roles' => $this->extractAuthAnnotation($annotation, 'deny'), 'comparison' => 'deny'];
        }

        return [];
    }

    private function extractAuthAnnotation(Auth $annotation, $permission): array
    {
        $roles = explode(',', $annotation->{$permission});
        foreach ($roles as &$role) {
            $role = strtolower(trim($role));
            if (!\in_array($role, $this->config['definedRoles'], true)) {
                throw new \InvalidArgumentException(sprintf('%s is undefined as a role.', $role));
            }
        }

        return $roles;
    }
}
