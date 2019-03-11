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

namespace Greeflas\Sorter;

use Greeflas\Sorter\Strategy\SortStrategyInterface;

/**
 * This is sorter of arrays of data.
 *
 * You can use different strategies of sorting by passing strategy object to class constructor or you can set
 * new sort strategy on fly using setter method. It's implemented like a service so this class does't save any state of
 * array of data, it just takes array of data, creates a copy and returns it.
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */
final class Sorter
{
    private SortStrategyInterface $sortStrategy;
    
    public function __construct(SortStrategyInterface $sortStrategy)
    {
        $this->sortStrategy = $sortStrategy;
    }

    public function setSortStrategy(SortStrategyInterface $sortStrategy): void
    {
        $this->sortStrategy = $sortStrategy;
    }

    /**
     * Sorts given array of data.
     *
     * @param array $data
     *
     * @return array Returns sorted array of data.
     */
    public function sort(array $data): array
    {
        return $this->sortStrategy->sort($data);
    }
}
