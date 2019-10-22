<?php
namespace Jku\JkuFolderselector\Controller;

/***
 *
 * This file is part of the "BackendFormSelectAFolder" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019
 *
 ***/

/**
 * MyModelController
 */
class MyModelController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * myModelRepository
     * 
     * @var \Jku\JkuFolderselector\Domain\Repository\MyModelRepository
     * @inject
     */
    protected $myModelRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $myModels = $this->myModelRepository->findAll();
        $this->view->assign('myModels', $myModels);
    }

    /**
     * action show
     * 
     * @param \Jku\JkuFolderselector\Domain\Model\MyModel $myModel
     * @return void
     */
    public function showAction(\Jku\JkuFolderselector\Domain\Model\MyModel $myModel)
    {
        $this->view->assign('myModel', $myModel);
    }
}
