<?php
namespace Joekolade\Burkaprojects\Controller;

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
 * BreadcrumbController
 */
class BreadcrumbController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * projectRepository
     *
     * @var \Joekolade\Burkaprojects\Domain\Repository\ProjectRepository
     * @inject
     */
    protected $projectRepository = null;

    /**
     * categoryRepository
     *
     * @var \Joekolade\Burkaprojects\Domain\Repository\CategoryRepository
     * @inject
     */
    protected $categoryRepository = null;


    /**
     * action breadcrumb
     *
     * @return void
     */
    public function breadcrumbAction()
    {
        $category = $this->categoryRepository->findOneByListpid($GLOBALS['TSFE']->id);
        $this->view->assign('cat', $category);

        $p = intval(\TYPO3\CMS\Core\Utility\GeneralUtility::_GP('tx_burkaprojects_projectlist')['project']);

        if (!empty($p) && is_int($p)) {
            $this->view->assign('project', $this->projectRepository->findByUid($p));
        }

    }
}
