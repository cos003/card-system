<?php
use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class AddInventoryToProducts extends Migration { public function up() { if (!Schema::hasColumn('products', 'inventory')) { Schema::table('products', function (Blueprint $sp07e895) { $sp07e895->tinyInteger('inventory')->default(\App\User::INVENTORY_AUTO)->after('enabled'); $sp07e895->tinyInteger('fee_type')->default(\App\User::FEE_TYPE_AUTO)->after('inventory'); }); } } public function down() { foreach (array('inventory', 'fee_type') as $sp5c881f) { try { Schema::table('products', function (Blueprint $sp07e895) use($sp5c881f) { $sp07e895->dropColumn($sp5c881f); }); } catch (\Throwable $spcdd557) { } } } }