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
	td,
	th {
		border: solid #48494B;
		border-width: 0.01em 0 0.01em 0;
	}

	.borderless {
		border: solid #FFF;
	}


	@media print {
		body {
			margin-top: -10mm;
		}

		/* set div to stay at the bottom of page */
		.divFooter {
			position: fixed;
			bottom: 0px;
			left: 0px;
			width: 100%;
			padding-left: 26px;
			padding-right: 4px;
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
					<div class="col-sm-7">
						<div style="padding-top:32px;"></div>
						<img src="{{asset('assets/images/brand/logo-3.png')}}" style="height:100px;">
						<address>
							<p>
								<b style="font-size:21px;">บริษัท แลนด์มาร์ค คอลซัลแทนส์ จำกัด </b> <br>
								370/6 อาคารแฟร์ ทาวน์เวอร์ ชั้น 2 ซอยสุขุมวิท 50 ถนนสุขุมวิท<br>
								แขวงพระโขนง เขตคลองเตย กรุงเทพมหานคร 10260 <br>
								เลขประจำตัวผู้เสียภาษี 0105547070351 (สำนักงานใหญ่)
							</p>
						</address>
						<address>
							<p class="pt-4 pb-4">
								<b style="font-size:21px;">ลูกค้า</b> <br>
								นายธนกฤต อนันต์ประกฤติ<br>
								469 ซอยสำโรงเหนือ ตำบลสำโรงเหนือ อำเภอเมืองสมุทรปราการ จ.สมุทรปราการ
							</p>
						</address>
					</div>
					<div class="col-sm-5">
						<div class="clearfix">
							<div class="float-end ps-5" style="width: 440px;">
								<h1 class="page-title text-center mt-5"><b>ใบแจ้งหนี้/ใบวางบิล</b></h1>
								<h2 class="text-center"><b>ตันฉบับ</b></h2>
								<hr>
								<div class="text-start">
									<p style="line-height:29px !important;">Invoice No. : <b>LC-R-20/09/104</b><br>
										Date: 21-10-2021<br>
										<i class="icon icon-globe pe-2"></i><label>www.landmarkcon.net</label><br>
										<i class="icon icon-phone pe-2" style="margin-top:-10px"></i><label>0-2331-4580-2</label><br>

									</p>
									<div style="padding-top:25px;">
										<img height="98px" src="https://qrcg-free-editor.qr-code-generator.com/main/assets/images/websiteQRCode_noFrame.png" style="float: left; margin-left: -8px;" />
										<p class="pt-2">
											บริษัท แลนด์มาร์ค คอลซัลแทนส์ จำกัด<br>
											ธนาคารกสิกรไทย กระแสรายวัน<br>
											เลขที่ 044-2926-727 สาขาบิ๊กซี อ่อนนุช
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="table-responsive push mt-5">
					<table class="table table-hover mb-0 text-nowrap">
						<tbody>
							<tr class="tableheader">
								<th>#</th>
								<th>Description</th>
								<th class="amount-row">Amount<br>(Baht)</th>
							</tr>

							<!-- max 7 rows -->
							@for ($i=0; $i < 7; $i++) <tr>
								<td class="text-center align-top">{{$i}}</td>
								<td>
									<p class="font-w600">ค่าบริการประเมินมูลค่าทรัพย์สิน LC/BF-1328 HLHO63900629</p>
								</td>
								<td class="text-end">2,000.00</td>
								</tr>
								@endfor
						</tbody>
					</table>
				</div>

				<div class="row pt-1">
					<div class="col-sm-12">
						<div class="table-responsive push">
							<table class="table table-borderless table-hover mb-0 text-nowrap border-bottom">
								<tbody>
									<tr class="borderless">
										<td colspan="5" class="fw-bold text-end" width="90%">Subtotal</td>
										<td class="fw-bold text-end" width="10%">11,160.00</td>
									</tr>
									<tr class="borderless">
										<td colspan="5" class="fw-bold text-end">VAT 7%</td>
										<td class="fw-bold text-end">1,856,160.00</td>
									</tr>
									<tr>
										<td colspan="4" class="fw-bold text-center" style="font-size:21px;">( สามพันเจ็ดร้อยสี่สิบห้าบาทถ้วน )</td>
										<td colspan="1" class="fw-bold text-end" width="10%">Total</td>
										<td class="fw-bold text-end">1,203,450.00</td>
									</tr>
								</tbody>
							</table>
						</div>

					</div>

				</div>

				<div class="row pt-1 divFooter">
					<div class="col-sm-12">
						<div class="table-responsive push">
							<table class="table table-borderless table-hover mb-0 text-nowrap border-bottom">
								<tbody>
									<tr class="text-center borderless">
										<td colspan="3" class="align-bottom"><label class="me-6 align-bottom" style="border-top: 1px solid black; width: 238px; text-align: center; padding-top: 5px;">ผู้รับวางบิล</label>
											<label class="ms-6 align-bottom" style="border-top: 1px solid black; width: 158px; text-align: center; padding-top: 5px;">วันที่</label>
										</td>
										<td colspan="3" style="background-color:antiquewhite;">
											<label style="padding-bottom: 114px;">บริษัท แลนด์มาร์ค คอลซัลแทนส์ จำกัด</label><br>
											<label style="border-top: 1px solid black; width: 274px; text-align: center; padding-top: 5px;">แผนกบัญชี</label>
										</td>
									</tr>
								</tbody>
							</table>
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