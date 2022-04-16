<?php

include_once('../classes/language.php');

class LanguageView extends Language
{

	public function getLanguage()
	{
		return $this->getLanguageDB();
	}
}
