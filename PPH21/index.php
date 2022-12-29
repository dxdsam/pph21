<?php 
require __DIR__.'/vendor/autoload.php';	

use ModernOOP\StudiKasus\PPH23Calculator\FirstRuleCalculator; 
use ModernOOP\StudiKasus\PPH23Calculator\SecondRuleCalculator;
use ModernOOP\StudiKasus\PPH23Calculator\ThirdRuleCalculator;
use ModernOOP\StudiKasus\PPH23Calculator\FourthRuleCalculator;
use ModernOOP\StudiKasus\PPH23Calculator\CalculatorWrapper;

$first = new FirstRuleCalculator();
$second = new SecondRuleCalculator($first);
$third = new ThirdRuleCalculator($second);
$fourth = new FourthRuleCalculator($third);
$calculator = new CalculatorWrapper($first, $second, $third, $fourth);

//1.250.000
echo $calculator->calculate(25000000);
echo PHP_EOL;
//1.500.000
echo $calculator->calculate(30000000);
echo PHP_EOL;
//2.250.000
echo $calculator->calculate(45000000);
echo PHP_EOL;
//2.500.000
echo $calculator->calculate(50000000);
echo PHP_EOL;
//4.000.000
echo $calculator->calculate(60000000);
echo PHP_EOL;
//6.250.000
echo $calculator->calculate(75000000);
echo PHP_EOL;