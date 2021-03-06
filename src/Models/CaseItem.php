<?php

namespace LasseRafn\Ordrestyring\Models;

use LasseRafn\Ordrestyring\Requests\CaseItemRequest;
use LasseRafn\Ordrestyring\Requests\DebtorRequest;
use LasseRafn\Ordrestyring\Utils\Model;
use LasseRafn\Ordrestyring\Utils\ModelTraits\CanUpdate;

class CaseItem extends Model
{
    use CanUpdate;

    const ENDPOINT = '/cases';
    const PRIMARY_KEY = 'case_number';
    const REQUEST_CLASS = CaseItemRequest::class;

    public $ourref;
    public $requestor;
    public $creation_date;
    public $error_type;
    public $description;
    public $main_technician;
    public $status;
    public $scanstatus;
    public $made_by;
    public $perform_time_from;
    public $perform_time_to;
    public $repeat;
    public $repeat_value;
    public $repeat_type;
    public $repeat_timestamp;
    public $offer_number;
    public $additional_technicians;
    public $remarks;
    public $work_done;
    public $delivery_address;
    public $contact;
    public $case_type;
    public $est_hours;
    public $est_materials;
    public $est_cost_hours;
    public $est_cost_materials;
    public $department;
    public $is_service;
    public $no_materials;
    public $budget_lock;
    public $budget_cost;
    public $budget_sale;
    public $reviewed_budget_cost;
    public $reviewed_budget_sale;
    public $budget_hour_cost;
    public $budget_hour_sale;
    public $reviewed_budget_hour_cost;
    public $reviewed_budget_hour_sale;
    public $case_number;
    public $hmn;
    public $sub_number;
    public $upper_case;
    public $upper_case_number;
    public $hmn_report_number;
    public $hmn_customer_number;
    public $eco_handle;
    public $updated_at;
    public $created_at;
    public $asset_id;
    public $service_id;
    public $offer_blob_hash;
    public $offer_description;
    public $offer_ref;
    public $offer_rek;
    public $offer_remark;
    public $is_jublo_case;
    public $customer_number;

    /** @var Debtor */
    public $customer;

    protected $casts = [
        'case_number'   => 'int',
        'is_jublo_case' => 'bool',
        'is_service'    => 'bool',
        'updated_at'    => 'datetime',
        'created_at'    => 'datetime',
    ];

    public function getCustomer($number)
    {
        return ( new DebtorRequest($this->client) )->find($number);
    }

    public function setStatus(int $statusId)
    {
        $this->update([
            'status' => $statusId,
        ]);

        $this->status = $statusId;

        return $this;
    }

    public function uploadDocumentation($base64File, $type, $name, $description, $owner)
    {
        $pdf_decoded = base64_decode($base64File);

        return $this->client->post('/case-documentation', [
            'multipart' => [
                [
                    'name'     => 'file',
                    'contents' => $pdf_decoded,
                    'filename' => $name,
                ],
                [
                    'name'     => 'case_number',
                    'contents' => $this->case_number,
                ],
                [
                    'name'     => 'description',
                    'contents' => $description,
                ],
                [
                    'name'     => 'filetype',
                    'contents' => $type,
                ],
                [
                    'name'     => 'filename',
                    'contents' => $name,
                ],
                [
                    'name'     => 'owner',
                    'contents' => $owner,
                ],
            ],
        ]);
    }
}
