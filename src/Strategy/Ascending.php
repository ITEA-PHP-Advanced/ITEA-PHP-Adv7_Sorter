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

final class Ascending implements SortStrategyInterface
{
    /**
     * {@inheritDoc}
     */
    public function sort(array $data): array
    {
        \arsort($data);

        return $data;
    }
}
