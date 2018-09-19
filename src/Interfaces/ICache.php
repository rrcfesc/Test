<?php
/**
 * Ricardo Ruiz
 * @license MIT
 * @author Ricardo Ruiz <ricardo.ruiz>
 */
namespace PanamediaSLU\Interfaces;


interface ICache
{
    public function put($json);
    public function get($key);
}