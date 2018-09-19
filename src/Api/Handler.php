<?php
/**
 * Ricardo Ruiz
 * @license MIT
 * @author Ricardo Ruiz <ricardo.ruiz>
 */
namespace PanamediaSLU\Handler;

use GuzzleHttp\Client;
use PanamediaSLU\Interfaces\IResultApi;

class Handler implements IResultApi
{
    /**
     * @var
     */
    private $current;
    /**
     * @var
     */
    private $stack = array();
    /**
     * Handler constructor.
     * @param array $array
     */
    public function __construct($array = array())
    {
        foreach ($array as $item) {
            $this->stack = new Client([
                'base_uri'=> (array_keys('url') ? $item['url'] : "http://localhost"),
                'timeout'=> (array_keys('timeout') ? $item['timeout'] : "2.0"),
            ]);
        }
    }
    /**
     * Get Current Api
     * @return bool
     * @throws \Exception
     */
    private function getCurrent()
    {
        $response  = false;
        if (count($this->stack) > 0) {
            $reponse  = current($this->stack);
        } else {
            throw new \Exception("No stack apis selected");
        }
        return $response;
    }
    /**
     *
     */
    public function fetch()
    {

    }
}