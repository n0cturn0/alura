<?php 

namespace Alura\Leilao\Service;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Service\Encerrador;
use PHPUnit\Framework\TestCase;
class EncerradorTest extends TestCase
{
    public function testLeioloesComMaisDeUmaSemanaDeveSerEncerrados() 
    {
        $fia147 = new Leilao(
          'Fiat 147 0Km',
          new \DateTimeImmutable('8 days ago') 
        );
        $variant = new Leilao(
            'Variant 1972 0Km',
            new \DateTimeImmutable('10 days ago') 
          );
        $encerrador = new Encerrador();
        $encerrador->encerra();

    }
}