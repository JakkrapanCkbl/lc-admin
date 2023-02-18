@extends('layouts.app')

@section('styles')

<style>
    .page-title {
        font-size: 34px;
    }

    h2 {
        font-size: 29px;
    }

    td,
    p,
    label {
        font-size: 19px;
    }

    .fw-bold {
        font-size: 18px;
    }

    hr {
        display: block;
        height: 1px;
        background: transparent;
        width: 100%;
        border: none;
        border-top: solid 1px #333;
    }

    .tableheader th {
        font-size: 20px;
        vertical-align: middle;
        text-align: center;
    }

    .icon {
        vertical-align: baseline;
    }


    .amount-row {
        width: 22px;
    }

    tr,
    th {
        border: solid #98999A;
        border-width: 0.007em 0 0.007em 0;
    }

    /* First paragraph */

    .table-stripe tbody tr:nth-of-type(odd) {
        background-color: aliceblue;
    }

    @media print {

        body {
            margin-top: -10mm;
        }

        .table .table-stripe tbody tr:nth-of-type(even) {
            background-color: cyan !important;
        }

        /* .table-stripe tbody tr:nth-of-type(even) {
            background-color: black;
        } */

        .print-invoice,
        #back-to-top {
            display: none !important;
        }

    }
</style>
@endsection
@section('content')
<!-- ROW-1 OPEN -->
<div class="row first-row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-4">
                        <h1 class="page-title text-center" style="text-align:bottom;"><b>Order For Service</b></h1>
                    </div>
                    <div class="col-sm-4">
                    </div>
                </div>
                <div class="row px-5">
                    <div class="col-sm-6">
                        <img src="{{asset('assets/images/brand/logo-3.png')}}" style="height:100px;">
                        <p style="position: absolute; bottom:0;">วันที่ออกใบสั่งงาน : 10 มค. 65</p>
                    </div>
                    <div class="col-sm-6 mt-7">
                            <img src="{{asset('assets/images/users/obama.jpg')}}" style="max-height:100px; max-width:100px; padding:0 0 10px 10px; float:right;">
                            <p class="text-end" style="padding-left:62px;">
                                <b style="font-size:22px;">วันที่นัดสำรวจ : 10 มค. 65 10:00</b><br>
                                กำหนดส่งงาน LC : <span style="padding-left:26px;">13 มค. 65</span><br>
                                ระยะเวลาทำงาน : <span style="padding-left:70px;">3 วัน</span>
                            </p>
                    </div>
                </div>

            </div>
            <div class="table-responsive push px-5 mt-1">
                <table class="table table-stripe text-nowrap">
                    <tbody style="margin-left:100px;">
                        <tr>
                            <td width="25%">รายงานเลขที่</td>
                            <td width="3%">:</td>
                            <td>LC-R-20/09/104</td>
                        </tr>
                        <tr>
                            <td>จัดทำรายงาน</td>
                            <td>:</td>
                            <td>นายธนกฤต อนันต์ประกฤติ</td>
                        </tr>
                        <tr>
                            <td>วัตถุประสงค์</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>1. ประเภททรัพย์สิน</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2. ที่ตั้ง</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>3. เอกสารที่ได้รับจากลูกค้า</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="3">4. รายละเอียดในรายงาน</td>
                        </tr>
                        <tr>
                            <td class="ps-8"> - ชื่อ</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="ps-8"> - ที่อยู่</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="ps-8"> - เรียน</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="ps-8"> - ตำแหน่ง</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="3">5. ชื่อลูกค้า/ผู้ติดต่อ</td>
                        </tr>
                        <tr>
                            <td class="ps-8"> - บริษัท</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="ps-8"> - ชื่อ</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="ps-8"> - ตำแหน่ง</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="ps-8"> - Tel.</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>6. หมายเหตุ</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>7. ค่าประเมิน</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>8. เงื่อนไขการชำระเงิน</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div><!-- COL-END -->
</div>
<!-- ROW-1 CLOSED -->
<div class="float-end print-invoice">
    <button type="button" class="btn btn-info mb-1" onclick="javascript:window.print();"><i class="si si-printer"></i> Print Invoice</button>
</div>

@endsection

@section('scripts')

@endsection