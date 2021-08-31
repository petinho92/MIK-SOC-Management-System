<?php namespace Application\Missions\Web\Api;

use Application\Entity\ParticipantsStudents;
use Application\Entity\User;
use Application\Missions\Cli\EmailSender;
use Application\Missions\Web\Page\Student;
use Application\Missions\Web\Services\ChamberService;
use Application\Missions\Web\Services\EmailService;
use Application\Missions\Web\Services\GuestService;
use Application\Missions\Web\Services\InstructorService;
use Application\Missions\Web\Services\StudentService;
use Atomino\Carbon\ValidationError;
use Atomino\Mercury\Responder\Api\Api;
use Atomino\Mercury\Responder\Api\Attributes\Route;
use PHPMailer\PHPMailer\Exception;
use Symfony\Component\HttpFoundation\Response;
use function Atomino\debug;
use function DI\create;

class registrationApi extends Api
{

    public function __construct(private StudentService $studentService, private EmailService $emailService)
    {
    }

    #[Route(self::POST, '/studentPost')]
    public function studPost()
    {
        try {
            $student = $this->studentService->create($this->data->all());
            $this->emailService->create($student, $this->data->all());
        } catch (ValidationError $error) {
            $this->setStatusCode(422);
            return $error->getMessages();
        } catch (Exception $e) {
        }
        return array(
            'statusCode' => http_response_code(200),
            'type' => 'student',
            'qrCode' => $student->getQRCode()
        );
    }
}


