<?php
declare(strict_types=1);
/**
 * Ricardo Ruiz
 * @license MIT
 * @author Ricardo Ruiz <ricardo.ruiz>
 */
namespace PanamediaSLU;

/**
 * Class to bootstrap the application
 */
class Bootstrap
{
    /**
     * Bootstrap application
     */
    static function go()
    {
        // Make everything relative to the root
        chdir(dirname(__DIR__));
        // Setup autoloading
        require_once( __DIR__ . '/../vendor/autoload.php' );
    }
    /**
     * Get Config Default for test
     * @return array
     */
    static public function getConfig()
    {
        if(file_exists(__DIR__.'/config/local.php')){
            return include __DIR__.'/config/local.php';
        }
        return include __DIR__.'/config/global.php';
    }
}
Bootstrap::go();
