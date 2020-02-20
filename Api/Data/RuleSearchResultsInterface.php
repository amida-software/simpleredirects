<?php
/**
 * RuleSearchResultsInterface.php
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License, which
 * is bundled with this package in the file LICENSE.txt.
 *
 * It is also available on the Internet at the following URL:
 * https://docs.auroraextensions.com/magento/extensions/2.x/simpleredirects/LICENSE.txt
 *
 * @package       AuroraExtensions_SimpleRedirects
 * @copyright     Copyright (C) 2020 Aurora Extensions <support@auroraextensions.com>
 * @license       MIT License
 */
declare(strict_types=1);

namespace AuroraExtensions\SimpleRedirects\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface RuleSearchResultsInterface extends SearchResultsInterface
{
    /**
     * @return \AuroraExtensions\SimpleRedirects\Api\Data\RuleInterface[]
     */
    public function getItems();

    /**
     * @param \AuroraExtensions\SimpleRedirects\Api\Data\RuleInterface[] $items
     * @return \AuroraExtensions\SimpleRedirects\Api\Data\RuleSearchResultsInterface
     */
    public function setItems(array $items);
}
