<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Training\Entity;

/**
 * Description of Cv
 *
 * @author hb
 */
class Cv {

    protected $candidate;
    protected $degrees = [];
    protected $experiences = [];
    protected $trainings = [];

    public function getCandidate() {
        return $this->candidate;
    }

    public function getDegrees() {
        return $this->degrees;
    }

    public function getExperiences() {
        return $this->experiences;
    }

    public function getTrainings() {
        return $this->trainings;
    }

    public function setCandidate($candidate) {
        $this->candidate = $candidate;
        return $this;
    }

    public function setDegrees($degrees) {
        $this->degrees = $degrees;
        return $this;
    }

    public function setExperiences($experiences) {
        $this->experiences = $experiences;
        return $this;
    }

    public function setTrainings($trainings) {
        $this->trainings = $trainings;
        return $this;
    }

}
