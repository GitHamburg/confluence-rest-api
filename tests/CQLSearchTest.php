<?php

use \Lesstif\Confluence\CQL\CQLService;
use PHPUnit\Framework\TestCase;

class CQLSearchTest extends TestCase
{
    public function testSearch()
    {
        //$this->markTestSkipped();

        $cql = [
            'SPACE' => 'LAR',
            'type' => 'page',
            ];

        try {
            $s = new CQLService();

            $ret = $s->search($cql);

            dump($ret);

        } catch (\Lesstif\Confluence\ConfluenceException $e) {
            $this->assertTrue(false, 'testSearch Failed : '.$e->getMessage());
        }
    }
}
