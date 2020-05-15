<?php

namespace LasseRafn\Ordrestyring\Models;

use LasseRafn\Ordrestyring\Requests\InternalGoodRequest;
use LasseRafn\Ordrestyring\Utils\Model;

class InternalGood extends Model
{
	const ENDPOINT      = '/internal-goods';
	const PRIMARY_KEY   = 'id';
	const REQUEST_CLASS = InternalGoodRequest::class;

	public $id;
	public $number;
	public $description;
	public $price;
	public $costprice;
	public $account;
	public $updated_at;
	public $created_at;

	protected $casts = [
		'id'         => 'int',
		'costprice'  => 'int',
		'price'      => 'int',
		'updated_at' => 'datetime',
		'created_at' => 'datetime',
	];
}
