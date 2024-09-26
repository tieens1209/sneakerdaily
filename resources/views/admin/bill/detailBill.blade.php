@extends('layouts.appAdmin')
@section('title')
    Chi tiết đơn hàng {{ $bill->id }}
@endsection
@section('content')
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4 mt-5">Chi tiết đơn hàng {{ $bill->id }}</h5>
                        <a href="{{ route('invoice', $bill->id) }}"><button type="submit" class="btn btn-success m-1">In hóa
                                đơn</button></a>
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0 align-middle">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Người đặt hàng</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Địa chỉ</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Số điện thoại</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Pay</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Payment method</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Trạng thái</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Hoạt động</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">{{ $bill->user->fullname }}</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">{{ $bill->user->address }}</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">{{ $bill->user->phone }}</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">
                                                @if ($bill->pay == 1)
                                                    Paid (<span class="format-currency">{{ $bill->total }}đ</span>)
                                                @else
                                                    Unpaid
                                                @endif
                                            </p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">
                                                @if ($bill->paymentMethod == 1)
                                                    Payment via vnpay
                                                @elseif($bill->paymentMethod == 0)
                                                    Payment on delivery
                                                @endif
                                            </p>
                                        </td>
                                        <form action="{{ route('bill.update', $bill->id) }}" method="post">
                                            @csrf
                                            @method('POST')
                                            <td class="border-bottom-0">
                                                <select name="status" id="" class="form-select">
                                                    <option value="1">Đơn hàng mới</option>
                                                    <option value="2">Đơn hàng đang được đóng gói</option>
                                                    <option value="3">Đơn hàng đang được vận chuyển</option>
                                                    <option value="4">Đơn hàng đã được giao</option>
                                                    <option value="5">Giao hàng thất bại</option>
                                                    <option value="6">Đơn hàng đã bị hủy</option>
                                                </select>
                                            </td>
                                            <td class="border-bottom-0" style="display: flex;">
                                                <button type="submit" class="btn btn-info m-1">Cập nhật</button>
                                        </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0 align-middle">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">STT</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Tên sản phẩm</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Hình ảnh</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Giá</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Số lượng</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Size</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Tổng tiền</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $stt = 1;
                                    @endphp
                                    @foreach ($carts as $cart)
                                        <tr>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">{{ $stt }}</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal">{{ $cart->product->name }}</p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <img src="{{ asset('storage/images/products/' . $cart->product->srcImage) }}"
                                                    alt="" width="80" height="105">
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal"><span class="format-currency">{{ $cart->product->priceSale }}đ</span> <del
                                                        style="font-size: 12px"><span class="format-currency">{{ $cart->product->price }}đ</span></del></p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal">{{ $cart->qty }}</p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal">{{ $cart->size }}</p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal format-currency">{{ $cart->total }}đ</p>
                                            </td>
                                        </tr>
                                        @php
                                            $stt++;
                                        @endphp
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="6">Discounted</td>
                                        <td class="format-currency">{{ $totalBill - $bill->total }}đ</td>
                                    </tr>
                                    <tr>
                                        <th colspan="6">Tổng tiền thanh toán</th>
                                        <th class="format-currency">{{ $bill->total }}đ</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
