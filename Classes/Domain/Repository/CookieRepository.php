<?php

declare(strict_types=1);

/*
 * This file is part of the "cookielist" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\Cookielist\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

class CookieRepository extends Repository
{
    protected $defaultOrderings = [
        'type.sorting' => QueryInterface::ORDER_ASCENDING,
        'name' => QueryInterface::ORDER_ASCENDING,
    ];
}
