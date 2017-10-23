<?php

/*
 * This file is part of Yrgo.
 *
 * (c) Yrgo, högre yrkesutbildning.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Yrgo\Tests\Weapons;

use PHPUnit\Framework\TestCase;
use Yrgo\Shark;
use Yrgo\Tornado;
use Yrgo\Weapons\Laser;

/**
 * This is the tornado test class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class TornadoTest extends TestCase
{
    public function test_get_sharks()
    {
        $laser = new Laser();

        $sharks = [
            new Shark($laser),
            new Shark($laser),
        ];

        $tornado = new Tornado($sharks);

        $this->assertInternalType('array', $tornado->getSharks());
        $this->assertCount(2, $tornado->getSharks());
    }
}
