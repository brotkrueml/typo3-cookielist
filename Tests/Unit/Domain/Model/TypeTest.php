<?php

declare(strict_types=1);

/*
 * This file is part of the "cookielist" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\CookieList\Tests\Unit\Domain\Model;

use Brotkrueml\Cookielist\Domain\Model\Type;
use PHPUnit\Framework\TestCase;

class TypeTest extends TestCase
{
    private Type $subject;

    protected function setUp(): void
    {
        $this->subject = new Type();
    }

    /**
     * @test
     */
    public function getAndSetName(): void
    {
        self::assertSame('', $this->subject->getName());

        $this->subject->setName('some name');

        self::assertSame('some name', $this->subject->getName());
    }

    /**
     * @test
     */
    public function getAndSetDescription(): void
    {
        self::assertSame('', $this->subject->getDescription());

        $this->subject->setDescription('some description');

        self::assertSame('some description', $this->subject->getDescription());
    }
}
