<?php

include_once('../classes/actor.php');

class ActorView extends Actor
{

	public function getActor()
	{
		return $this->getActorDB();
	}
}
