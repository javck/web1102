<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model {
	use HasFactory;

	protected $fillable = ['name', 'department', 'rank', 'personal_id', 'birthday', 'gender', 'address', 'phone', 'email', 'status', 'userid', 'pwd', 'validation', 'emer_contact', 'emer_phone', 'remark'];
}
