<?php namespace Application\Missions\Web\Services;

use Application\Entity\Eventacs;
use Atomino\Carbon\ValidationError;
use function Atomino\debug;

class QRService
{

    public function __construct(private StudentService $studentService)
    {
    }

    /**
     * @param array $input
     * @throws ValidationError
     */
    public function accesscontrol(array $input)
    {

        $event = Eventacs::create();

        $event->station = $input['_station'];
        $event->phase = $input['_phase'];

        $qrcode = $input['_qr'];
        $event->qrCode=$qrcode;
        if (!empty($qrcode) && preg_match('/MIK51-[scgi][a-z]*-[0-9]+-[0-9a-zA-z]{32,33}/', $input['_qr'])) {
            $data = explode("-", $input['_qr']);
            debug("data erteke");
            debug($data);
            $event->qrCode = $input['_qr'];

            if ($data[1] === 'student') {
                if ($this->studentService->checkByHash($data[2], $data[3])) {
                    debug("student hash ok");
                    $event->save();
                }
            }

            if ($data[1] === 'instructor') {
                if ($this->instructorService->checkByHash($data[2], $data[3])) {
                    debug("instructor hash ok");
                    $event->save();
                }
            }

            if ($data[1] === 'guest') {
                if ($this->guestService->checkByHash($data[2], $data[3])) {
                    debug("guest hash ok");
                    $event->save();
                }
            }

            if ($data[1] === 'chamber') {
                if ($this->chamberService->checkByHash($data[2], $data[3])) {
                    debug("chamber hash ok");
                    $event->save();
                }
            }

        }else{
            return array (
                'statusCode'=> http_response_code(422)
            );
        }

        return $event;
    }

    public function getQRCode(string $qrcode)
    {

    }
}
