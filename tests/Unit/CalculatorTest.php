<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\CalculatorController;

class CalculatorTest extends TestCase
{

    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new CalculatorController;
    }

    public function testSum()
    {
        $result = $this->calculator->sum(2, 3);
        $this->assertEquals(5, $result);
    }

    public function testSub()
    {
        $result = $this->calculator->sub(5, 3);
        $this->assertEquals(2, $result);
    }

    public function testMult()
    {
        $result = $this->calculator->mult(2, 3);
        $this->assertEquals(6, $result);
    }

    public function testDiv()
    {
        $result = $this->calculator->div(6, 3);
        $this->assertEquals(2, $result);
    }
}
