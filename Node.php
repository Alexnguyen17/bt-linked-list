<?php
/**
 * Created by PhpStorm.
 * User: alexnguyen
 * Date: 30/11/2018
 * Time: 11:49
 */
class Node
{
    public $data;
    public $next;
    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
    public function getData()
    {
        return $this->data;
    }
}