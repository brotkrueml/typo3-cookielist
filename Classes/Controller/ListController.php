<?php

declare(strict_types=1);

/*
 * This file is part of the "cookielist" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\Cookielist\Controller;

use Brotkrueml\Cookielist\Domain\Repository\CookieRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController;

final class ListController extends ActionController
{
    private CookieRepository $cookieRepository;
    private TypoScriptFrontendController $typoScriptFrontendController;

    public function __construct(CookieRepository $cookieRepository, TypoScriptFrontendController $typoScriptFrontendController)
    {
        $this->cookieRepository = $cookieRepository;
        $this->typoScriptFrontendController = $typoScriptFrontendController;
    }

    public function listAction()
    {
        $this->addPageCacheTags();

        $this->view->assign('cookies', $this->cookieRepository->findAll());
    }

    private function addPageCacheTags(): void
    {
        $this->typoScriptFrontendController->addCacheTags([
            'tx_cookielist_domain_model_cookie',
            'tx_cookielist_domain_model_provider',
            'tx_cookielist_domain_model_type',
        ]);
    }
}
