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
    th,
    td {
        border: solid #98999A;
        border-width: 0.007em;
    }

    .tableheader th {
        font-size: 20px;
        font-weight: bold;
        /* vertical-align: middle; */
    }

    .no-border td {
        border: solid #FFF;
    }

    /* First paragraph */

    .table-stripe tbody tr:nth-of-type(odd) {
        background-color: aliceblue;
    }


    .blank-line-s {
        display: inline-block;
        border-bottom: 1px solid #98999A;
        width: 164px;
        margin-bottom: -4px;
        /* margin-left: 4px; */
    }

    @media print {

        body {
            margin-top: -10mm;
            padding-left: 10mm; /*~38px*/
        }

        .table .table-stripe tbody tr:nth-of-type(even) {
            background-color: cyan !important;
        }

        /* set div to stay at the bottom of page */
        .divFooter {
            position: fixed;
            bottom: 0px;
            left: 0px;
            width: 100%;
            padding-left: 60px;
            padding-right: 12px;
        }

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
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <h1 class="page-title text-center" style="text-align:bottom;">ใบเบิกค่าใช้จ่าย (Housing Loan Site)</h1>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <div class="row px-5 pb-2">
                    <div class="col-sm-6">
                        <img src="{{asset('assets/images/brand/logo-3.png')}}" style="height:100px;">
                    </div>
                    <div class="col-sm-6 mt-2">
                        <img src="{{asset('assets/images/users/obama.jpg')}}" style="max-height:100px; max-width:100px; padding:0 0 10px 10px; float:right;">
                        <p class="text-end" style="padding:20px 0 16px 62px ;">
                            วันที่เบิก : 10 ม.ค. 65<br>
                            ชื่อผู้เบิก : นายธนกฤต อนันต์ประกฤติ<br>
                        </p>
                    </div>
                </div>

                <div class="table-responsive push px-5 mt-1">
                    <table class="table table-stripe text-nowrap">
                        <tbody style="margin-left:100px;">
                            <tr class="tableheader">
                                <th width="20%">ลำดับ</th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                            </tr>
                            <tr>
                                <td>รายงานเลขที่</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>ชื่อลูกค้า</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>ประเภททรัพย์สิน</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>ที่ตั้ง</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>วันที่สำรวจ</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>โซน</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1. ค่าเดินทาง</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2. ค่าโฉนดที่ดิน</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>3. ระวาง</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>4. ถ่ายเอกสาร</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>5. อื่น ๆ</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="tableheader">
                                <th>รวมทั้งสิ้น</th>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="tableheader">
                                <td>หัก-เงินเบิกล่วงหน้า</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="tableheader">
                                <th>คงเหลือ</th>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="row pt-5 divFooter">
                    <div class="col-sm-12">
                        <div class="table-responsive push">
                            <table class="table table-hover mb-0 text-nowrap border-bottom">
                                <tbody>
                                    <tr class="text-end no-border">
                                        <td width="12%">
                                            <label>ผู้รับเงิน :</label>
                                        </td>
                                        <td width="20%">
                                            <span class="blank-line-s" style="margin-left:-2px;"></span>
                                        </td>
                                        <td>
                                            <label>หัวหน้างานอนุมัติ :</label>
                                        </td>
                                        <td>
                                            <span class="blank-line-s" style="margin-left:-2px;"></span>
                                        </td>
                                        <td>
                                            <label>ผู้จ่ายเงิน :</label>
                                        </td>
                                        <td>
                                            <span class="blank-line-s" style="margin-left:-2px;"></span>
                                        </td>
                                    </tr>
                                    <tr class="text-end no-border">
                                        <td>
                                            <label>วันที่ :</label>
                                        </td>
                                        <td>
                                            <span class="blank-line-s"></span>
                                        </td>
                                        <td>
                                            <label>วันที่ :</label>
                                        </td>
                                        <td>
                                            <span class="blank-line-s"></span>
                                        </td>
                                        <td>
                                            <label>วันที่ :</label>
                                        </td>
                                        <td>
                                            <span class="blank-line-s"></span>
                                        </td>
                                    </tr>
                                    <!-- <tr class="text-center borderless" style="border-top: solid #FFF;">
                                        <td>
                                            <label style="margin-left:-16px;">วันที่ :</label>
                                            <span class="blank-line-s" style="margin-left:-2px;"></span>
                                        </td>
                                        <td>
                                            <label style="margin-left:-16px;">วันที่ :</label>
                                            <span class="blank-line-s" style="margin-left:-2px;"></span>
                                        </td>
                                        <td>
                                            <label style="margin-left:-16px;">วันที่ :</label>
                                            <span class="blank-line-s" style="margin-left:-2px;"></span>
                                        </td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

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