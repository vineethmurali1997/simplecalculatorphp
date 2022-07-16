<?php

class Calculator
{
    public function calculate($post=array())
    {
        
        $operator   = $post['operator'];
        $num1       = $post['num1'];
        $num2       = $post['num2'];
        $result=0;
        switch ($operator) {
            case "ADD":
              $result=$this->addition($num1,$num2);
              break;
            case "SUB":
                $result=$this->substraction($num1,$num2);
              break;
            case "MULT":
                $result=$this->multiplication($num1,$num2);
              break;
            case "DIV":
                $result=$this->division($num1,$num2);
            break;
            default:
              echo "Please select operator";
          }

          return $result;
    }
    public function addition($num1=0,$num2=0)
    {
        $result=$num1+$num2;
        return $result;
    }
    public function substraction($num1=0,$num2=0)
    {
        $result=$num1-$num2;
        return $result;
    }
    public function multiplication($num1=0,$num2=0)
    {
        $result=$num1*$num2;
        return $result;
    }
    public function division($num1=0,$num2=0)
    {
        $result=$num1/$num2;
        return $result;
    }
}