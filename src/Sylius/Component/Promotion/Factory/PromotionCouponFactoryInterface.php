<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Sylius Sp. z o.o.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Component\Promotion\Factory;

use Sylius\Component\Promotion\Model\PromotionCouponInterface;
use Sylius\Component\Promotion\Model\PromotionInterface;
use Sylius\Component\Resource\Factory\FactoryInterface;

interface PromotionCouponFactoryInterface extends FactoryInterface
{
    /**
     * @throws \InvalidArgumentException
     */
    public function createForPromotion(PromotionInterface $promotion): PromotionCouponInterface;
}
