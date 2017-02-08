<?php
/**
 * Created by PhpStorm.
 * User: hagag-md
 * Date: 23/01/17
 * Time: 10:46 ص
 */
namespace Hagag\MedicalConversion;

class WeightConverter  extends MedicalConversion
{
    private $from;
    private $to;
    private $value;
    public function __construct()
    {
    }

    public function convert($from,$to,$value){
        if($from =='Kg' && $to=='lb'){
            return $value*2.20462;

        }
        if($from =='lb' && $to=='Kg'){
            return $value*0.453592;

        }
        return $value;
    }

    /**
     * @param mixed $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @param mixed $to
     */
    public function setTo($to)
    {
        $this->to = $to;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }


}