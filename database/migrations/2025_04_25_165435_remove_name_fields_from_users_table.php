<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveNameFieldsFromUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // حذف الأعمدة
            $table->dropColumn(['firstname', 'secondname']);
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // إعادة الأعمدة في حالة العودة
            $table->string('firstname');
            $table->string('secondname');
        });
    }
}
