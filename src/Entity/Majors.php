<?php namespace Application\Entity;

use Atomino\Carbon\Attributes\Modelify;
use Application\Atoms\Entity\_Majors;

#[Modelify(\Application\Database\DefaultConnection::class, 'majors', true)]
class Majors extends _Majors{

}