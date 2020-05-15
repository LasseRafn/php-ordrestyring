<?php

namespace LasseRafn\Ordrestyring\Requests;

use GuzzleHttp\Client;
use LasseRafn\Ordrestyring\Models\Debtor;
use LasseRafn\Ordrestyring\Models\PaymentTerm;
use LasseRafn\Ordrestyring\Utils\Request;
use LasseRafn\Ordrestyring\Utils\RequestExtensions\CanCreate;
use LasseRafn\Ordrestyring\Utils\RequestExtensions\CanUpdate;

class PaymentTermRequest extends Request
{
    use CanUpdate, CanCreate;

    protected $modelClass = PaymentTerm::class;

    public function __construct(Client $client)
    {
        $this->endpoint = PaymentTerm::ENDPOINT;
        $this->primaryKey = PaymentTerm::PRIMARY_KEY;

        parent::__construct($client);
    }
}
