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

class Type extends AbstractEntity
{
    protected string $name = '';
    protected string $description = '';

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}
