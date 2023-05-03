<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Cabinet
 *
 * @property int $id
 * @property int $number
 * @property int|null $employee_id
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Computer> $computers
 * @property-read int|null $computers_count
 * @property-read \App\Models\Employer|null $employer
 * @method static \Illuminate\Database\Eloquent\Builder|Cabinet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cabinet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cabinet query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cabinet whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cabinet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cabinet whereNumber($value)
 */
	class Cabinet extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Computer
 *
 * @property int $id
 * @property int|null $cabinet_id
 * @property string $processor
 * @property string $motherboard
 * @property string $ram
 * @property string $videocard
 * @property string $memory
 * @property string $power_unit
 * @property-read \App\Models\Cabinet|null $cabinet
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Equip> $equips
 * @property-read int|null $equips_count
 * @method static \Illuminate\Database\Eloquent\Builder|Computer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Computer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Computer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Computer whereCabinetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Computer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Computer whereMemory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Computer whereMotherboard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Computer wherePowerUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Computer whereProcessor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Computer whereRam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Computer whereVideocard($value)
 */
	class Computer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Employer
 *
 * @property int $id
 * @property int|null $job_id
 * @property string $telephone
 * @property string $firstname
 * @property string $lastname
 * @property string $date_birth
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Cabinet> $cabinets
 * @property-read int|null $cabinets_count
 * @property-read \App\Models\Job|null $job
 * @method static \Illuminate\Database\Eloquent\Builder|Employer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Employer whereDateBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employer whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employer whereJobId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employer whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employer whereTelephone($value)
 */
	class Employer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Equip
 *
 * @property int $id
 * @property int $type_id
 * @property string $title
 * @property mixed $specs
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Computer> $computers
 * @property-read int|null $computers_count
 * @property-read \App\Models\TypeEquip|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|Equip newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Equip newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Equip query()
 * @method static \Illuminate\Database\Eloquent\Builder|Equip whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equip whereSpecs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equip whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Equip whereTypeId($value)
 */
	class Equip extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Job
 *
 * @property int $id
 * @property string $title
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Employer> $employers
 * @property-read int|null $employers_count
 * @method static \Illuminate\Database\Eloquent\Builder|Job newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Job newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Job query()
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereTitle($value)
 */
	class Job extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TypeEquip
 *
 * @property int $id
 * @property int $type_equip
 * @property mixed $specs_fields
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Equip> $equips
 * @property-read int|null $equips_count
 * @method static \Illuminate\Database\Eloquent\Builder|TypeEquip newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeEquip newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeEquip query()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeEquip whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeEquip whereSpecsFields($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeEquip whereTypeEquip($value)
 */
	class TypeEquip extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

