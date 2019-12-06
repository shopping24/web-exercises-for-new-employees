<?php

namespace Tests\Unit;

use Tests\TestCase;


class CollectionMacrosTest extends TestCase
{
    public function testCountBy()
    {
        $users = collect([
            [
                'name' => 'Alice',
                'role' => 'admin'
            ],
            [
                'name' => 'Bob',
                'role' => 'customer'
            ],
            [
                'name' => 'Charlie',
                'role' => 'admin'
            ],
            [
                'name' => 'Bob',
                'role' => 'customer'
            ],
            [
                'name' => 'Alice',
                'role' => 'admin'
            ],
            [
                'name' => 'Alice',
                'role' => 'customer'
            ],
            [
                'name' => 'Charlie',
                'role' => 'customer'
            ],
            [
                'name' => 'Bob',
                'role' => 'admin'
            ],
            [
                'name' => 'Alice',
                'role' => 'customer'
            ]
        ]);

        $this->assertEquals(
            ['admin' => 4, 'customer' => 5],
            $users->countBy('role')->toArray()
        );

        $this->assertEquals(
            ['Alice' => 4, 'Bob' => 3, 'Charlie' => 2],
            $users->countBy('name')->toArray()
        );
    }
}
