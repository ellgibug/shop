<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname', 50)->after('name')->nullable();
            $table->string('patronymic', 50)->after('surname')->nullable();
            $table->date('birthday')->nullable();
            $table->enum('sex', ['m', 'f'])->nullable();
            $table->string('city', 50)->nullable();
            $table->text('address')->nullable();
            $table->string('mobile_phone', 50)->nullable();
            $table->string('optional_phone', 50)->nullable();
            $table->string('home_phone', 50)->nullable();
            $table->boolean('rules')->default(1)->nullable();
            $table->boolean('dispatch')->default(1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'surname', 'patronymic', 'birthday', 'sex', 'city', 'address', 'mobile_phone', 'optional_phone', 'home_phone', 'rules', 'dispatch'
            ]);
        });
    }
}
