<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\StockMoving;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            $products = Products::query()
                ->where('code', 'LIKE', "%$search%")
                ->orWhere('name', 'LIKE', "%$search%")
                ->get();
        } else {
            $products = Products::all();
        }

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $product = Products::create($request->all());
            $product->addMedia($request->file('picture'))->toMediaCollection('product-img');

            $stockMoving = [
                'product_id' => $product->id,
                'description' => 'Stok Awal',
                'moving_stock' => $product->stock,
                'moving_price' => $product->price,
            ];
            StockMoving::create($stockMoving);

            DB::commit();
            return redirect()->route('products.index')->with('success', 'Product created successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to create product: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $product)
    {
        $stockLog = StockMoving::query()
            ->where('product_id', $product->id)
            ->get();
        return view('products.detail', compact('product', 'stockLog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $product)
    {
        DB::beginTransaction();
        try {

            $product->stock += $request->input('stock');
            $product = Products::update($request->all());
            if ($request->hasFile('picture')) {
                $product->addMedia($request->file('picture'))->toMediaCollection('product-img');
            }
            $stockMoving = [
                'product_id' => $product->id,
                'description' => 'Stok Ditambahkan',
                'moving_stock' => $request->stock,
                'moving_price' => $request->price,
            ];
            StockMoving::create($stockMoving);

            DB::commit();
            return redirect()->route('products.index')->with('success', 'Product updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to update product: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $product)
    {
        if ($product->picture) {
            Storage::delete($product->picture);
        }
        $product->delete();
        return redirect()->route('products.index');
    }
}
