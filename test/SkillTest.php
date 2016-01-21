<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Test\Training\Entity;

use Training\Entity\Skill;
use Training\Entity\Training;

/**
 * Description of SkillTest
 *
 * @author hb
 */
class SkillTest extends \PHPUnit_Framework_TestCase {

    public function testGetterId() {
        ///prepare
        $skill = new Skill;


        // RUN
        $skill->setId(999);
        $skill->getId();
        // ASSERT

        $this->assertAttributeInstanceOf(999, 'id', $skill, 'id exist?');

//        $this->assertEquals(9, $skill->getNiveau());
    }

    public function testGetterNiveau() {
        ///prepare
        $skill = new Skill;

        // RUN

        $skill->getNiveau(9);

        // ASSERT

        $this->assertAttributeLessThan(10, 'niveau', $skill);
//        $this->assertEquals(9, $skill->getNiveau());
    }

    public function testSetNiveau() {
        ///prepare
        $skill = new Skill;

        // RUN

        $skill->setNiveau(9);

        // ASSERT

        $this->assertAttributeEquals('9', 'niveau', $skill);
        $this->assertEquals(9, $skill->getNiveau());
    }

    public function testGetterNomString() {
        ///prepare
        $skill = new Skill;

        // RUN

        $skill->setNom('toto');

        // ASSERT

        $this->assertAttributeInternalType('string', 'nom', $skill);
    }

}
