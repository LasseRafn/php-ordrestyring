<?php

namespace LasseRafn\Ordrestyring\Requests;

use GuzzleHttp\Client;
use LasseRafn\Ordrestyring\Models\Creditor;
use LasseRafn\Ordrestyring\Utils\Request;
use LasseRafn\Ordrestyring\Utils\RequestExtensions\CanCreate;
use LasseRafn\Ordrestyring\Utils\RequestExtensions\CanUpdate;

class CreditorRequest extends Request
{
    use CanUpdate, CanCreate;

    protected $modelClass = Creditor::class;

    public function __construct(Client $client)
    {
        $this->endpoint = Creditor::ENDPOINT;
        $this->primaryKey = Creditor::PRIMARY_KEY;

        parent::__construct($client);
    }
}
