<?php

namespace App\Http\Controllers;

class CEORevenueController extends Controller
{
    public function revenue()
    {
        return view('Revenue.CeoRevenue.revenue');
    }

    public function revenueModel()
    {
        return view('Revenue.CeoRevenue.RevenueModel');
    }

    public function sales()
    {
        return view('Revenue.CeoRevenue.sales');
    }

    public function cat()
    {
        return view('Revenue.CeoRevenue.cat');
    }

    public function nonCat()
    {
        return view('Revenue.CeoRevenue.nonCat');
    }

    public function studyAbroad()
    {
        return view('Revenue.CeoRevenue.studyAbroad');
    }

    public function underGrad()
    {
        return view('Revenue.CeoRevenue.underGrad');
    }

    public function GDPI()
    {
        return view('Revenue.CeoRevenue.GDPI');
    }

    public function mocks()
    {
        return view('Revenue.CeoRevenue.mocks');
    }
}
