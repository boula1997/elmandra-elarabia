<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CouponResource;
use App\Models\Coupon;
use Exception;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    private $coupon;
    public function __construct(Coupon $coupon)
    {
        $this->coupon = $coupon;
    }

    public function index()
    {
        try {
            $data['coupons'] = CouponResource::collection($this->coupon->get());
            return successResponse($data);
        } catch (Exception $e) {
            dd($e->getMessage());
            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['coupon'] = new CouponResource($this->coupon->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {
            dd($e->getMessage());
            return failedResponse($e->getMessage());
        }
    }
}
