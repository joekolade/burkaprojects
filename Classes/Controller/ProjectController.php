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
 * ProjectController
 */
class ProjectController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * projectRepository
     *
     * @var \Joekolade\Burkaprojects\Domain\Repository\ProjectRepository
     * @inject
     */
    protected $projectRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        // TODO: Categorization
        // https://docs.typo3.org/typo3cms/CoreApiReference/ApiOverview/Categories/Index.html
        $projects = $this->projectRepository->findAll();
        $this->view->assign('projects', $projects);
    }

    /**
     * action show
     *
     * @param \Joekolade\Burkaprojects\Domain\Model\Project $project
     * @return void
     */
    public function showAction(\Joekolade\Burkaprojects\Domain\Model\Project $project)
    {
        $this->view->assign('project', $project);
    }
}
