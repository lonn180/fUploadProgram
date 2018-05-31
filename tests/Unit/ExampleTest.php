<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\TestUnitController as TUC;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    
    public function testBasicTest()
    {
        $tmpObj = new TUC;
        $this->assertTrue(TRUE);
        $this->assertEquals(3, $tmpObj->add(1,2));
    }
}
