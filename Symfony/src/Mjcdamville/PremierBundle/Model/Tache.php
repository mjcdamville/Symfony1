<?php

namespace Mjcdamville\PremierBundle\Model;

use Mjcdamville\PremierBundle\Model\om\BaseTache;

class Tache extends BaseTache
{
    public function getRealisation()
    {
        if ($this->getRealisee()) {
            return 'oui';
        } else {
            return 'non';
        }
    }
}
