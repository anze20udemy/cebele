<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('products', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name')->unique();
      $table->string('slug')->unique();

      $table->text('barva');
      $table->text('aroma');
      $table->text('okus');
      $table->text('kristalizacija');
      $table->text('castocenja');
      $table->longText('uporaba');
      $table->text('posebnosti');
      $table->integer('price');
      $table->boolean('featured')->default(false);
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
    Schema::dropIfExists('products');
  }
}
