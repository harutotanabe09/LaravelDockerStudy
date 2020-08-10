<?php

namespace Tests\Http\Controllers;

use App\Http\Controllers\HelloController;
use PHPUnit\Framework\TestCase;

/**
 * Class HelloControllerTest
 * @package Tests\Http\Controllers
 */
class HelloControllerTest extends TestCase
{

    /**
     * @test
     * A basic test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $this->assertTrue(true);
    }
}
