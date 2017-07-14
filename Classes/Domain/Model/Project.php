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
 * Project
 */
class Project extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * title
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * teaser
     *
     * @var string
     */
    protected $teaser = '';

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * images
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @cascade remove
     */
    protected $images = null;

    /**
     * category
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Joekolade\Burkaprojects\Domain\Model\Category>
     */
    protected $category = null;

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
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->images = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->category = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the teaser
     *
     * @return string $teaser
     */
    public function getTeaser()
    {
        return $this->teaser;
    }

    /**
     * Sets the teaser
     *
     * @param string $teaser
     * @return void
     */
    public function setTeaser($teaser)
    {
        $this->teaser = $teaser;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Adds a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function addImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->images->attach($image);
    }

    /**
     * Removes a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $imageToRemove The FileReference to be removed
     * @return void
     */
    public function removeImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $imageToRemove)
    {
        $this->images->detach($imageToRemove);
    }

    /**
     * Returns the images
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $images
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Sets the images
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $images
     * @return void
     */
    public function setImages(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $images)
    {
        $this->images = $images;
    }

    /**
     * Adds a Category
     *
     * @param \Joekolade\Burkaprojects\Domain\Model\Category $category
     * @return void
     */
    public function addCategory(\Joekolade\Burkaprojects\Domain\Model\Category $category)
    {
        $this->category->attach($category);
    }

    /**
     * Removes a Category
     *
     * @param \Joekolade\Burkaprojects\Domain\Model\Category $categoryToRemove The Category to be removed
     * @return void
     */
    public function removeCategory(\Joekolade\Burkaprojects\Domain\Model\Category $categoryToRemove)
    {
        $this->category->detach($categoryToRemove);
    }

    /**
     * Returns the category
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Joekolade\Burkaprojects\Domain\Model\Category> $category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets the category
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Joekolade\Burkaprojects\Domain\Model\Category> $category
     * @return void
     */
    public function setCategory(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $category)
    {
        $this->category = $category;
    }
}
