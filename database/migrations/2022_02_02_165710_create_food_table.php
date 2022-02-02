<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->string('product_name', 150);
            $table->string('brand', 100);
            $table->double(7, 2);
            $table->string('cover', 255)->default('https://i1.wp.com/potafiori.com/wp-content/uploads/2020/04/placeholder.png?ssl=1');
            $table->text('imgs')->nullable(true);
            $table->text('allergens')->default('No allergens');
            $table->text('ingredients');
            $table->text('nutrictionals');
            $table->string('conservation', 20);
            $table->smallInteger('stock');
            $table->smallInteger('quantity');
            $table->tinyInteger('discount')->default(0);
            $table->date('discount_end_date');
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
        Schema::dropIfExists('food');
    }
}
