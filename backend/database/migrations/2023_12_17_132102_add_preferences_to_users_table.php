<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class AddPreferencesToUsersTable extends Migration
    {
        public function up()
        {
            Schema::table('users', function (Blueprint $table) {
                $table->json('preferred_sources')->nullable();
                $table->json('preferred_categories')->nullable();
                $table->json('preferred_authors')->nullable();
            });
        }

        public function down()
        {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn(['preferred_sources', 'preferred_categories', 'preferred_authors']);
            });
        }
    }
