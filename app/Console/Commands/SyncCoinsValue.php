<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Http\Controllers\PriceController;
use App\Events\UpdatedProducts;

class SyncCoinsValue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:sync-coins-value';
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle() {
        
        $prices = (new PriceController())->prices();
        $goldprice = Str::substr($prices[0]['venta'],1) ?? null;
        $silverprice = Str::substr($prices[1]['venta'],1) ?? null;

        $goldprice = floatval(Str::replace(",", "", $goldprice));
       
        if (Str::contains($silverprice, ',')) {
            $silverprice = floatval(Str::replace(",", "", $silverprice));
        } else {
            $silverprice = floatval($silverprice);
        }

        $this->info("Current Gold Price: $goldprice");
        $this->info("Current Silver Price: $silverprice");

        $products_gold = Product::where('coin_base_type','gold')->get();
        $products_silver = Product::where('coin_base_type','silver')->get();

        foreach ($products_gold as $product) {
            if ($product->coin_base != $goldprice) {
                $product->coin_base = $goldprice;
                $product->price = $goldprice * $product->multiplier;
                $product->save();
            }
        }

        foreach ($products_silver as $product) {
            if ($product->coin_base != $silverprice) {
                $product->coin_base = $silverprice;
                $product->price = $silverprice * $product->multiplier;
                $product->save();
            }
        }

        $this->info('Coin values synchronized successfully.');

        event(new UpdatedProducts('HELLO'));
        
        return Command::SUCCESS;
    }
}
