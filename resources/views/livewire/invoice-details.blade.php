@extends('layouts.app')

@section('styles')

<style>
	.page-title {
		font-size: 30px;
	}

	td,
	p,
	label {
		font-size: 19px;
	}

	.fw-bold {
		font-size: 18px;
	}

	tr {
		border-bottom: 1px solid black;
		border-top: 1px solid black;
		border-collapse: collapse;
	}

	.tableheader th {
		color: #1338BE;
		font-size: 19px;
		vertical-align: middle;
		text-align: center;
	}

	b {
		color: #000000;
	}

	​address {
		font-size: 17px;
	}

	.icon {
		vertical-align: baseline;
	}

	@media print {
		.first-row {
			padding: -1em;
		}
	}
</style>
@endsection
<!-- <tr>
	<td class="text-center">2</td>
	<td>
		<p class="font-w600 align-bot">ค่าบริการประเมินมูลค่าทรัพย์สิน LC/BF-1328 HLHO63900629</p>
	</td>
	<td class="text-end">2,000.00</td>
</tr> -->
@section('content')

<!-- PAGE-HEADER -->

<!-- <div class="page-header">
	<div>
		<h1 class="page-title">ใบแจ้งหนี้/ใบวางบิล <br>ตันฉบับ</h1>
	</div> -->
<!-- <div class="ms-auto pageheader-btn">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">Apps</li>
				<li class="breadcrumb-item"><a href="javascript:void(0);">Invoices</a></li>
				<li class="breadcrumb-item active" aria-current="page">Invoice Details</li>
			</ol>
		</div> -->
<!-- </div> -->
<!-- PAGE-HEADER END -->

<!-- ROW-1 OPEN -->
<div class="row first-row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-sm-6">
						<div style="padding-top:56px;"></div>
						<img src="{{asset('assets/images/brand/waslogo-3.png')}}" style="height:60px;">
						<address>
							<p>
								<b>บริษัท แลนด์มาร์ค คอลซัลแทนทส์ จำกัด </b> <br>
								370/6 อาคารแฟร์ทาวเวอร์ ซอยสุขุมวิท 50 ถนนสุขุมวิท<br>
								แขวงพระโขนง เขตคลองเตย กรุงเทพมหานคร 10260 <br>
								เลขประจำตัวผู้เสียภาษี 015547070351 สำนักงานใหญ่
							</p>
						</address>
						<address>
							<p class="pt-4 pb-4">
								<b>ลูกค้า</b> <br>
								นายธนกฤต อนันต์ประกฤติ<br>
								469 ซอยสำโรงเหนือ ตำบลสำโรงเหนือ อำเภอเมืองสมุทรปราการ จ.สมุทรปราการ
							</p>
						</address>
					</div>
					<div class="col-sm-6">
						<div class="clearfix">
							<div class="float-end me-7">
								<h1 class="page-title text-center mt-5"><b>ใบแจ้งหนี้/ใบวางบิล <br>ตันฉบับ</b></h1>
								<hr>
								<div class="text-start">
									<p style="line-height:29px;">Invoice No. : LC-R-20/09/104<br>
										Date: 21-10-2021<br>
										<i class="icon icon-phone pe-2"></i><label></label>0-2331-4580-2</label><br>
										<i class="icon icon-globe pe-2"></i><label>www.landmarkcon.net</label>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="table-responsive push">
					<table class="table table-borderless table-hover mb-0 text-nowrap border-bottom">
						<tbody>
							<tr class="tableheader">
								<th>#</th>
								<th>Description</th>
								<th>Amount<br>(Baht)</th>
							</tr>
							<tr>
								<td class="text-center align-top">1</td>
								<td>
									<p class="font-w600" style="align-items: center; vertical-align: middle;">ค่าบริการประเมินมูลค่าทรัพย์สิน LC/BF-1328 HLHO63900629</p>
								</td>
								<td class="text-end">2,000.00</td>
							</tr>
							<tr>
								<td class="text-center align-top">2</td>
								<td>
									<p class="font-w600">ค่าบริการประเมินมูลค่าทรัพย์สิน LC/BF-1328 HLHO63900629</p>
								</td>
								<td class="text-end">2,000.00</td>
							</tr>
							<tr>
								<td class="text-center align-top">3</td>
								<td>
									<p class="font-w600">ค่าบริการประเมินมูลค่าทรัพย์สิน LC/BF-1328 HLHO63900629</p>
								</td>
								<td class="text-end">2,000.00</td>
							</tr>
							<tr>
								<td class="text-center align-top">4</td>
								<td>
									<p class="font-w600">ค่าบริการประเมินมูลค่าทรัพย์สิน LC/BF-1328 HLHO63900629</p>
								</td>
								<td class="text-end">2,000.00</td>
							</tr>
							<tr>
								<td class="text-center align-top">5</td>
								<td>
									<p class="font-w600">ค่าบริการประเมินมูลค่าทรัพย์สิน LC/BF-1328 HLHO63900629</p>
								</td>
								<td class="text-end">2,000.00</td>
							</tr>
							<tr>
								<td class="text-center align-top">6</td>
								<td>
									<p class="font-w600">ค่าบริการประเมินมูลค่าทรัพย์สิน LC/BF-1328 HLHO63900629</p>
								</td>
								<td class="text-end">2,000.00</td>
							</tr>
							<tr>
								<td class="text-center align-top">7</td>
								<td>
									<p class="font-w600">ค่าบริการประเมินมูลค่าทรัพย์สิน LC/BF-1328 HLHO63900629</p>
								</td>
								<td class="text-end">2,000.00</td>
							</tr>
							<tr>
								<td colspan="2" class="fw-bold text-uppercase text-end">Subtotal</ td>
								<td class="fw-bold text-end">11,160.00</td>
							</tr>
							<tr>
								<td colspan="2" class="fw-bold text-uppercase text-end">VAT 7%</ td>
								<td class="fw-bold text-end">1,856,160.00</td>
							</tr>
							<tr>
								<td colspan="2" class="fw-bold text-uppercase text-end">Total</ td>
								<td class="fw-bold text-end">1,203,450.00</td>
							</tr>
							<tr>
								<td colspan="3" class="fw-bold text-uppercase text-end">( สามพันเจ็ดร้อยสี่สิบห้าบาทถ้วน )</ td>
							</tr>
						</tbody>
					</table>
				</div>

			</div>
			<!-- <div class="card-footer text-end">
				<div class="float-end">
					<i class="icon icon-phone"> </i><a class="pe-2">0-2331-4580-2</a>
					<i class="icon icon-globe pe-2"></i><a class="pe-1">www.landmarkcon.net</a>
				</div>
			</div> -->
		</div>
	</div><!-- COL-END -->
</div>
<!-- ROW-1 CLOSED -->
<div class="float-end">
	<button type="button" class="btn btn-primary mb-1" onclick="javascript:window.print();"><i class="si si-wallet"></i> Pay Invoice</button>
	<button type="button" class="btn btn-success mb-1" onclick="javascript:window.print();"><i class="si si-paper-plane"></i> Send Invoice</button>
	<button type="button" class="btn btn-info mb-1" onclick="javascript:window.print();"><i class="si si-printer"></i> Print Invoice</button>
</div>

@endsection

@section('scripts')

@endsection