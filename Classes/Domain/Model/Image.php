<?php
namespace Netnnet\Galerie\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 Nicole Holzer <n.holzer@netnnet.de>, netnnet
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Image
 */
class Image extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $image = null;
    
    /**
     * headline
     *
     * @var string
     */
    protected $headline = '';
    
    /**
     * subline
     *
     * @var string
     */
    protected $subline = '';
    
    /**
     * wide
     *
     * @var bool
     */
    protected $wide = false;
    
    /**
     * category
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Netnnet\Galerie\Domain\Model\Category>
     */
    protected $category = null;
    
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
        $this->category = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }
    
    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }
    
    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }
    
    /**
     * Returns the headline
     *
     * @return string $headline
     */
    public function getHeadline()
    {
        return $this->headline;
    }
    
    /**
     * Sets the headline
     *
     * @param string $headline
     * @return void
     */
    public function setHeadline($headline)
    {
        $this->headline = $headline;
    }
    
    /**
     * Returns the subline
     *
     * @return string $subline
     */
    public function getSubline()
    {
        return $this->subline;
    }
    
    /**
     * Sets the subline
     *
     * @param string $subline
     * @return void
     */
    public function setSubline($subline)
    {
        $this->subline = $subline;
    }
    
    /**
     * Returns the wide
     *
     * @return bool $wide
     */
    public function getWide()
    {
        return $this->wide;
    }
    
    /**
     * Sets the wide
     *
     * @param bool $wide
     * @return void
     */
    public function setWide($wide)
    {
        $this->wide = $wide;
    }
    
    /**
     * Returns the boolean state of wide
     *
     * @return bool
     */
    public function isWide()
    {
        return $this->wide;
    }
    
    /**
     * Adds a Category
     *
     * @param \Netnnet\Galerie\Domain\Model\Category $category
     * @return void
     */
    public function addCategory(\Netnnet\Galerie\Domain\Model\Category $category)
    {
        $this->category->attach($category);
    }
    
    /**
     * Removes a Category
     *
     * @param \Netnnet\Galerie\Domain\Model\Category $categoryToRemove The Category to be removed
     * @return void
     */
    public function removeCategory(\Netnnet\Galerie\Domain\Model\Category $categoryToRemove)
    {
        $this->category->detach($categoryToRemove);
    }
    
    /**
     * Returns the category
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Netnnet\Galerie\Domain\Model\Category> $category
     */
    public function getCategory()
    {
        return $this->category;
    }
    
    /**
     * Sets the category
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Netnnet\Galerie\Domain\Model\Category> $category
     * @return void
     */
    public function setCategory(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $category)
    {
        $this->category = $category;
    }

}