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
        $files = $this->getFolderContent($myModel->getFolder());
        $this->view->assign('files', $files);
        if(sizeof($files) > 0) {
            $allRows = [];
            foreach (array_keys($files) as $key){
                $allRows = array_merge($allRows, $this->getFields($files[$key]));
            }
            $this->view->assign('content', $allRows);
        }
        $this->view->assign('myModel', $myModel);
    }

    private function getFolderContent($identifier)
    {
        if($identifier){
            $resourceFactory = \TYPO3\CMS\Core\Resource\ResourceFactory::getInstance();
            $folder = $resourceFactory->getFolderObjectFromCombinedIdentifier($identifier);
            $storage = $resourceFactory->getStorageObjectFromCombinedIdentifier($identifier);
            $files = $storage->getFilesInFolder($folder);
            return $files;
        }else{
            return [];
        }
    }

    private function getFields(\TYPO3\CMS\Core\Resource\File $fileResource) {
        $columnSeparator = ';';
        $file = $fileResource->getForLocalProcessing(false);
        $rows = array();
        $handle = @fopen($file, 'r');
        if (!$handle){
            debug("File not found.");
            return $rows;
        }
        while (($fields = fgetcsv($handle, 100000, $columnSeparator)) !== false) {
            try {
                $rows[] = $fields;
            } catch (\TYPO3\CMS\Core\Exception $exception) {
                debug("Error reading file.");
                @fclose($handle);
                return NULL;
            }
        }
        @fclose($handle);
        return $rows;
    }

}
