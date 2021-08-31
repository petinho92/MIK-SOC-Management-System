<?php namespace Application\Missions\Web\Api;


use Application\Missions\Web\Services\QRService;
use Atomino\Carbon\ValidationError;
use Atomino\Mercury\Responder\Api\Api;
use Atomino\Mercury\Responder\Api\Attributes\Route;
use function Atomino\debug;

class scannerApi extends Api
{
    public function __construct(private QRService $QRService)
    {
    }

    #[Route(self::POST, '/scannerPost')]
    public function scannerPost()
    {
        try {
            debug("adat");
            debug($this->data->all());
            $this->QRService->accesscontrol($this->data->all());
        } catch (ValidationError $error) {
            return $error->getMessages();
        }
        return array(
            'statusCode'=>http_response_code(200)
        );
    }
}