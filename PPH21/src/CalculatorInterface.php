<?php 

namespace ModernOOP\StudiKasus\PPH23Calculator;

interface CalculatorInterface
{
	public function maxPkp(): float;
	public function minPkp(): float;
	public function taxPercentage(): float;
	public function calculate(float $pkp): float;
}