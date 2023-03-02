<?php

use App\Models\OperationStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operation_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('status',4)->unique(true);
            $table->string('description',35);
            $table->timestamps();
        });

        OperationStatus::create(['status' => '0000', 'description' => 'Being entered']);
        OperationStatus::create(['status' => '0025', 'description' => 'Entering to be filled']);
        OperationStatus::create(['status' => '0040', 'description' => 'To deduct']);
        OperationStatus::create(['status' => '0041', 'description' => 'Subject to large deduction']);
        OperationStatus::create(['status' => '0050', 'description' => 'Encoded from another system']);
        OperationStatus::create(['status' => '0900', 'description' => 'For new settlement']);
        OperationStatus::create(['status' => '0998', 'description' => 'Suspension (breaks found)']);
        OperationStatus::create(['status' => '0999', 'description' => 'Balances not equal b/n clts and ctp']);
        OperationStatus::create(['status' => '1000', 'description' => 'Awaiting authorization']);
        OperationStatus::create(['status' => '1001', 'description' => 'Sett. to be validated']);
        OperationStatus::create(['status' => '1011', 'description' => 'To be validated, renewal request']);
        OperationStatus::create(['status' => '1015', 'description' => 'Modif. in progress (not valid)']);
        OperationStatus::create(['status' => '1020', 'description' => 'Changed, awaiting authorization']);
        OperationStatus::create(['status' => '1100', 'description' => 'To send - Best execution required']);
        OperationStatus::create(['status' => '1300', 'description' => 'Waiting for data on product']);
        OperationStatus::create(['status' => '1310', 'description' => 'Covered products to define']);
        OperationStatus::create(['status' => '1320', 'description' => 'Covering products to define']);
        OperationStatus::create(['status' => '1330', 'description' => 'Waiting for validation']);
        OperationStatus::create(['status' => '1500', 'description' => ' Authorised, awaiting data']);
        OperationStatus::create(['status' => '1602', 'description' => 'Batch not valid']);
        OperationStatus::create(['status' => '1605', 'description' => 'Rejected by creditor']);
        OperationStatus::create(['status' => '2000', 'description' => 'Awaiting processing']);
        OperationStatus::create(['status' => '2001', 'description' => 'Technical error']);
        OperationStatus::create(['status' => '2002', 'description' => 'Suspended - validity']);
        OperationStatus::create(['status' => '2080', 'description' => 'Contract under normal management']);
        OperationStatus::create(['status' => '2100', 'description' => 'Awaiting selection for reset']);
        OperationStatus::create(['status' => '2110', 'description' => 'Awaiting reset']);
        OperationStatus::create(['status' => '2115', 'description' => 'Awaiting reset validation']);
        OperationStatus::create(['status' => '2120', 'description' => 'Awaiting creat. payment instruct.']);
        OperationStatus::create(['status' => '2125', 'description' => 'Awaiting validat. settlement instr.']);
        OperationStatus::create(['status' => '2130', 'description' => 'Awaiting payment']);
        OperationStatus::create(['status' => '2150', 'description' => 'Awaiting execution']);
        OperationStatus::create(['status' => '3000', 'description' => 'Being processed']);
        OperationStatus::create(['status' => '3010', 'description' => 'Posted off balance sheet']);
        OperationStatus::create(['status' => '3011', 'description' => 'Authorized awaiting renewal']);
        OperationStatus::create(['status' => '3012', 'description' => 'Authorized but sending suspended']);
        OperationStatus::create(['status' => '3101', 'description' => 'Off balance sheet canc., await. val']);
        OperationStatus::create(['status' => '3200', 'description' => 'Modified, waiting for validation']);
        OperationStatus::create(['status' => '3300', 'description' => 'Selected']);
        OperationStatus::create(['status' => '3500', 'description' => 'Suspended']);
        OperationStatus::create(['status' => '3502', 'description' => 'Suspended - tech. reason']);
        OperationStatus::create(['status' => '3510', 'description' => 'Interruption of IP maturity']);
        OperationStatus::create(['status' => '3601', 'description' => 'Suspended - authorisation process']);
        OperationStatus::create(['status' => '3602', 'description' => 'Suspended - validity']);
        OperationStatus::create(['status' => '3604', 'description' => 'Nat. clr. batch to subm. 1 pap. bch']);
        OperationStatus::create(['status' => '3605', 'description' => 'Cheque to be re-presented paper cl.']);
        OperationStatus::create(['status' => '3606', 'description' => 'Refused while waiting paper return']);
        OperationStatus::create(['status' => '3607', 'description' => 'Refused to return to beneficiary']);
        OperationStatus::create(['status' => '3608', 'description' => 'Susp. circular and bank chq.']);
        OperationStatus::create(['status' => '3609', 'description' => 'Unpaid not reconciled']);
        OperationStatus::create(['status' => '4000', 'description' => 'To fall due']);
        OperationStatus::create(['status' => '4006', 'description' => 'To fall due, blocked or pend.']);
        OperationStatus::create(['status' => '4015', 'description' => 'Modif in progress (contr. valid)']);
        OperationStatus::create(['status' => '4100', 'description' => 'Cancelled but not reversed']);
        OperationStatus::create(['status' => '4200', 'description' => 'To be forced']);
        OperationStatus::create(['status' => '5000', 'description' => 'Renewable. awaiting decision']);
        OperationStatus::create(['status' => '5100', 'description' => 'Due, awaiting payment prop.']);
        OperationStatus::create(['status' => '5200', 'description' => 'Being executed']);
        OperationStatus::create(['status' => '6000', 'description' => 'Due awaiting authorisation']);
        OperationStatus::create(['status' => '6005', 'description' => 'IN part aborted by the user']);
        OperationStatus::create(['status' => '6006', 'description' => 'IN part aborted (NT man. )']);
        OperationStatus::create(['status' => '6150', 'description' => 'Awaiting retroactive processing']);
        OperationStatus::create(['status' => '6502', 'description' => 'Error during the IN part']);
        OperationStatus::create(['status' => '6503', 'description' => 'Error in IN part (NT man. )']);
        OperationStatus::create(['status' => '6600', 'description' => 'Awaiting settlement']);
        OperationStatus::create(['status' => '6700', 'description' => 'Validated, not due, awaiting proc.']);
        OperationStatus::create(['status' => '7000', 'description' => 'Due, awaiting processing']);
        OperationStatus::create(['status' => '7601', 'description' => 'Authorisation suspension']);
        OperationStatus::create(['status' => '8000', 'description' => 'Due, being processed']);
        OperationStatus::create(['status' => '8001', 'description' => 'Compl. processed-Member(s) blocked']);
        OperationStatus::create(['status' => '8008', 'description' => 'TR- MT191 to be produced']);
        OperationStatus::create(['status' => '8050', 'description' => 'Settlement to be completed']);
        OperationStatus::create(['status' => '8105', 'description' => 'To settle cash (set securities)']);
        OperationStatus::create(['status' => '8107', 'description' => 'Settlement cash.waiting']);
        OperationStatus::create(['status' => '8800', 'description' => 'Transfer package prepared']);
        OperationStatus::create(['status' => '8801', 'description' => 'Transfer package prepared (sans NT)']);
        OperationStatus::create(['status' => '8900', 'description' => 'Processed but not marked off']);
        OperationStatus::create(['status' => '8950', 'description' => 'Processed, batch awaiting mark-off']);
        OperationStatus::create(['status' => '8995', 'description' => 'Suspended - Module does not exist']);
        OperationStatus::create(['status' => '9000', 'description' => 'Completely processed']);
        OperationStatus::create(['status' => '9001', 'description' => 'Discount closured']);
        OperationStatus::create(['status' => '9002', 'description' => 'Circular cheques repaid']);
        OperationStatus::create(['status' => '9003', 'description' => 'Transferred in the TE application']);
        OperationStatus::create(['status' => '9017', 'description' => 'Operation accepted']);
        OperationStatus::create(['status' => '9018', 'description' => 'Operation refused']);
        OperationStatus::create(['status' => '9100', 'description' => 'Reversal awaiting authorization']);
        OperationStatus::create(['status' => '9200', 'description' => 'Canc. after process., await. rever.']);
        OperationStatus::create(['status' => '9201', 'description' => 'Reversal in technical error']);
        OperationStatus::create(['status' => '9352', 'description' => 'Reversal sup.by auth. pr.']);
        OperationStatus::create(['status' => '9900', 'description' => 'Cancelled']);
        OperationStatus::create(['status' => '9901', 'description' => 'Cancelled before processing']);
        OperationStatus::create(['status' => '9902', 'description' => 'Cancelled before maturity process.']);
        OperationStatus::create(['status' => '9903', 'description' => 'Cancelled on maturity']);
        OperationStatus::create(['status' => '9904', 'description' => 'Cancelled after processing']);
        OperationStatus::create(['status' => '9905', 'description' => 'Authorisation refused']);
        OperationStatus::create(['status' => '9907', 'description' => 'Expired option']);
        OperationStatus::create(['status' => '9908', 'description' => 'Transfer refused or rejected']);
        OperationStatus::create(['status' => '9909', 'description' => 'Returned']);
        OperationStatus::create(['status' => '9910', 'description' => 'Cancelled - invalid']);
        OperationStatus::create(['status' => '9911', 'description' => 'Cancelled - renewal pay./rec. SI']);
        OperationStatus::create(['status' => '9917', 'description' => 'Cancelled and acknowledgements']);
        OperationStatus::create(['status' => '9918', 'description' => 'Cancelled and cancellation rejected']);
        OperationStatus::create(['status' => '9919', 'description' => 'Cancelled before the IN part']);
        OperationStatus::create(['status' => '9920', 'description' => 'Authorisation refused']);
        OperationStatus::create(['status' => '9990', 'description' => 'Transfer rollback: successful']);
        OperationStatus::create(['status' => '9991', 'description' => 'Transfer rollback: failed']);
        OperationStatus::create(['status' => '9992', 'description' => 'Trf rollback: successful (NT man.)']);
        OperationStatus::create(['status' => '9993', 'description' => 'Trf rollback: failed (NT man.)']);
        OperationStatus::create(['status' => 'K001', 'description' => 'On the market']);
        OperationStatus::create(['status' => 'K002', 'description' => 'Partially executed']);
        OperationStatus::create(['status' => 'K003', 'description' => 'Awaiting cancellation']);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operation_statuses');
    }
};
