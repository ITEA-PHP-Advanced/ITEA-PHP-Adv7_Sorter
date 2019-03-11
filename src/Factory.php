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

use Greeflas\Sorter\Strategy\Factory as StrategyFactory;
use Greeflas\Sorter\Strategy\SortStrategyInterface;

/**
 * Factory of strategy service. By default this factory creates sorter with dummy sort strategy.
 * You can pass needed strategy object as argument and it will be set to created sorter object.
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */
final class Factory
{
    private StrategyFactory $strategyFactory;

    public function __construct(StrategyFactory $strategyFactory)
    {
        $this->strategyFactory = $strategyFactory;
    }

    public function create(SortStrategyInterface $sortStrategy = null): Sorter
    {
        if (null === $sortStrategy) {
            return new Sorter($this->strategyFactory->createDummy());
        }

        return new Sorter($sortStrategy);
    }
}
