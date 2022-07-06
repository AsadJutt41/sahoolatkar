<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_forms', function (Blueprint $table) {
            $table->id();
            $table->text('applicant_name')->nullable();
            $table->text('father_name')->nullable();
            $table->text('id_card')->nullable();
            $table->text('date_of_birth')->nullable();
            $table->text('permenet_address')->nullable();
            $table->text('current_address')->nullable();
            $table->text('position')->nullable();
            $table->text('duration')->nullable();
            $table->text('phone')->nullable();

            $table->text('marital_status')->nullable();
            $table->text('previous_office')->nullable();
            $table->text('current_office')->nullable();
            $table->text('office_position')->nullable();
            $table->text('office_duration')->nullable();
            $table->text('office_phone')->nullable();
            $table->text('occupation')->nullable();
            $table->text('monthly_income')->nullable();
            $table->text('fine')->nullable();

            $table->text('buy_something_before_on_installment')->nullable();
            $table->text('installment_products')->nullable();
            $table->text('organization')->nullable();
            $table->text('rental_product')->nullable();
            $table->text('model_number')->nullable();
            $table->text('serial_number')->nullable();
            $table->text('first_installment')->nullable();
            $table->text('selling_price')->nullable();
            $table->text('montly_installment')->nullable();
            $table->text('pending_amount')->nullable();
            $table->text('term_and_condition')->nullable();
            $table->text('customer_signature')->nullable();

            # Grenter part (form part 2) // grenter one
            $table->text('g_first_name')->nullable();
            $table->text('g_first_father_name')->nullable();
            $table->text('g_first_id_card')->nullable();
            $table->text('g_first_date_of_birth')->nullable();
            $table->text('g_first_address')->nullable();
            $table->text('g_first_position')->nullable();
            $table->text('g_first_duration')->nullable();
            $table->text('g_first_relation')->nullable();
            $table->text('g_first_phone')->nullable();
            $table->text('g_first_marital_status')->nullable();
            $table->text('g_first_work_address')->nullable();
            $table->text('g_first_work_phone_one')->nullable();
            $table->text('g_first_work_phone_two')->nullable();
            $table->text('g_first_work_position')->nullable();
            $table->text('g_first_work_duration')->nullable();
            $table->text('g_first_work_ocupation')->nullable();
            $table->text('g_first_work_monthly_income')->nullable();
            $table->text('g_first_work_previous_account')->nullable();
            $table->text('g_first_work_signature')->nullable();

            // grenter two
            $table->text('g_two_name')->nullable();
            $table->text('g_two_father_name')->nullable();
            $table->text('g_two_id_card')->nullable();
            $table->text('g_two_date_of_birth')->nullable();
            $table->text('g_two_address')->nullable();
            $table->text('g_two_position')->nullable();
            $table->text('g_two_duration')->nullable();
            $table->text('g_two_relation')->nullable();
            $table->text('g_two_phone')->nullable();
            $table->text('g_two_marital_status')->nullable();
            $table->text('g_two_work_address')->nullable();
            $table->text('g_two_work_phone_one')->nullable();
            $table->text('g_two_work_phone_two')->nullable();
            $table->text('g_two_work_position')->nullable();
            $table->text('g_two_work_duration')->nullable();
            $table->text('g_two_work_ocupation')->nullable();
            $table->text('g_two_work_monthly_income')->nullable();
            $table->text('g_two_work_previous_account')->nullable();
            $table->text('g_two_work_signature')->nullable();

            #Inquire part
            $table->text('remarks_inquiry_officer')->nullable();
            $table->text('check_available')->nullable();
            $table->text('bank')->nullable();
            $table->text('check_verified')->nullable();
            $table->text('check_count')->nullable();
            $table->text('check_from')->nullable();
            $table->text('inquiry_officer')->nullable();
            $table->text('inquiry_officer_signature')->nullable();
            $table->text('crc')->nullable();
            $table->text('crc_signature')->nullable();
            $table->text('approval_manager_a')->nullable();
            $table->text('approval_manager_a_signature')->nullable();
            $table->text('asm')->nullable();
            $table->text('asm_signature')->nullable();
            $table->text('approval_manager_b')->nullable();
            $table->text('approval_manager_b_signature')->nullable();
            $table->text('rsm')->nullable();
            $table->text('rsm_signature')->nullable();
            $table->text('other')->nullable();
            $table->text('other_signature')->nullable();
            $table->text('crc_head')->nullable();
            $table->text('crc_head_signature')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_forms');
    }
}
