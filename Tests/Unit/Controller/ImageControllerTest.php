<?php
namespace Galerie\Galerie\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class Galerie\Galerie\Controller\ImageController.
 *
 */
class ImageControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

	/**
	 * @var \Galerie\Galerie\Controller\ImageController
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = $this->getMock('Galerie\\Galerie\\Controller\\ImageController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllImagesFromRepositoryAndAssignsThemToView()
	{

		$allImages = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$imageRepository = $this->getMock('Galerie\\Galerie\\Domain\\Repository\\ImageRepository', array('findAll'), array(), '', FALSE);
		$imageRepository->expects($this->once())->method('findAll')->will($this->returnValue($allImages));
		$this->inject($this->subject, 'imageRepository', $imageRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('images', $allImages);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenImageToView()
	{
		$image = new \Galerie\Galerie\Domain\Model\Image();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('image', $image);

		$this->subject->showAction($image);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenImageToImageRepository()
	{
		$image = new \Galerie\Galerie\Domain\Model\Image();

		$imageRepository = $this->getMock('Galerie\\Galerie\\Domain\\Repository\\ImageRepository', array('add'), array(), '', FALSE);
		$imageRepository->expects($this->once())->method('add')->with($image);
		$this->inject($this->subject, 'imageRepository', $imageRepository);

		$this->subject->createAction($image);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenImageToView()
	{
		$image = new \Galerie\Galerie\Domain\Model\Image();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('image', $image);

		$this->subject->editAction($image);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenImageInImageRepository()
	{
		$image = new \Galerie\Galerie\Domain\Model\Image();

		$imageRepository = $this->getMock('Galerie\\Galerie\\Domain\\Repository\\ImageRepository', array('update'), array(), '', FALSE);
		$imageRepository->expects($this->once())->method('update')->with($image);
		$this->inject($this->subject, 'imageRepository', $imageRepository);

		$this->subject->updateAction($image);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenImageFromImageRepository()
	{
		$image = new \Galerie\Galerie\Domain\Model\Image();

		$imageRepository = $this->getMock('Galerie\\Galerie\\Domain\\Repository\\ImageRepository', array('remove'), array(), '', FALSE);
		$imageRepository->expects($this->once())->method('remove')->with($image);
		$this->inject($this->subject, 'imageRepository', $imageRepository);

		$this->subject->deleteAction($image);
	}
}
