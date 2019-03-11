<?php
declare(strict_types=1);

/*
 * This file is part of the "sorter" package.
 *
 * (c) Volodymyr Kupriienko <vladimir.kuprienko@itea.ua>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Greeflas\Sorter\Strategy;

/**
 * Interface of sort strategy.
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */
interface SortStrategyInterface
{
    /**
     * Sorts given array of data.
     *
     * @param array $data
     *
     * @return array Returns sorted array of data.
     */
    public function sort(array $data): array;
}
