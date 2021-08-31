<?php namespace Application\Missions\Web\Api;

use Application\Missions\Web\Services\MajorService;
use Atomino\Mercury\Responder\Api\Api;
use Atomino\Mercury\Responder\Api\Attributes\Route;

class majorsApi extends Api
{

    public function __construct(private MajorService $majorService)
    {
    }

    #[Route(self::GET, '/majorsget')]
    public function getMajors() : array
    {
        $majors = $this->majorService->getAllMajor();
        if($majors){
            return $majors;
        }
        return [];
    }

}
