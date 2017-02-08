<?php
/**
 * Created by PhpStorm.
 * User: hagag-md
 * Date: 23/01/17
 * Time: 10:46 ص
 */
namespace Hagag\MedicalConversion;

class BloodPressureConverter  extends MedicalConversion
{
    private $from;
    private $to;
    private $value;
    public function __construct()
    {
    }

    public function convert($from,$to,$value){
        if($from =='kPa' && $to=='mmHg'){
            $value = explode('/',$value);
            return $value[0]*7.500617.'/'.$value[1]*7.500617;
        }
        if($from =='mmHg' && $to=='kPa'){
            $value = explode('/',$value);
            return $value[0]*0.133322.'/'.$value[1]*0.133322;
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