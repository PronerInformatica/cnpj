<?php

namespace PronerTest;

use Proner\Cnpj;

class CnpjTest extends \PHPUnit_Framework_TestCase
{
    public function test_validate()
    {
        $this->assertEquals(true,Cnpj::validate('63.126.655/0001-20'));
        $this->assertEquals(true,Cnpj::validate('50.471.356/0001-81'));
        $this->assertEquals(true,Cnpj::validate('18.645.339/0001-00'));

        $this->assertEquals(true,Cnpj::validate('63.126.655/0001/20'));
        $this->assertEquals(true,Cnpj::validate('63.126.655/0001:20'));
        $this->assertEquals(true,Cnpj::validate('63.126.655/0001.20'));

        $this->assertEquals(false,Cnpj::validate('69.126.655/0001-20'));
        $this->assertEquals(false,Cnpj::validate('51.471.356/0001-81'));
        $this->assertEquals(false,Cnpj::validate('12.645.339/0001-00'));

        $this->assertEquals(false,Cnpj::validate('69.126.655/0001/20'));
        $this->assertEquals(false,Cnpj::validate('69.126.655/0001:20'));
        $this->assertEquals(false,Cnpj::validate('69.126.655/0001.20'));
    }
}