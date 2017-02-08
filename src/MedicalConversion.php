<?php
/**
 * Created by PhpStorm.
 * User: hagag-md
 * Date: 23/01/17
 * Time: 10:39 ص
 */

namespace Hagag\MedicalConversion;

class MedicalConversion implements Convertable
{

    private $convertible;

    public function __construct(Convertable $convertible)
    {
        $this->convertible = $convertible;
    }
    public function setFrom($from){
        $this->convertible->setFrom($from);
    }
    public function setTo($to){
        $this->convertible->setTo($to);
    }
    public function setValue($value){
        $this->convertible->setValue($value);
    }
    public function convert($from , $to , $value)
    {
         // TODO: Implement convert() method.
        return $this->convertible->convert($from , $to , $value);
    }


}

