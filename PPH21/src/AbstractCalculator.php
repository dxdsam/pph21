<?php 

namespace ModernOOP\StudiKasus\PPH23Calculator;

abstract class AbstractCalculator implements CalculatorInterface
{
	private $chain;
	public function __construct(?CalculatorInterface $chain = null)
	{
		$this->chain = $chain;
	}

	public function calculate(float $pkp): float 
	{
		$previousValue = 0;
		if ($previous = $this->chain) {
			$previousValue = $previous->calculate($previous->maxPkp());
			$pkp -= $previousValue;
		}
			return ($pkp * $this->taxPercentage()) + $previousValue;
	}
}