<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests\Traits\Strings;

use WBW\Library\Pappers\Tests\AbstractTestCase;
use WBW\Library\Pappers\Tests\Fixtures\Traits\Strings\TestStringPaysNaissanceTrait;

/**
 * String pays naissance trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Traits\Strings
 */
class StringPaysNaissanceTraitTest extends AbstractTestCase {

    /**
     * Test the setPaysNaissance() method().
     *
     * @return void
     */
    public function testSetPaysNaissance(): void {

        $obj = new TestStringPaysNaissanceTrait();

        $obj->setPaysNaissance("paysNaissance");
        $this->assertEquals("paysNaissance", $obj->getPaysNaissance());
    }
}
