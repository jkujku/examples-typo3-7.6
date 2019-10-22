<?php
namespace Jku\JkuFolderselector\Domain\Model;

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
 * MyModel
 */
class MyModel extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * title
     * 
     * @var string
     */
    protected $title = '';

    /**
     * folder
     * 
     * @var string
     */
    protected $folder = '';

    /**
     * Returns the title
     * 
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     * 
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the folder
     * 
     * @return string $folder
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * Sets the folder
     * 
     * @param string $folder
     * @return void
     */
    public function setFolder($folder)
    {
        $this->folder = $folder;
    }
}
