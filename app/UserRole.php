<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserRole extends Model
{
    protected const CREATED_AT = 'dtmCreated';
    protected const UPDATED_AT = 'dtmUpdated';

    /**
     * @var string
     */
    protected $table = 'tblUserRole';

    /**
     * @var int
     */
    protected $primaryKey = 'intUserRoleId';


}
