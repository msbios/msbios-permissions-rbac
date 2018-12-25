<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Permissions\Rbac;

use Zend\Permissions\Rbac\Rbac;

/**
 * Class RbacManager
 * @package MSBios\Permissions\Rbac
 */
class RbacManager
{
    /** @var RoleProvider */
    protected $roleProvider;

    /** @var Rbac */
    protected $rbac;

    /** @var bool */
    protected $isInitialized = false;

    /**
     * @param bool $forceCreate
     */
    public function initialize($forceCreate = false)
    {
        if ($this->isInitialized /* && !$forceCreate */) {
            return;
        }

        /** @var Rbac $rbac */
        $rbac = new Rbac;
        $this->rbac = $rbac;

        $rbac->setCreateMissingRoles(true);

        $this->isInitialized = true;
    }
}