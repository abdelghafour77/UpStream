<?php

include_once('../classes/quality.php');

class QualityView extends Quality
{

	public function getQuality()
	{
		return $this->getQualityDB();
	}
}
