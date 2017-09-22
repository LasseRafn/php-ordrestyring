<?php namespace LasseRafn\Ordrestyring;

use GuzzleHttp\Client;
use LasseRafn\Ordrestyring\Requests\CaseItemRequest;
use LasseRafn\Ordrestyring\Requests\DebtorInvoiceRequest;
use LasseRafn\Ordrestyring\Requests\DebtorRequest;

class Ordrestyring
{
	/** @var Client */
	protected $client;

	public function __construct( string $apikey = '' )
	{
		$this->client = new Client( [
			'base_uri' => 'https://v2.api.ordrestyring.dk',
			'auth'     => [
				"{$apikey}:x",
				''
			]
		] );
	}

	public function debtors(): DebtorRequest
	{
		return new DebtorRequest( $this->client );
	}

	public function debtorInvoices()
	{
		return new DebtorInvoiceRequest( $this->client );
	}

	public function creditors()
	{
	}

	public function creditorInvoices()
	{
	}

	public function gps()
	{
	}

	public function internalGoods()
	{
	}

	public function paymentTerms()
	{
	}

	public function debtorCategories()
	{
	}

	public function accountPlan()
	{
	}

	public function vatTypes()
	{
	}

	public function departments()
	{
	}

	public function cases()
	{
		return new CaseItemRequest( $this->client );
	}

	public function caseStatuses()
	{
	}

	public function caseTypes()
	{
	}

	public function caseStatusHistory()
	{
	}

	public function caseMaterials()
	{
	}

	public function caseDocumentation()
	{
	}

	public function hours()
	{
	}

	public function employeeTypes()
	{
	}

	public function calendar()
	{
	}

	public function user()
	{
	}

	public function deliveryAddresses()
	{
		return new DeliveryAddressRequest( $this->client );
	}
}