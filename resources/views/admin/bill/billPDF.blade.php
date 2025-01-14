<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">


    <title>Hóa đơn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        * {
            font-family: 'DejaVu Sans';
        }

        body {
            margin-top: 20px;
            padding: 30px;
            background: #87CEFA;
        }

        .card-footer-btn {
            display: flex;
            align-items: center;
            border-top-left-radius: 0 !important;
            border-top-right-radius: 0 !important;
        }

        .text-uppercase-bold-sm {
            text-transform: uppercase !important;
            font-weight: 500 !important;
            letter-spacing: 2px !important;
            font-size: .85rem !important;
        }

        .hover-lift-light {
            transition: box-shadow .25s ease, transform .25s ease, color .25s ease, background-color .15s ease-in;
        }

        .justify-content-center {
            justify-content: center !important;
        }

        .btn-group-lg>.btn,
        .btn-lg {
            padding: 0.8rem 1.85rem;
            font-size: 1.1rem;
            border-radius: 0.3rem;
        }

        .btn-dark {
            color: #fff;
            background-color: #1e2e50;
            border-color: #1e2e50;
        }

        .card {
            position: relative;
            display: flex;
            align-items: center;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(30, 46, 80, .09);
            border-radius: 0.25rem;
            box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
        }

        .p-5 {
            padding: 3rem !important;
        }

        .card-body {
            flex: 1 1 auto;
            padding: 1.5rem 1.5rem;
        }

        tbody,
        td,
        tfoot,
        th,
        thead,
        tr {
            border-color: inherit;
            border-style: solid;
            border-width: 0;
        }

        .table td,
        .table th {
            border-bottom: 0;
            border-top: 1px solid #edf2f9;
        }

        .table>:not(caption)>*>* {
            padding: 1rem 1rem;
            background-color: var(--bs-table-bg);
            border-bottom-width: 1px;
            box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
        }

        .px-0 {
            padding-right: 0 !important;
            padding-left: 0 !important;
        }

        .table thead th,
        tbody td,
        tbody th {
            vertical-align: middle;
        }

        tbody,
        td,
        tfoot,
        th,
        thead,
        tr {
            border-color: inherit;
            border-style: solid;
            border-width: 0;
        }

        .mt-5 {
            margin-top: 3rem !important;
        }

        .icon-circle[class*=text-] [fill]:not([fill=none]),
        .icon-circle[class*=text-] svg:not([fill=none]),
        .svg-icon[class*=text-] [fill]:not([fill=none]),
        .svg-icon[class*=text-] svg:not([fill=none]) {
            fill: currentColor !important;
        }

        .svg-icon>svg {
            width: 1.45rem;
            height: 1.45rem;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-7">
                <div class="card">
                    <div class="card-body p-5">
                        <h2>
                            <strong>
                                <img src="{{ public_path('storage/img/logo.png') }}" alt="">

                            </strong>
                        </h2>
                        <p class="fs-sm">
                            Chúng tôi xin chân thành cảm ơn anh/chị đã chọn mua sắm tại cửa hàng của chúng tôi.
                        </p>
                        <div class="border-top border-gray-200 pt-4">

                            <div>
                                <div class="text-muted mb-2">Thông tin</div>
                                <strong>
                                    {{ $bill->user->fullname }}
                                </strong>
                                <span class="d-block">
                                    #{{ $bill->id }}
                                    <br>
                                </span class="d-block">
                                <span>
                                    {{ $bill->user->phone }}
                                    <br>
                                </span class="d-block">
                                <span>
                                    {{ $bill->user->address }}
                                    <br>
                                </span>
                                <span class="d-block">
                                    @if ($bill->paymentMethod == 1)
                                        Payment via vnpay
                                    @elseif($bill->paymentMethod == 0)
                                        Payment on delivery
                                    @endif
                                    <br>
                                </span>
                            </div>
                        </div>

                        <table class="table border-bottom border-gray-200 mt-3">
                            <thead>
                                <tr>
                                    <th>
                                        <div>
                                            Tên sản phẩm
                                        </div>
                                    </th>
                                    <th>
                                        <div>
                                            Giá
                                        </div>
                                    </th>
                                    <th>
                                        <div>
                                            Số lượng
                                        </div>
                                    </th>
                                    <th>
                                        <div>
                                            Thành tiền
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($carts as $cart)
                                    <tr>
                                        <td>{{ $cart->product->name }}
                                            <p>
                                                Kích thước : {{ $cart->size }}
                                            </p>
                                        </td>
                                        {{-- <td><img src="{{ asset('storage/images/products/'.$cart->product->srcImage) }}" alt="" width="80"></td> --}}

                                        <td>

                                            <span> <strike>{{ number_format($cart->product->price, 0, ',', '.') }}₫</strike></span>
                                            <span>{{ number_format($cart->product->priceSale, 0, ',', '.') }}₫</span>

                                        </td>
                                        <td>{{ $cart->qty }}</td>
                                        <td>{{ number_format($cart->total, 0, ',', '.') }} ₫</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-5">

                            <div class="d-flex justify-content-end">
                                <div class="text-muted me-3">Giảm giá:</div>
                                <span>- {{ number_format($totalBill - $bill->total, 0, ',', '.') }} ₫</span>
                            </div>
                            <div class="d-flex justify-content-end mt-3">
                                <div class="me-3">Tổng thanh toán:</div>
                                <div class="text-success">{{ number_format($bill->total, 0, ',', '.') }} ₫</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>
</body>

</html>
