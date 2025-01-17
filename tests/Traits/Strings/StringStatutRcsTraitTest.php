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
use WBW\Library\Pappers\Tests\Fixtures\Traits\Strings\TestStringStatutRcsTrait;

/**
 * String statut R.C.S. trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Traits\Strings
 */
class StringStatutRcsTraitTest extends AbstractTestCase {

    /**
     * Test the setStatutRcs() method().
     *
     * @return void
     */
    public function testSetStatutRcs(): void {

        $obj = new TestStringStatutRcsTrait();

        $obj->setStatutRcs("statutRcs");
        $this->assertEquals("statutRcs", $obj->getStatutRcs());
    }
}
