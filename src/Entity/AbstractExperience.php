<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Training\Entity;

/**
 * Description of Experience
 *
 * @author hb
 */
class AbstractExperience {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="entreprise", type="string", length=255)
     */
    protected $entreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="poste", type="string", length=255)
     */
    protected $poste;

    /**
     * @var \DateTime
     * @Assert\DateTime()
     * @ORM\Column(name="date", type="date")
     */
    protected $date;

    /**
     * @var \DateTime
     * @Assert\DateTime()
     * @ORM\Column(name="start", type="date")
     */
    protected $start;

    /**
     * @var \DateTime
     * @Assert\DateTime()
     * @ORM\Column(name="end", type="date")
     */
    protected $end;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    protected $description;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    protected $image;
    protected $skills = [];

    public function getSkills() {
        return $this->skills;
    }

    public function setSkills(array $skills) {
        $this->skills = $skills;
        return $this;
    }

    public function getId() {
        return $this->id;
    }

    public function getEntreprise() {
        return $this->entreprise;
    }

    public function getPoste() {
        return $this->poste;
    }

    public function getDate() {
        return $this->date;
    }

    public function getStart() {
        return $this->start;
    }

    public function getEnd() {
        return $this->end;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getImage() {
        return $this->image;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setEntreprise($entreprise) {
        $this->entreprise = $entreprise;
        return $this;
    }

    public function setPoste($poste) {
        $this->poste = $poste;
        return $this;
    }

    public function setDate(\DateTime $date) {
        $this->date = $date;
        return $this;
    }

    public function setStart(\DateTime $start) {
        $this->start = $start;
        return $this;
    }

    public function setEnd(\DateTime $end) {
        $this->end = $end;
        return $this;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    public function setImage($image) {
        $this->image = $image;
        return $this;
    }

}
