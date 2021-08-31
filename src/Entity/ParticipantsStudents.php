<?php namespace Application\Entity;

use Atomino\Carbon\Attributes\Modelify;
use Application\Atoms\Entity\_ParticipantsStudents;
use Atomino\Carbon\Attributes\Validator;
use Atomino\Carbon\Plugins\Created\Created;
use Atomino\Carbon\Plugins\Guid\Guid;
use Atomino\Carbon\Validation\UniqueEntity;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\EmailValidator;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\LessThan;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Unique;

#[Modelify(\Application\Database\DefaultConnection::class, 'participants_students', true)]
#[Created]
#[Guid]
#[Validator('name', NotBlank::class, ['message'=>"Név megadása kötelező!"])]
#[Validator('neptun', NotBlank::class, ['message'=>"Neptun kód megadása kötelező!"])]
#[Validator('email', NotBlank::class, ['message'=>"Email megadása kötelező!"])]
#[Validator('mobile', Regex::class, ['pattern'=>"/^[0-9]*$/",'message'=>"Mobilszám csak számot tartalmazhat!"])]
#[Validator('email', Email::class)]
#[Validator('major', GreaterThan::class, ['value'=>0, 'message'=>"Szak megadása kötelező!"])]
#[Validator('semester', GreaterThan::class, ['value'=>0, 'message'=>"Félév megadása kötelező!"])]
#[Validator('participate', GreaterThan::class, ['value'=>0, 'message'=>"Részvétel mező kitöltése kötelező!"])]
#[Validator('orientation', GreaterThan::class, ['value'=>0, 'message'=>'Szakos ismertető mező kitöltése kötelező!'])]
#[Validator(null, UniqueEntity::class, ['fields'=>['neptun']])]
#[Validator(null, UniqueEntity::class, ['fields'=>['email']])]

class ParticipantsStudents extends _ParticipantsStudents{
    public function getQRCode(){
        return "MIK51-student-".$this->id.'-'.md5($this->neptun);
    }
}