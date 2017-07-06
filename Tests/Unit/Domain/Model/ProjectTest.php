<?php
namespace Joekolade\Burkaprojects\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Joe Schäfer <joe@joekola.de>
 */
class ProjectTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Joekolade\Burkaprojects\Domain\Model\Project
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Joekolade\Burkaprojects\Domain\Model\Project();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );

    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );

    }
}
