<?php

namespace Tests\Feature;

use Tests\TestCase;

class AppTest extends TestCase
{
    public function testIndex(): void
    {
        // APP_BUILD=42 задан в phpunit.xml; проверяем всю цепочку env -> config -> view
        $this->get('/')
            ->assertOk()
            ->assertSee('Build 42');
    }

    public function testViewUsesConfig(): void
    {
        // вывод должен зависеть от config('app.build'), а не быть захардкоженным
        config(['app.build' => 'ZX9']);
        $this->get('/')->assertSee('Build ZX9');
    }
}
