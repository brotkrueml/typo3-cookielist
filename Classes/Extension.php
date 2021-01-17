<?php

declare(strict_types=1);

/*
 * This file is part of the "cookielist" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\Cookielist;

final class Extension
{
    public const KEY = 'cookielist';

    private const LANGUAGE_PATH = 'LLL:EXT:' . self::KEY . '/Resources/Private/Language/';
    public const LANGUAGE_PATH_DATABASE = self::LANGUAGE_PATH . 'Database.xlf';
}
