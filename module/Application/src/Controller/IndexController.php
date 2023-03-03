<?php

declare(strict_types=1);

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction(): ViewModel
    {
        $this->flashMessenger()->addErrorMessage(
            'Created successfully.'
        );
        return new ViewModel();
    }
}
