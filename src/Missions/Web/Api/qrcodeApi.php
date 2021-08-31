<?php namespace Application\Missions\Web\Api;

use Application\Missions\Web\Services\ChamberService;
use Application\Missions\Web\Services\GuestService;
use Application\Missions\Web\Services\InstructorService;
use Application\Missions\Web\Services\StudentService;
use Atomino\Mercury\Responder\Api\Api;
use Atomino\Mercury\Responder\Api\Attributes\Route;
use function Atomino\debug;

class qrcodeApi extends Api
{

    public function __construct(private StudentService $studentService)
    {
    }

    #[Route(self::GET, '/qr/:code(MIK51-[s|c|g|i][a-z]*-[0-9]+-[0-9a-zA-Z]*)')]
    public function qrGet(string $code)
    {
        //MIK51-student-263-5be164ef006b27adc41690096165fee5

        $data = explode("-", $code);
        if ($data[1] === 'student') {
            if ($this->studentService->checkByHash($data[2], $data[3])) {
                return $code;
            }else{
                return false;

            }
        }
        return false;
    }

}
