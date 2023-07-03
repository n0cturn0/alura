<?php 

namespace Alura\Leilao\Service;
use PHPUnit\Framework\TestCase;
class EncerradorTest extends TestCase
{
    public function testLeioloesComMaisDeUmaSemanaDeveSerEncerrados() 
    {
        $encerrador = new Encerrador();
        $encerrador->encerra();

    }
}