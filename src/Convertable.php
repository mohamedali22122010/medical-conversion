<?php
namespace Hagag\MedicalConversion;

interface Convertable
{
    public function convert($from , $to , $value);
    public function setFrom($from);
    public function setTo($to);
    public function setValue($value);
}