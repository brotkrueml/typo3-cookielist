<?php

declare(strict_types=1);

/*
 * This file is part of the "cookielist" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\CookieList\Tests\Unit\Domain\Model;

use Brotkrueml\Cookielist\Domain\Model\Provider;
use PHPUnit\Framework\TestCase;

class ProviderTest extends TestCase
{
    private Provider $subject;

    protected function setUp(): void
    {
        $this->subject = new Provider();
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
    public function getAndSetLink(): void
    {
        self::assertSame('', $this->subject->getLink());

        $this->subject->setLink('https://example.org/');

        self::assertSame('https://example.org/', $this->subject->getLink());
    }
}
