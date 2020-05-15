<?php

namespace LasseRafn\Ordrestyring\Models;

use LasseRafn\Ordrestyring\Requests\CreditorInvoiceRequest;
use LasseRafn\Ordrestyring\Utils\Model;

class CreditorInvoice extends Model
{
    const ENDPOINT = '/creditor-invoices';
    const PRIMARY_KEY = 'id';
    const REQUEST_CLASS = CreditorInvoiceRequest::class;

    public $approved_status;
    public $case_number;
    public $account;
    public $id;
    public $type;
    public $number;
    public $date;
    public $buyer_name;
    public $buyer_address;
    public $buyer_postalcode;
    public $buyer_city;
    public $buyer_id;
    public $del_name;
    public $del_address;
    public $del_postalcode;
    public $del_city;
    public $suplier_name;
    public $suplier_address;
    public $suplier_postalcode;
    public $suplier_city;
    public $suplier_cvr;
    public $suplier_ean;
    public $suplier_ordernumber;
    public $order_date;
    public $buyer_contact;
    public $buyer_ordernumber;
    public $currency;
    public $payment_date;
    public $payment_type;
    public $payment_typecode;
    public $payment_part_1;
    public $payment_part_2;
    public $total;
    public $vat;
    public $total_vat;
    public $creditor_number;
    public $approval_comment;
    public $department;
	public $note;
	public $marking;
	public $updated_at;

    protected $casts = [
        'customer_number' => 'int',
        'use_skattered'   => 'bool',
        'updated_at'      => 'datetime',
        'created_at'      => 'datetime',
    ];

    public function getPdf()
    {
        return $this->client->get(self::ENDPOINT + '/'.$this->{self::PRIMARY_KEY}.'.pdf')->getBody()->getContents();
    }
}
