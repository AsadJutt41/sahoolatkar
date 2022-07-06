<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\RequestForm;

class RequestFormController extends Controller
{
    use ApiResponser;
    public function requestForm(Request $request)
    {
        $requestForm = new RequestForm();
        $requestForm->applicant_name = $request->applicant_name;
        $requestForm->father_name = $request->father_name;
        $requestForm->id_card = $request->id_card;
        $requestForm->date_of_birth = $request->date_of_birth;
        $requestForm->permenet_address = $request->permenet_address;
        $requestForm->current_address = $request->current_address;
        $requestForm->position = $request->position;
        $requestForm->duration = $request->duration;
        $requestForm->phone = $request->phone;

        $requestForm->marital_status = $request->marital_status;
        $requestForm->previous_office = $request->previous_office;
        $requestForm->current_office = $request->current_office;
        $requestForm->office_position = $request->office_position;
        $requestForm->office_duration = $request->office_duration;
        $requestForm->office_phone = $request->office_phone;
        $requestForm->occupation = $request->occupation;
        $requestForm->monthly_income = $request->monthly_income;
        $requestForm->fine = $request->fine;

        $requestForm->buy_something_before_on_installment = $request->buy_something_before_on_installment;
        $requestForm->installment_products = $request->installment_products;
        $requestForm->organization = $request->organization;
        $requestForm->rental_product = $request->rental_product;
        $requestForm->model_number = $request->model_number;
        $requestForm->serial_number = $request->serial_number;
        $requestForm->first_installment = $request->first_installment;
        $requestForm->selling_price = $request->selling_price;
        $requestForm->montly_installment = $request->montly_installment;
        $requestForm->pending_amount = $request->pending_amount;
        $requestForm->term_and_condition = $request->term_and_condition;
        $requestForm->customer_signature = $request->customer_signature;

        #grentee part (grenter no 1)
        $requestForm->g_first_name = $request->g_first_name;
        $requestForm->g_first_father_name = $request->g_first_father_name;
        $requestForm->g_first_id_card = $request->g_first_id_card;
        $requestForm->g_first_date_of_birth = $request->g_first_date_of_birth;
        $requestForm->g_first_address = $request->g_first_address;
        $requestForm->g_first_position = $request->g_first_position;
        $requestForm->g_first_duration = $request->g_first_duration;
        $requestForm->g_first_relation = $request->g_first_relation;
        $requestForm->g_first_phone = $request->g_first_phone;
        $requestForm->g_first_marital_status = $request->g_first_marital_status;
        $requestForm->g_first_work_address = $request->g_first_work_address;
        $requestForm->g_first_work_phone_one = $request->g_first_work_phone_one;
        $requestForm->g_first_work_phone_two = $request->g_first_work_phone_two;
        $requestForm->g_first_work_position = $request->g_first_work_position;
        $requestForm->g_first_work_duration = $request->g_first_work_duration;
        $requestForm->g_first_work_ocupation = $request->g_first_work_ocupation;
        $requestForm->g_first_work_monthly_income = $request->g_first_work_monthly_income;
        $requestForm->g_first_work_previous_account = $request->g_first_work_previous_account;
        $requestForm->g_first_work_signature = $request->g_first_work_signature;

        #grentee part (grenter no 2)
        $requestForm->g_two_name = $request->g_two_name;
        $requestForm->g_two_father_name = $request->g_two_father_name;
        $requestForm->g_two_id_card = $request->g_two_id_card;
        $requestForm->g_two_date_of_birth = $request->g_two_date_of_birth;
        $requestForm->g_two_address = $request->g_two_address;
        $requestForm->g_two_position = $request->g_two_position;
        $requestForm->g_two_duration = $request->g_two_duration;
        $requestForm->g_two_relation = $request->g_two_relation;
        $requestForm->g_two_phone = $request->g_two_phone;
        $requestForm->g_two_marital_status = $request->g_two_marital_status;
        $requestForm->g_two_work_address = $request->g_two_work_address;
        $requestForm->g_two_work_phone_one = $request->g_two_work_phone_one;
        $requestForm->g_two_work_phone_two = $request->g_two_work_phone_two;
        $requestForm->g_two_work_position = $request->g_two_work_position;
        $requestForm->g_two_work_duration = $request->g_two_work_duration;
        $requestForm->g_two_work_ocupation = $request->g_two_work_ocupation;
        $requestForm->g_two_work_monthly_income = $request->g_two_work_monthly_income;
        $requestForm->g_two_work_previous_account = $request->g_two_work_previous_account;
        $requestForm->g_two_work_signature = $request->g_two_work_signature;

        #inquiry officer
        $requestForm->remarks_inquiry_officer = $request->remarks_inquiry_officer;
        $requestForm->check_available = $request->check_available;
        $requestForm->bank = $request->bank;
        $requestForm->check_verified = $request->check_verified;
        $requestForm->check_count = $request->check_count;
        $requestForm->check_from = $request->check_from;
        $requestForm->inquiry_officer = $request->inquiry_officer;
        $requestForm->inquiry_officer_signature = $request->inquiry_officer_signature;
        $requestForm->crc = $request->crc;
        $requestForm->crc_signature = $request->crc_signature;
        $requestForm->approval_manager_a = $request->approval_manager_a;
        $requestForm->approval_manager_a_signature = $request->approval_manager_a_signature;
        $requestForm->asm = $request->asm;
        $requestForm->asm_signature = $request->asm_signature;
        $requestForm->approval_manager_b = $request->approval_manager_b;
        $requestForm->approval_manager_b_signature = $request->approval_manager_b_signature;
        $requestForm->rsm = $request->rsm;
        $requestForm->rsm_signature = $request->rsm_signature;
        $requestForm->other = $request->other;
        $requestForm->other_signature = $request->other_signature;
        $requestForm->crc_head = $request->crc_head;
        $requestForm->crc_head_signature = $request->crc_head_signature;

        $requestForm->save();
        return $this->sendResponse(true, $requestForm, ['Request Form has been added successfully!']);
    }
}
