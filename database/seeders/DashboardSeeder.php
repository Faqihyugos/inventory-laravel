<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Product;
use App\Models\Stock;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\Order;

class DashboardSeeder extends Seeder
{
    public function run(): void
    {
        // Users
        $admin = User::updateOrCreate(
            ['email' => 'admin@dev.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('password'),
            ]
        );

        // Categories
        $category = Category::create([
            'name' => 'Elektronik',
            'slug' => 'elektronik',
            'image' => 'default.png',
        ]);

        // Suppliers
        $supplier = Supplier::create([
            'name' => 'PT Sumber Makmur',
            'address' => 'Jl. Raya No. 1',
            'telp' => '08123456789',
        ]);

        // Products
        $product = Product::create([
            'name' => 'Laptop',
            'slug' => 'laptop',
            'category_id' => $category->id,
            'supplier_id' => $supplier->id,
            'description' => 'Laptop berkualitas tinggi untuk kebutuhan kerja dan hiburan.',
            'image' => 'default.png',
            'unit' => 'pcs',
        ]);

        // Stock
        Stock::create([
            'product_id' => $product->id,
            'type' => 'in',
            'quantity' => 10,
        ]);

        // Transaction
        $transaction = Transaction::create([
            'user_id' => $admin->id,
            'invoice' => 'INV-001',
        ]);
        TransactionDetail::create([
            'transaction_id' => $transaction->id,
            'product_id' => $product->id,
            'quantity' => 1,
        ]);

        // Order
        Order::create([
            'user_id' => $admin->id,
            'product_id' => $product->id,
            'quantity' => 2,
            'status' => 'Menunggu Konfirmasi',
        ]);
    }
}
