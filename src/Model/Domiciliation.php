<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Model;

class Domiciliation
{
    /**
     * @var string|null
     */
    private $nom;

    /**
     * @var string|null
     */
    private $siren;

    /**
     * Get nom.
     *
     * @return string|null Returns nom.
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Get SIREN.
     *
     * @return string|null Returns SIREN.
     */
    public function getSiren(): ?string
    {
        return $this->siren;
    }

    /**
     * Set nom.
     *
     * @param string|null $nom
     * @return Domiciliation Returns this domiciliation.
     */
    public function setNom(?string $nom): Domiciliation
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Set SIREN.
     *
     * @param string|null $siren
     * @return Domiciliation Returns this domiciliation.
     */
    public function setSiren(?string $siren): Domiciliation
    {
        $this->siren = $siren;

        return $this;
    }
}
