<?php

namespace LasseRafn\Ordrestyring\Models;

use LasseRafn\Ordrestyring\Requests\CreditorRequest;
use LasseRafn\Ordrestyring\Utils\Model;

class Creditor extends Model
{
	const ENDPOINT      = '/creditors';
	const PRIMARY_KEY   = 'ID';
	const REQUEST_CLASS = CreditorRequest::class;

	public $ID;
	public $Account;
	public $IsAccessible;
	public $Name;
	public $Address;
	public $Postalcode;
	public $City;
	public $CVR;
	public $updated_at;
	public $created_at;

	protected $casts = [
		'IsAccessible' => 'bool',
		'Account'      => 'int',
		'updated_at'   => 'datetime',
		'created_at'   => 'datetime',
	];
}
