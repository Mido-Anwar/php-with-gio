<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use App\Router\Router;

class RouterTest extends TestCase
{
    private Router $router;
    protected function setUp(): void
    {
        parent::setUp();
        $this->router = new Router();
    }

    #[Test]
    public function it_registers_a_route(): void
    {

        $this->router->register('get', '/users', ['Users', 'index']);

        $expcted =  [
            'get' => [
                '/users' => ['Users', 'index']
            ]
        ];

        $this->assertEquals(
            $expcted,
            $this->router->routes()
        );
    }

    #[Test]
    public function it_register_a_get_route(): void
    {

        $this->router->get('/users', ['Users', 'index']);
        $expcted =  [
            'get' => [
                '/users' => ['Users', 'index']
            ]
        ];
        $this->assertEquals(
            $expcted,
            $this->router->routes()
        );
    }
    #[Test]

    public function it_register_a_post_route(): void
    {
      
        $this->router->post('/users', ['Users', 'store']);
        $expcted =  [
            'post' => [
                '/users' => ['Users', 'store']
            ]
        ];
        $this->assertEquals(
            $expcted,
            $this->router->routes()
        );
    }
    #[Test]
    public function there_no_routes_when_nothing_registered(): void
    {
        $router = new Router();
        $this->assertEmpty($router->routes());
    }
}
