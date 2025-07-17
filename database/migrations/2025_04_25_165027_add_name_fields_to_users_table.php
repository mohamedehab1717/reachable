<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNameFieldsToUsersTable extends Migration
{
    public function up()
    {
        // لو الأعمدة موجودة، مانعملش حاجة
        // (نقدر نسيبها فاضية لو حصل إضافتهم بالفعل)
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['firstname', 'secondname']);
        });
    }
}
