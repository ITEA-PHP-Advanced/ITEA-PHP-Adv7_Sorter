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
 * Factory of sorting strategies.
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */
class Factory
{
    private static array $pool = [];

    public function createAsc(): Ascending
    {
        return $this->getStrategy(Ascending::class);
    }

    public function createDesc(): Descendingly
    {
        return $this->getStrategy(Descendingly::class);
    }

    public function createDummy(): Dummy
    {
        return $this->getStrategy(Dummy::class);
    }

    /**
     * Gets strategy by name from cache.
     *
     * @param string $name
     *
     * @return Ascending|Descendingly|Dummy|SortStrategyInterface
     */
    protected function getStrategy(string $name): SortStrategyInterface
    {
        if (!isset(self::$pool[$name])) {
            self::$pool[$name] = new $name();
        }

        return self::$pool[$name];
    }
}
