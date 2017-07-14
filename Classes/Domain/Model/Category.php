<?php
namespace Joekolade\Burkaprojects\Domain\Model;

/***
 *
 * This file is part of the "Burka Projects" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Joe Schäfer <joe@joekola.de>, Schäfer - Büro für Webentwicklung
 *
 ***/

/**
 * Category
 */
class Category extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * title
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * listpid
     *
     * @var int
     */
    protected $listpid = 0;

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
     * Returns the listpid
     *
     * @return int $listpid
     */
    public function getListpid()
    {
        return $this->listpid;
    }

    /**
     * Sets the listpid
     *
     * @param int $listpid
     * @return void
     */
    public function setListpid($listpid)
    {
        $this->listpid = $listpid;
    }
}
