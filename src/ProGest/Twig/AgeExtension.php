<?php

namespace ProGest\Twig;

class AgeExtension extends \Twig_Extension
{
	public function age($time)
	{
		if (!($time instanceof \DateTime))
		{
			$timestamp = strtotime($time);
			$time = new \DateTime();
			$time->setTimestamp($timestamp);
		}

		$age = $time->diff(new \DateTime())->format('%Y');

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