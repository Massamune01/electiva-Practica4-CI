<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Hola.php';

class HolaTest extends TestCase {

    public function testHola() {
        $this->assertEquals("Hola mundo", hola());
    }
}