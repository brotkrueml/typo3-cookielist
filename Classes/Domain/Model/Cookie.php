<?php

declare(strict_types=1);

/*
 * This file is part of the "cookielist" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\Cookielist\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Cookie extends AbstractEntity
{
    protected ?Type $type = null;
    protected string $name = '';
    protected string $purpose = '';
    protected ?Provider $provider = null;
    protected int $ttl = 0;
    protected string $ttlUnit = '';

    public function getType(): ?Type
    {
        return $this->type;
    }

    public function setType(Type $type)
    {
        $this->type = $type;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPurpose(): string
    {
        return $this->purpose;
    }

    public function setPurpose(string $purpose): void
    {
        $this->purpose = $purpose;
    }

    public function getProvider(): ?Provider
    {
        return $this->provider;
    }

    public function setProvider(Provider $provider)
    {
        $this->provider = $provider;
    }

    public function getTtl(): int
    {
        return $this->ttl;
    }

    public function setTtl(int $ttl): void
    {
        $this->ttl = $ttl;
    }

    public function getTtlUnit(): string
    {
        return $this->ttlUnit;
    }

    public function setTtlUnit(string $ttlUnit): void
    {
        $this->ttlUnit = $ttlUnit;
    }
}
