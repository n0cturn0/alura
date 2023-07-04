<?php 

namespace Alura\Leilao\Service;
use Alura\Leilao\Dao\Leilao as LeilaoDao;
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

        $leilaoDao = new LeilaoDao();
        $leilaoDao->salva($fia147);
        $leilaoDao->salva($variant);

        $encerrador = new Encerrador();
        $encerrador->encerra();
        //Assertion
        //Este teste estaria testando a integridade do banco de dados
        $leiloes = $leilaoDao->recuperarFinalizados();
        self::assertCount(2, $leiloes);

        self::assertEquals('Fiat 147 0km',
        $leiloes[0]->recuperarDescricao()
        );

        self::assertEquals('Variant 1972 0Km',
        $leiloes[0]->recuperarDescricao()
        );

    }
    



}