<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Training\Entity;

/**
 * Description of Candidate
 *
 * @author hb
 */
class Candidate {

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
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    protected $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    protected $last_name;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer")
     */
    protected $age;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=255)
     */
    protected $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    protected $address;

    /**
     * @var \DateTime
     * @Assert\DateTime()
     * @ORM\Column(name="date", type="date")
     */
    protected $date;

    /**
     * @var \DateTime
     * @Assert\DateTime()
     * @ORM\Column(name="BirthDate", type="date")
     */
    protected $BirthDate;

    public function getDate() {
        return $this->date;
    }

    public function getBirthDate() {
        return $this->BirthDate;
    }

    public function setDate(\DateTime $date) {
        $this->date = $date;
        return $this;
    }

    public function setBirthDate(\DateTime $BirthDate) {
        $this->BirthDate = $BirthDate;
        return $this;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function getLast_name() {
        return $this->last_name;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
        return $this;
    }

    public function setLast_name($last_name) {
        $this->last_name = $last_name;
        return $this;
    }

    public function setAddress($address) {
        $this->address = $address;
        return $this;
    }

    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getAge() {
        return $this->age;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    public function setAge($age) {
        $this->age = $age;
        return $this;
    }

    public function setGenre($genre) {
        $this->genre = $genre;
        return $this;
    }

}
