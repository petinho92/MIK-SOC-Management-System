<?php

namespace Application\Missions\Web\Api;

use Application\Entity\Eventacs;
use Application\Missions\Web\Services\EmailService;
use Application\Missions\Web\Services\MajorService;
use Application\Missions\Web\Services\StudentService;
use Atomino\Mercury\Responder\Api\Api;
use Atomino\Mercury\Responder\Api\Attributes\Route;
use function Atomino\debug;

class statApi extends Api
{
    public function __construct(private StudentService $studentService, private MajorService $majorService, private EmailService $emailService, private Eventacs $eventacs){}

#[Route(self::GET, '/count')]
public function getRegistersCount()
{
   // $allStudent = $this->studentService->findAll();
    $countStudent = $this->studentService->getRegisteredStudentCount();

    return [
        'student'=>$countStudent,
    ];
}

#[Route(self::GET, '/list')]
public function getRegistersList()
{
    $students = $this->studentService->getAllStudent();
    $majors = $this->majorService->getAllMajor();
    $emailSent = $this->emailService->getSentInfo();
//    $eventacs = $this->eventacs->getCount();
    return [
        'students'=>$students,
        'majors'=>$majors,
        'emails' => $emailSent,
//        'events' => $eventacs
    ];
}


}