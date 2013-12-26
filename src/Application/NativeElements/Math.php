<?php 
namespace Application\NativeElements;
use Application\NativeElements\MathInterface;

class Math implements MathInterface 
{
    protected $operator;

    public function setOperator( $operator )
    {
	$this->operator = $operator;
    }
    
    public function getResult( $firstValue, $secondValue )
    {
	return $this->_executeOperator( $firstValue, $secondValue );
    }
    
    protected function _executeOperator( $firstValue, $secondValue )
    {
	switch ($this->operator) {
	  case 'plus': 
	    return $firstValue + $secondValue;
	    break;
	  case 'minus':
	    return $firstValue - $secondValue;
	    break;
	  case 'times':
	    return $firstValue * $secondValue;
	    break;
	  default: 
	    return $firstValue / $secondValue;
	}
    }
}
