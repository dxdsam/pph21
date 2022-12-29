<?php 

namespace ModernOOP\StudiKasus\PPH23Calculator;
class FourthRuleCalculator extends AbstractCalculator
{

	public function maxPkp(): float 
	{
		return 100000000000;
	}

	public function minPkp(): float 
	{
		return 500000000;
	}

	public function taxPercentage(): float 
	{
		return 0.3;
	}

}