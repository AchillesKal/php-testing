<?php

namespace App\Test;

use App\Framework;
use PHPUnit\Framework\TestCase;

class FrameworkTest extends TestCase
{
    public function testRun(){
        $expectedResponse = "works";

        $framework = new Framework();
        $response = $framework->run();
        $this->assertEquals($expectedResponse, $response);
    }
}