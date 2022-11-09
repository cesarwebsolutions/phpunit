<?php

namespace Tests\Unit;

use App\Http\Controllers\Api\UserController;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    // comando rodar todos os testes vendor\bin\phpunit
    // comando rodar um metodo vendor\bin\phpunit --filter test_example
    // criar um arquivo de teste unitario php artisan make:test UserTest --unit
    /**
     *@test
     */
    public function test_example()
    {
        $testeSoma = new UserController;
        $resultado = $testeSoma->soma(10, 10);
        $this->assertEquals(30, $resultado);
        // $this->assertTrue(true);
    }

    public function test_tamanmho_array()
    {
        $testeSoma = new UserController;
        $resultado = $testeSoma->tamanhoDoArray([10, 10]);
        $this->assertEquals(3, $resultado);
        // $this->assertTrue(true);
    }
}
