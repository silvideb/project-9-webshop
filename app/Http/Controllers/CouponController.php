<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    // Toont een overzicht van alle kortingsbonnen (optioneel)
    public function index()
    {
        $coupons = Coupon::all();
        return view('coupons.index', compact('coupons'));
    }

    // Toont het formulier om een nieuwe kortingsbon aan te maken
    public function create()
    {
        return view('coupons.create');
    }

    // Verwerkt het formulier en slaat de kortingsbon op
    public function store(Request $request)
    {
        $request->validate([
            'code'           => 'required|unique:coupons,code',
            'discount_type'  => 'required|in:percentage,fixed',
            'discount_value' => 'required|numeric|min:0',
            'start_date'     => 'nullable|date',
            'end_date'       => 'nullable|date|after_or_equal:start_date',
            'usage_limit'    => 'nullable|integer|min:1',
        ]);

        Coupon::create($request->all());

        return redirect()->route('coupons.index')
                         ->with('success', 'Kortingsbon succesvol aangemaakt!');
    }
    public function edit(Coupon $coupon)
    {
        return view('coupons.edit', compact('coupon'));
    }
    public function update(Request $request, Coupon $coupon)
    {
        $request->validate([
            'code'           => 'required|unique:coupons,code,'.$coupon->id,
            'discount_type'  => 'required|in:percentage,fixed',
            'discount_value' => 'required|numeric|min:0',
            'start_date'     => 'nullable|date',
            'end_date'       => 'nullable|date|after_or_equal:start_date',
            'usage_limit'    => 'nullable|integer|min:1',
        ]);

        $coupon->update($request->all());

        return redirect()->route('coupons.index')
                         ->with('success', 'Kortingsbon succesvol bijgewerkt!');
    }
    public function destroy(Coupon $coupon)
    {
        $coupon->delete();

        return redirect()->route('coupons.index')
                         ->with('success', 'Kortingsbon succesvol verwijderd!');
    }
}
