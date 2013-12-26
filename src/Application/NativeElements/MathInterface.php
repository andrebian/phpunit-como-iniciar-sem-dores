<?php 
namespace Application\NativeElements;

interface MathInterface 
{
    public function setOperator( $operator );
    
    public function getResult( $firstValue, $secondValue );
}
