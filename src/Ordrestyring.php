<?php

namespace LasseRafn\Ordrestyring;

use GuzzleHttp\Client;
use LasseRafn\Ordrestyring\Requests\CaseItemRequest;
use LasseRafn\Ordrestyring\Requests\CreditorInvoiceRequest;
use LasseRafn\Ordrestyring\Requests\CreditorRequest;
use LasseRafn\Ordrestyring\Requests\DebtorInvoiceRequest;
use LasseRafn\Ordrestyring\Requests\DebtorRequest;
use LasseRafn\Ordrestyring\Requests\InternalGoodRequest;
use LasseRafn\Ordrestyring\Requests\PaymentTermRequest;

class Ordrestyring
{
    /** @var Client */
    protected $client;

    public function __construct(string $apikey = '')
    {
        $this->client = new Client([
            'base_uri' => 'https://v2.api.ordrestyring.dk',
            'auth'     => [
                "{$apikey}:x",
                '',
            ],
        ]);
    }

    public function debtors(): DebtorRequest
    {
        return new DebtorRequest($this->client);
    }

    public function debtorInvoices()
    {
        return new DebtorInvoiceRequest($this->client);
    }

    public function creditors():CreditorRequest
    {
    	return new CreditorRequest( $this->client);
    }

    public function creditorInvoices():CreditorInvoiceRequest
    {
    	return new CreditorInvoiceRequest( $this->client);
    }

    public function gps()
    {
    }

    public function internalGoods():InternalGoodRequest
    {
    	return new InternalGoodRequest( $this->client);
    }

    public function paymentTerms():PaymentTermRequest
    {
    	return new PaymentTermRequest( $this->client);
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
        return new CaseItemRequest($this->client);
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
        return new DeliveryAddressRequest($this->client);
    }

    public function getClient()
    {
    	return $this->client;
    }
}
