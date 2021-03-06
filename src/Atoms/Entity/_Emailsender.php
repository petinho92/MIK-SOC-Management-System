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
 * @method static \Application\Atoms\EntityFinder\_Emailsender search( Filter $filter = null )
 * @method static \Atomino\Carbon\Database\Finder\Comparison created($isin = null)
 * @property-read \DateTime|null $created
 * @method static \Atomino\Carbon\Database\Finder\Comparison id($isin = null)
 * @property-read int|null $id
 * @method static \Atomino\Carbon\Database\Finder\Comparison lang($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison sentTime($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison statusSent($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison toContent($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison toEmail($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison toName($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison toQr($isin = null)
 */
#[RequiredField('id', \Atomino\Carbon\Field\IntField::class)]
#[Immutable("created", true)]
#[Protect("created", true, false)]
#[RequiredField("created", \Atomino\Carbon\Field\DateTimeField::class)]
#[Field("created", \Atomino\Carbon\Field\DateTimeField::class)]
#[Field("id", \Atomino\Carbon\Field\IntField::class)]
#[Protect("id", true, false)]
#[Immutable("id",false)]
#[Validator("lang", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>5])]
#[Field("lang", \Atomino\Carbon\Field\StringField::class)]
#[Field("sentTime", \Atomino\Carbon\Field\DateTimeField::class)]
#[Field("statusSent", \Atomino\Carbon\Field\BoolField::class)]
#[Validator("toContent", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>65535])]
#[Field("toContent", \Atomino\Carbon\Field\StringField::class)]
#[Validator("toEmail", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>100])]
#[Field("toEmail", \Atomino\Carbon\Field\StringField::class)]
#[Validator("toName", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>100])]
#[Field("toName", \Atomino\Carbon\Field\StringField::class)]
#[Validator("toQr", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>100])]
#[Field("toQr", \Atomino\Carbon\Field\StringField::class)]
abstract class _Emailsender extends Entity {
	static null|Model $model = null;
	use \Atomino\Carbon\Plugins\Created\CreatedTrait;
	const created = 'created';
	protected \DateTime|null $created = null;
	protected function getCreated():\DateTime|null{ return $this->created;}
	const id = 'id';
	protected int|null $id = null;
	protected function getId():int|null{ return $this->id;}
	const lang = 'lang';
	public string|null $lang = null;
	const sentTime = 'sentTime';
	public \DateTime|null $sentTime = null;
	const statusSent = 'statusSent';
	public bool|null $statusSent = null;
	const toContent = 'toContent';
	public string|null $toContent = null;
	const toEmail = 'toEmail';
	public string|null $toEmail = null;
	const toName = 'toName';
	public string|null $toName = null;
	const toQr = 'toQr';
	public string|null $toQr = null;
}





