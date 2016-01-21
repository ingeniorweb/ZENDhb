<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Training\Entity;

/**
 * Description of Degree
 *
 * @author hb
 */
class Degree extends AbstractExperience {

    /**
     * @var string
     *
     * @ORM\Column(name="diploma", type="string", length=255)
     */
    protected $diploma;

    /**
     * @var boolean
     *
     * @ORM\Column(name="obtain", type="boolean")
     */
    protected $obtain;

    public function getDiploma() {
        return $this->diploma;
    }

    public function getObtain() {
        return $this->obtain;
    }

    public function setDiploma($diploma) {
        $this->diploma = $diploma;
        return $this;
    }

    public function setObtain($obtain) {
        $this->obtain = $obtain;
        return $this;
    }

}
