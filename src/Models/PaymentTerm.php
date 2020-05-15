<?php

namespace LasseRafn\Ordrestyring\Models;

use LasseRafn\Ordrestyring\Requests\DebtorRequest;
use LasseRafn\Ordrestyring\Utils\Model;

class PaymentTerm extends Model
{
	const ENDPOINT      = '/payment-terms';
	const PRIMARY_KEY   = 'id';
	const REQUEST_CLASS = DebtorRequest::class;

	public $month_ongoing;
	public $id;
	public $short_text;
	public $long_text;
	public $days;

	protected $casts = [
		'id'            => 'int',
		'month_ongoing' => 'int',
		'days'          => 'int'
	];
}
