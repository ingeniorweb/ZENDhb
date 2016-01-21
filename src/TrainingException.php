<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Test\Training\Entity;

/**
 * Description of Exception
 *
 * @author hb
 */
use Training\Entity\Skill;
use Training\Entity\Training;

class TrainingException extends \Exception {

    const INVALID_PARAMETRE = 1;

    public function mockPhp() {


        $training = new Training;
        $skill = new Skill;

        $user = $mockedRepo->find(1);


        //PREPARE
        $reflectedTraining = new \ReflectionObject($training);
        $reflectedSkills = $reflectedTraining->getProperty('skills');
        $reflectedSkills->setAccessible(true);


        $reflectedSkills->setValue($training, mockedCollection);


        ///RUN
        $training->addSkill($skill);
    }

}
