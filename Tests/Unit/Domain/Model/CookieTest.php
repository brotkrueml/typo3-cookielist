<?php

declare(strict_types=1);

/*
 * This file is part of the "cookielist" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\CookieList\Tests\Unit\Domain\Model;

use Brotkrueml\Cookielist\Domain\Model\Cookie;
use Brotkrueml\Cookielist\Domain\Model\Provider;
use Brotkrueml\Cookielist\Domain\Model\Type;
use PHPUnit\Framework\TestCase;

class CookieTest extends TestCase
{
    private Cookie $subject;

    protected function setUp(): void
    {
        $this->subject = new Cookie();
    }

    /**
     * @test
     */
    public function getAndSetType(): void
    {
        self::assertNull($this->subject->getType());

        $type = new Type();
        $this->subject->setType($type);

        self::assertSame($type, $this->subject->getType());
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
    public function getAndSetPurpose(): void
    {
        self::assertSame('', $this->subject->getPurpose());

        $this->subject->setPurpose('some purpose');

        self::assertSame('some purpose', $this->subject->getPurpose());
    }

    /**
     * @test
     */
    public function getAndSetProvider(): void
    {
        self::assertNull($this->subject->getProvider());

        $provider = new Provider();
        $this->subject->setProvider($provider);

        self::assertSame($provider, $this->subject->getProvider());
    }

    /**
     * @test
     */
    public function getAndSetTtl(): void
    {
        self::assertSame(0, $this->subject->getTtl());

        $this->subject->setTtl(42);

        self::assertSame(42, $this->subject->getTtl());
    }

    /**
     * @test
     */
    public function getAndSetTtlUnit(): void
    {
        self::assertSame('', $this->subject->getTtlUnit());

        $this->subject->setTtlUnit('h');

        self::assertSame('h', $this->subject->getTtlUnit());
    }
}
