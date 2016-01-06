<?php

 class CIPageTest extends SapphireTest
{
    public function setup()
    {
        $this->Page = new CIPage();
        parent::setup();
    }

    public function testZero()
    {
        $this->assertEquals(
            0,
            $this->Page->doubleNumber(0)
        );
    }

    public function testNegative()
    {
        $this->assertEquals(
            -4,
            $this->Page->doubleNumber(-2)
        );
    }

    public function testPositive()
    {
        $this->assertEquals(
            4,
            $this->Page->doubleNumber(2)
        );
    }
}
