<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Training\Service;

use Training\Entity\Candidate;
use Training\Entity\Cv;

/**
 * Description of CvService
 *
 * @author hb
 */
class CvService {

    public function exportData(Cv $cv) {

        ////init export data
        $data = ['candidate' => []];

        //compute candidate age

        $candidate = $cv->getCandidate();
        $data['candidate']['age'] = $this->computerCandidateAge($candidate);

        /// add candidate properties

        $data['candidate']['firstname'] = $candidate->getFirstName();
        $data['candidate']['last_name'] = $candidate->getLast_name();
//        $data['candidate']['age'] = $candidate->getAge();
        $data['candidate']['address'] = $candidate->getAddress();

        return $data;
    }

    public function computerCandidateAge(Candidate $candidate) {
        return $candidate->getBirthDate()->diff(new \DateTime())->y;
    }

}
