<?php namespace Application\Missions\Web\Services;

use Application\Entity\Majors;

class MajorService{

    public function getAllMajor()
    {
        return Majors::search()->collect();
    }

    public function getMajorName($id)
    {
        $data = Majors::pick($id);
        if ($data) {
            return [
                $data->name_hu,
                $data->name_en
            ];
        }
        return false;
    }
}
