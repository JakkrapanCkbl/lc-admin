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
        border-width: 0.01em 0 0.01em 0;
    }

    .table-stripe tbody tr:nth-of-type(odd) {
        background-color: #D6D6D6;
    }

    @media print {

        body {
            margin-top: -10mm;
        }

        .table-stripe tbody tr:nth-of-type(even) {
            background-color: cyan;
        }

        /* .table-stripe tbody tr:nth-of-type(even) {
            background-color: #D6D6D6;
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
                <!-- <div class="row"></div>
                    <div class="col-sm-2">
                        <img src="{{asset('assets/images/brand/logo-3.png')}}" style="height:100px;">
                    </div>
                    <div class="col-sm-10">
                        <h1 class="page-title text-center align-bottom mt-7"><b>Order For Service</b></h1>
                    </div>
                    <div class="row" style="margin-bottom:-40px;">
                        <div class="col-sm-7 ps-4">
                            <p class="ps-10" style="padding-top:64px; padding-left:50px;">วันที่ออกใบสั่งงาน: 10 มค.65</p>
                        </div>
                        <div class="col">
                            <img src="{{asset('assets/images/users/obama.jpg')}}" style="height:60px; float:left; padding-right:10px;">
                            <p class="text-start" style="padding-left:62px;">
                                <b style="font-size:24px;">วันที่นัดสำรวจ: 10 มค. 65</b><br>
                                ระยะเวลาทำงาน: 3 วัน<br>
                                กำหนดครั้งทำงาน LC: 10 มค. 65
                            </p>
                        </div>
                    </div>
                </div> -->
                <h1 class="page-title text-center" style="text-align:bottom; background-color:red;"><b>Order For Service</b></h1>

                <div class="row">
                    <div class="col-sm-5">
                        <img src="{{asset('assets/images/brand/logo-3.png')}}" style="height:100px; padding-left:10px;">
                        <p style="padding-left:22px;">วันที่ออกใบสั่งงาน: 10 มค.65</p>
                    </div>
                    <div class="col-sm-7" style="padding-top:60px; padding-right:36px;">
                        <img src="{{asset('assets/images/users/obama.jpg')}}" style="height:60px; padding-right:10px;">
                        <p class="text-end" style="padding-left:62px;">
                            <b style="font-size:24px;">วันที่นัดสำรวจ: 10 มค. 65</b><br>
                            กำหนดส่งงาน LC : <label style="padding-left:24px;">13 มค. 65</label><br>
                            ระยะเวลาทำงาน: 3 วัน
                        </p>
                    </div>
                </div>
            </div>
            <div class="table-responsive push mt-5 px-7">
                <table class="table table-stripe text-nowrap">
                    <tbody style="margin-left:100px;">
                        <tr>
                            <td width="25%" style="background-color: red;">รายงานเลขที่</td>
                            <td width="3%" style="background-color: blue;">:</td>
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
                            <td class="ps-6"> - ชื่อ</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="ps-6"> - ที่อยู่</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="ps-6"> - เรียน</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="ps-6"> - ตำแหน่ง</td>
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
                        <tr>
                            <td>9. Timing</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="ps-6"> - ระยะเวลาทำงาน</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="ps-6"> - วันที่ส่งงานลูกค้า</td>
                            <td>:</td>
                            <td></td>
                        </tr>


                        <!-- <tr class="tableheader">
                            <th>#</th>
                            <th>Description</th>
                            <th class="amount-row">Amount<br>(Baht)</th>
                        </tr>

                        <tr>
                            <td class="text-center align-top"></td>
                            <td>
                                <p class="font-w600">ค่าบริการประเมินมูลค่าทรัพย์สิน LC/BF-1328 HLHO63900629</p>
                            </td>
                            <td class="text-end">2,000.00</td>
                        </tr> -->
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