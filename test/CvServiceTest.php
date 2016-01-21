<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Test\Training\Entity;

use Training\Service\CvService;

/**
 * Description of CvServiceTest
 *
 * @author hb
 */
class CvServiceTest extends \PHPUnit_Framework_TestCase {

    public function testDataExtraction() {
        //PREPARE
        $resumeService = new CvService();
        $cv = $this->getSampleCv();

        ///   RUN
        $data = $resumeService->exportData($cv);


        /// ASSERT
        $expectation = [
        'candidate' => [
        'first-name' => 'toto',
        'last_name' => 'carambo',
        'address' => '5 rue de truc',
        'age' => 37
        ]
        ]

        return $this->assertEquals($expectation, $data);
    }

}
