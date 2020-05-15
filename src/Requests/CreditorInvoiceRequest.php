<?php

namespace LasseRafn\Ordrestyring\Requests;

use GuzzleHttp\Client;
use LasseRafn\Ordrestyring\Models\CreditorInvoice;
use LasseRafn\Ordrestyring\Models\DebtorInvoice;
use LasseRafn\Ordrestyring\Utils\Request;
use LasseRafn\Ordrestyring\Utils\RequestExtensions\CanCreate;
use LasseRafn\Ordrestyring\Utils\RequestExtensions\CanUpdate;

class CreditorInvoiceRequest extends Request
{
    use CanUpdate, CanCreate;

    protected $modelClass = CreditorInvoice::class;

    public function __construct(Client $client)
    {
        $this->endpoint = CreditorInvoice::ENDPOINT;
        $this->primaryKey = CreditorInvoice::PRIMARY_KEY;

        parent::__construct($client);
    }
}
