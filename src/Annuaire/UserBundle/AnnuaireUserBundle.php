<?php

namespace Annuaire\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AnnuaireUserBundle extends Bundle
{
	public function getParent(){
		return 'FOSUserBundle';
	}
}
