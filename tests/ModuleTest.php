<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Permissions\Rbac;

use MSBios\ModuleInterface;
use MSBios\Permissions\Rbac\Module;
use PHPUnit\Framework\TestCase;

/**
 * Class ModuleTest
 * @package MSBiosTest\Permissions\Rbac
 */
class ModuleTest extends TestCase
{
    /**
     * @return Module|ModuleInterface
     */
    public function testInstance()
    {
        /** @var ModuleInterface $instance */
        $instance = new Module;
        $this->assertInstanceOf(ModuleInterface::class, $instance);
        return $instance;
    }

    /**
     * @depends testInstance
     * @param ModuleInterface $instance
     */
    public function testGetConfig(ModuleInterface $instance)
    {
        $this->assertInternalType('array', $instance->getConfig());
    }

    /**
     * @depends testInstance
     * @param ModuleInterface $instance
     */
    public function testGetAutoloaderConfig(ModuleInterface $instance)
    {
        $this->assertInternalType('array', $instance->getAutoloaderConfig());
    }
}
