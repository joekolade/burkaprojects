<?php
namespace Joekolade\Burkaprojects\Domain\Repository;

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
 * The repository for Categories
 */
class CategoryRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * @var array
     */
    protected $defaultOrderings = array(
        'sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
    );
}
