<?php

include_once('../classes/actor.php');

class ActorView extends Actor
{

	public function getActor()
	{
		return $this->getActorDB();
	}
	public function getActorById($id_actor)
	{
		return $this->getActorByIdDB($id_actor);
	}
}
