<?php

namespace Tests\Feature;

use Tests\TestCase;

class PagesTest extends TestCase
{
    public function testAbout(): void
    {
        $this->get('/about')
            ->assertOk()
            ->assertSeeText('Articles')
            ->assertSeeText('О блоге');
    }

    public function testArticles(): void
    {
        $this->get('/articles')
            ->assertOk()
            ->assertSeeText('About')
            ->assertSeeText('Статьи');
    }
}
