<?php

use App\Models\Setting;
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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });
        
        Setting::create([
            'key' => '_site_logo',
            'label' => 'Site Logo',
            'value' => '',
            'type' => 'image',
        ]);
        Setting::create([
            'key' => '_site_name',
            'label' => 'Site Name',
            'value' => 'Bale Coffee',
            'type' => 'text',
        ]);
        Setting::create([
            'key' => '_location',
            'label' => 'Address',
            'value' => 'Tangerang Selatan, Jakarta Barat, Bogor',
            'type' => 'text',
        ]);
        Setting::create([
            'key' => '_instagram',
            'label' => 'Instagram',
            'value' => 'https://www.instagram.com/balecoffee.karo?igshid=OGQ5ZDc2ODk2ZA%3D%3D',
            'type' => 'text',
        ]);
        Setting::create([
            'key' => '_whatsapp',
            'label' => 'Whatsapp',
            'value' => 'https://wa.me/+6281293577868',
            'type' => 'text',
        ]);
        Setting::create([
            'key' => '_site_description',
            'label' => 'Site Description',
            'value' => 'Eksklusivitas Rasa: Mengejar Rasa yang Tidak Terlupakan',
            'type' => 'longtext',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
