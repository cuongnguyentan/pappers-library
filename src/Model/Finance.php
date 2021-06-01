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

use WBW\Library\Pappers\Model\Attribute\StringDateClotureExerciceTrait;

/**
 * Finance.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model
 */
class Finance {

    use StringDateClotureExerciceTrait;
    /**
     * Année.
     *
     * @var int|null
     */
    private $annee;

    /**
     * Chiffre affaires.
     *
     * @var int|null
     */
    private $chiffreAffaires;


    /**
     * Durée exercice.
     *
     * @var int|null
     */
    private $dureeExercice;

    /**
     * Effectif.
     *
     * @var int|null
     */
    private $effectif;

    /**
     * Résultat.
     *
     * @var int|null
     */
    private $resultat;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the année.
     *
     * @return int|null Returns the année.
     */
    public function getAnnee(): ?int {
        return $this->annee;
    }

    /**
     * Get the chiffre affaires.
     *
     * @return int|null Returns the chiffre affaires.
     */
    public function getChiffreAffaires(): ?int {
        return $this->chiffreAffaires;
    }


    /**
     * Get the durée exercice.
     *
     * @return int|null Returns the durée exercice.
     */
    public function getDureeExercice(): ?int {
        return $this->dureeExercice;
    }

    /**
     * Get the effectif.
     *
     * @return int|null Returns the effectif.
     */
    public function getEffectif(): ?int {
        return $this->effectif;
    }

    /**
     * Get the résultat.
     *
     * @return int|null Returns the résultat.
     */
    public function getResultat(): ?int {
        return $this->resultat;
    }

    /**
     * Set the année.
     *
     * @param int|null $annee The année.
     * @return Finance Returns this finance.
     */
    public function setAnnee(?int $annee): Finance {
        $this->annee = $annee;
        return $this;
    }

    /**
     * Set the chiffre affaires.
     *
     * @param int|null $chiffreAffaires The chiffre affiares.
     * @return Finance Returns this finance.
     */
    public function setChiffreAffaires(?int $chiffreAffaires): Finance {
        $this->chiffreAffaires = $chiffreAffaires;
        return $this;
    }

    /**
     * Set the durée exercice.
     *
     * @param int|null $dureeExercice The durée exercice.
     * @return Finance Returns this finance.
     */
    public function setDureeExercice(?int $dureeExercice): Finance {
        $this->dureeExercice = $dureeExercice;
        return $this;
    }

    /**
     * Set the effectif.
     *
     * @param int|null $effectif The effectif.
     * @return Finance Returns this finance.
     */
    public function setEffectif(?int $effectif): Finance {
        $this->effectif = $effectif;
        return $this;
    }

    /**
     * Set the résultat.
     *
     * @param int|null $resultat The résultat.
     * @return Finance Returns this finance.
     */
    public function setResultat(?int $resultat): Finance {
        $this->resultat = $resultat;
        return $this;
    }
}