<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    public function testDependency()
    {
        $test1 = $this->app->make(Category::class); // new Foo()
        $test2 = $this->app->make(Category::class); // new Foo()

        self::assertEquals('categories', $test1);
        self::assertEquals('categories', $test2);
        self::assertNotSame($test1,$test2);
    }

}
