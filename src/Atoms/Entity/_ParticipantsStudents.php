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
 * @method static \Application\Atoms\EntityFinder\_ParticipantsStudents search( Filter $filter = null )
 * #[Immutable( 'guid', true )]
 * #[Protect( 'guid', true, false )]
 * #[RequiredField('guid', StringField::class)]
 * @method static \Atomino\Carbon\Database\Finder\Comparison created($isin = null)
 * @property-read \DateTime|null $created
 * @method static \Atomino\Carbon\Database\Finder\Comparison email($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison guid($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison id($isin = null)
 * @property-read int|null $id
 * @method static \Atomino\Carbon\Database\Finder\Comparison lang($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison major($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison mobile($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison name($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison neptun($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison orientation($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison participate($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison qr_code($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison semester($isin = null)
 */
#[RequiredField('id', \Atomino\Carbon\Field\IntField::class)]
#[Immutable("created", true)]
#[Protect("created", true, false)]
#[RequiredField("created", \Atomino\Carbon\Field\DateTimeField::class)]
#[Field("created", \Atomino\Carbon\Field\DateTimeField::class)]
#[Validator("email", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>100])]
#[Field("email", \Atomino\Carbon\Field\StringField::class)]
#[Validator("guid", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>36])]
#[Field("guid", \Atomino\Carbon\Field\StringField::class)]
#[Field("id", \Atomino\Carbon\Field\IntField::class)]
#[Protect("id", true, false)]
#[Immutable("id",false)]
#[Validator("lang", \Symfony\Component\Validator\Constraints\NotNull::class)]
#[Validator("lang", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>5])]
#[Field("lang", \Atomino\Carbon\Field\StringField::class)]
#[Validator("major", \Symfony\Component\Validator\Constraints\PositiveOrZero::class)]
#[Field("major", \Atomino\Carbon\Field\IntField::class)]
#[Validator("mobile", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>20])]
#[Field("mobile", \Atomino\Carbon\Field\StringField::class)]
#[Validator("name", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>100])]
#[Field("name", \Atomino\Carbon\Field\StringField::class)]
#[Validator("neptun", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>10])]
#[Field("neptun", \Atomino\Carbon\Field\StringField::class)]
#[Validator("orientation", \Symfony\Component\Validator\Constraints\PositiveOrZero::class)]
#[Field("orientation", \Atomino\Carbon\Field\IntField::class)]
#[Validator("participate", \Symfony\Component\Validator\Constraints\PositiveOrZero::class)]
#[Field("participate", \Atomino\Carbon\Field\IntField::class)]
#[Validator("qr_code", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>100])]
#[Field("qr_code", \Atomino\Carbon\Field\StringField::class)]
#[Validator("semester", \Symfony\Component\Validator\Constraints\PositiveOrZero::class)]
#[Field("semester", \Atomino\Carbon\Field\IntField::class)]
abstract class _ParticipantsStudents extends Entity {
	static null|Model $model = null;
	use \Atomino\Carbon\Plugins\Created\CreatedTrait;
	use \Atomino\Carbon\Plugins\Guid\GuidTrait;
	const created = 'created';
	protected \DateTime|null $created = null;
	protected function getCreated():\DateTime|null{ return $this->created;}
	const email = 'email';
	public string|null $email = null;
	const guid = 'guid';
	public string|null $guid = null;
	const id = 'id';
	protected int|null $id = null;
	protected function getId():int|null{ return $this->id;}
	const lang = 'lang';
	public string|null $lang = null;
	const major = 'major';
	public int|null $major = null;
	const mobile = 'mobile';
	public string|null $mobile = null;
	const name = 'name';
	public string|null $name = null;
	const neptun = 'neptun';
	public string|null $neptun = null;
	const orientation = 'orientation';
	public int|null $orientation = null;
	const participate = 'participate';
	public int|null $participate = null;
	const qr_code = 'qr_code';
	public string|null $qr_code = null;
	const semester = 'semester';
	public int|null $semester = null;
}





