<?php 

namespace ModernOOP\StudiKasus\PPH23Calculator;

final class CalculatorWrapper 
{
	private $calculators;

	public function __construct(CalculatorInterface ...$calculators)
	{
		$this->calculators  = $calculators;
	}

	public function calculate(float $pkp)
	{
		foreach ($this->calculators as $calculator) {
			if ($pkp > $calculator->minPkp() && $pkp <= $calculator->maxPkp()) {
				return $calculator->calculate($pkp);
			}
		}
	}
}