<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Permissions\Rbac;

use MSBios\Resolver\AbstractResolverManager;
use MSBios\Resolver\ResolverInterface;

/**
 * Class RoleManager
 * @package MSBios\Permissions\Rbac
 */
class RoleManager extends AbstractResolverManager
{
    /** @var ResolverInterface */
    protected $lastStrategyFound;

    /**
     * <code>
     *     foreach ($this->queue as $resolver) {
     *         if ($resource = $resolver->resolve($arguments)) {
     *             return $resource;
     *         }
     *     }
     * </code>
     *
     * @param array ...$arguments
     * @return mixed
     */
    public function resolve(...$arguments)
    {
        if (count($this->queue)) {

            /** @var ResolverInterface $detector */
            foreach ($this->queue as $detector) {

                /** @var string $identifier */
                $identifier = $detector->resolve($arguments);

                return $identifier;
            }
        }

        return false;
    }
}