<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PurchaseOrderDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('purchase_order_details', function($table)
		{
			$table->increments('id');
			// $table->integer('po_id')->default(0);
			// $table->integer('sku');
			$table->string('sku', 30); //revert this to bigInteger()
			$table->integer('receiver_no')->unique();
			$table->integer('brand')->default(0);
			$table->integer('division')->default(0);
			$table->integer('quantity_ordered')->default(0);
			$table->float('unit_price')->default(0);
			$table->integer('quantity_delivered');
			$table->timestamp('expiry_date')->default('0000-00-00 00:00:00');
			$table->integer('assigned_by');
			$table->string('assigned_to_user_id', 30)->default(0);
			$table->tinyInteger('po_status')->default(1);
			// $table->softDeletes();
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default('0000-00-00 00:00:00');
			$table->timestamp('deleted_at')->default('0000-00-00 00:00:00');
			$table->unique(array('sku', 'receiver_no'));
			$table->engine = 'InnoDB';
		});


		Schema::table('purchase_order_details', function($table)
		{
		    if ((Schema::hasColumn('purchase_order_details', 'receiver_no')) && (Schema::hasColumn('purchase_order_details', 'sku')))
			{
			    $table->index(array('receiver_no', 'sku'));
			}

		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('purchase_order_details');
	}

}
