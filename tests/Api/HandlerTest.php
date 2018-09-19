<?php
/**
 * Ricardo Ruiz
 * @license MIT
 * @author Ricardo Ruiz <ricardo.ruiz>
 */
namespace PanamediaSLU\Api;

use PHPUnit\Framework\TestCase;
use PanamediaSLU\Bootstrap;
use PanamediaSLU\

/**
 * Class HandlerTest
 * @package PanamediaSLU\Api
 * @version 1.0
 */
final class HandlerTest extends TestCase
{
    /**
     * Get Config From file
     * @var array
     */
    private $config;
    /**
     * Setup
     */
    public function setUp()
    {
        $this->config = Bootstrap::getConfig();
    }
    /**
     * Get Total Roles
     */
    public function testGet()
    {

        $this->assertTrue(true);
    }
}