<?php namespace Application\Missions\Web\Services;

use Application\Atoms\Entity\_ParticipantsStudents;
use Application\Entity\Majors;
use Application\Entity\ParticipantsStudents;
use Application\Missions\Web\Services\MajorService;
use Atomino\Carbon\Database\Finder\Filter;
use Atomino\Carbon\ValidationError;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use function Atomino\debug;


require './vendor/autoload.php';

class StudentService
{
    public function __construct(private EmailService $emailService)
    {
    }

    public static function test()
    {
        debug("service okay");
    }


    /**
     * @throws Exception
     */
    public function fancyMail(ParticipantsStudents $student)
    {

        $dictionary = [
            '{{name}}' => $student->name,
            '{{email}}' => $student->email,
            '{{neptun}}' => $student->neptun,
            '{{major}}' => $this->getMajor($student->major),
            '{{qrcode}}' => $student->getQRCode(),
        ];

        $template = file_get_contents(__DIR__ . '/resources/StudentEmailTemplate_hu.html');
        $content = strtr($template, $dictionary);

        $this->emailService->fancyMail($student, $content);
    }


    public function getMajor($id): bool|string|null
    {
        return (new MajorService)->getMajorName($id);
    }

    /**
     * @param array $input
     * @return ParticipantsStudents
     * @throws ValidationError
     */
    public function create(array $input)
    {
        debug($input);
        $student = ParticipantsStudents::create();

        $student->name = $input['_name'];
        $student->email = $input['_email'];
        $student->neptun = strtoupper($input['_neptun']);
        $student->major = intval($input['_major']);
        $student->mobile = $input['_mobile'];
        $student->semester = intval($input['_semester']);
        $student->participate = intval($input['_participate']);
        $student->orientation = intval($input['_orientation']);
        $student->lang = $input['_lang'];
        $student->save();
        return $student;
    }

    public function checkByHash($id, $hash)
    {
        $student = ParticipantsStudents::pick($id);
        if ($student) {
            if ($hash === md5($student->neptun)) {
                return true;
            }
        }
        return false;
    }

    public function getAllStudent()
    {
        $data = ParticipantsStudents::search()->collect();
        $array = array();
        foreach ($data as $adat) {
            array_push($array, (object)[
                'id' => $adat->id,
                'name' => $adat->name,
                'neptun' => $adat->neptun,
                'major' => $adat->major,
                'email' => $adat->email,
                'created' => ($adat->created)->format("Y-m-d H:i:s"),
                'mobile' => $adat->mobile,
                'semester' => $adat->semester,
                'participate' => $adat->participate,
                'orientation' => $adat->orientation,
                'qrcode' => $adat->getQRCode()
            ]);
        }
        return $array;
    }

    public function getRegisteredStudentCount()
    {
        return ParticipantsStudents::search()->count();
    }

    public function getStudent($id)
    {
        if (!($student = ParticipantsStudents::pick($id)->export())) ;
        return $student;
    }
}

;