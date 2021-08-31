<?php namespace Application\Atoms\Entity;

use Atomino\Carbon\Database\Finder\Filter;
use Atomino\Carbon\Attributes\Field;
use Atomino\Carbon\Attributes\Immutable;
use Atomino\Carbon\Attributes\Protect;
use Atomino\Carbon\Attributes\Validator;
use Atomino\Carbon\Entity;
use Atomino\Carbon\Model;
use Atomino\Carbon\Attributes\RequiredField;


/**
 * @method static \Application\Atoms\EntityFinder\_Majors search( Filter $filter = null )
 * @method static \Atomino\Carbon\Database\Finder\Comparison id($isin = null)
 * @property-read int|null $id
 * @method static \Atomino\Carbon\Database\Finder\Comparison name_en($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison name_hu($isin = null)
 */
#[RequiredField('id', \Atomino\Carbon\Field\IntField::class)]
#[Field("id", \Atomino\Carbon\Field\IntField::class)]
#[Protect("id", true, false)]
#[Immutable("id",false)]
#[Validator("name_en", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>100])]
#[Field("name_en", \Atomino\Carbon\Field\StringField::class)]
#[Validator("name_hu", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>100])]
#[Field("name_hu", \Atomino\Carbon\Field\StringField::class)]
abstract class _Majors extends Entity {
	static null|Model $model = null;
	const id = 'id';
	protected int|null $id = null;
	protected function getId():int|null{ return $this->id;}
	const name_en = 'name_en';
	public string|null $name_en = null;
	const name_hu = 'name_hu';
	public string|null $name_hu = null;
}





