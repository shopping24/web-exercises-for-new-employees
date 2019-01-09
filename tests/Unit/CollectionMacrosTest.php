<?php

namespace Tests\Unit;

use Tests\TestCase;


class CollectionMacrosTest extends TestCase
{
    public function testCountBy()
    {
        $actual = collect([
            ['role' => 'admin'],
            ['role' => 'customer'],
            ['role' => 'admin'],
            ['role' => 'customer'],
            ['role' => 'admin'],
            ['role' => 'customer'],
            ['role' => 'customer'],
            ['role' => 'admin'],
            ['role' => 'customer']
        ])->countBy('role')->toArray();

        $expected = ['admin' => 4, 'customer' => 5];

        $this->assertEquals($expected, $actual);
    }
}
