<?php

namespace wp\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class wpUserBundle extends Bundle
{
  public function getParent()
    {
        return 'FOSUserBundle';
    }
}
