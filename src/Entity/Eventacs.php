<?php namespace Application\Entity;

use Atomino\Carbon\Attributes\Modelify;
use Application\Atoms\Entity\_Eventacs;
use Atomino\Carbon\Plugins\Created\Created;
use function Atomino\debug;

#[Created]
#[Modelify(\Application\Database\DefaultConnection::class, 'eventacs', true)]
class Eventacs extends _Eventacs{

    public function getCount()
    {
//        $userParticipations = Eventacs::search()->collect();
//        $array = array();
//        foreach ($userParticipations as $user)
//        {
//            $data = explode("-", $user->qrCode);
//            array_push($array, (object)[
//                'id' => $data[2],
//                'value' => 0
//            ]);
//
//
//        }
//        debug($array);
//        debug(array_count_values($array));
//        $countArray = array_count_values($array['id']);

        return true;


    }
}