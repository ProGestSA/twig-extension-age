<?php

namespace ProGest\Twig;

class AgeExtension extends \Twig\Extension\AbstractExtension
{
	public function age($time)
	{
		if (!($time instanceof \DateTime))
		{
			$timestamp = strtotime($time);
			$time = new \DateTime();
			$time->setTimestamp($timestamp);
		}

		$now = new \DateTime();
		$now->setTime(0, 0, 0);
		$now->setDate(date('Y'), date('m'), date('d'));

		$age = $time->diff($now)->format('%Y');

		return (int)$age;
	}

	public function getFilters()
	{
		return array(
			new \Twig_SimpleFilter('age', [$this, 'age']),
		);
	}

	public function getName()
	{
		return 'age_extension';
	}
}