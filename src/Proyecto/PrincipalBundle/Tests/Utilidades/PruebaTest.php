<?php 

namespace Proyecto\PrincipalBundle\Utilidades;

use Proyecto\PrincipalBundle\Utilidades\prueba;

class PruebaTest extends \PHPUnit_Framework_TestCase
{
    public function testAgregar()
    {
        $calc = new Calculadora();
        $result = $calc->agregar(30, 12);

        // ¡acierta que nuestra calculadora suma dos números correctamente!
        $this->assertEquals(42, $result);
    }
}