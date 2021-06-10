<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Request;

/**
 * Recherche dirigeants request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Request
 */
class RechercheDirigeantsRequest extends AbstractRequest {

    /**
     * Resources path.
     *
     * @var string
     */
    const RESOURCES_PATH = "/recherche-dirigeants";

    /**
     * {@inheritDoc}
     */
    public function getResourcesPath(): string {
        return self::RESOURCES_PATH;
    }
}