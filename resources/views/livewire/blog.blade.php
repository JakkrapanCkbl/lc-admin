@extends('layouts.app')

@section('styles')

@endsection

@section('content')

<!-- PAGE-HEADER -->
<div class="page-header">
	<div>
		<h1 class="page-title">Blog</h1>
	</div>
	<div class="ms-auto pageheader-btn">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">Pages</li>
			<li class="breadcrumb-item"><a href="javascript:void(0);">Blog</a></li>
			<li class="breadcrumb-item active" aria-current="page">Blog</li>
		</ol>
	</div>
</div>
<!-- PAGE-HEADER END -->

<!-- row -->
<div class="row">
	<!-- Blogs Space -->
	@foreach ($blogs as $blog)
	<div class="col-xl-8 col-lg-7 col-md-12">
		<div class="card overflow-hidden">
			<img class="img-fluid mx-auto w-100" background-image="{{$blog['thumbnailpic']}}" alt="">
			<a href="{{url($blog['thumbnailpic'])}}" style="background-image: url(../../assets/images/blog/{{$blog['thumbnailpic']}}) !important;
															height: 200px;" class="card custom-card background-image-blog mb-0">
				@switch ($blog['type'])
				@case("Trend & Insight")
				<span class="badge rounded-pill bg-secondary-gradient blog-label label1">{{$blog['type']}}</span>
				@break
				@case("Research")
				<span class="badge rounded-pill bg-success-gradient blog-label label1">{{$blog['type']}}</span>
				@break
				@default //News
				<span class="badge rounded-pill bg-info-gradient blog-label label1">{{$blog['type']}}</span>
				@break
				@endswitch
			</a>

			<div class="col-sm-6 col-lg-3 mt-2 mb-2">
				<button class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Tooltip on top">Hover me</button>
			</div>
			<div class="card-body">
				<h6 href="#" class="text-dark blog-title">{{$blog['header']}}</h6>
				<p class="text-muted">{{$blog['description']}}</p>
			</div>
			<div class="card-footer">
				<div class="d-sm-flex align-items-center">
					<div class="d-sm-flex ms-sm-auto">
						<div class="col-sm-6 col-lg-3 mt-2 mb-2">
							<button class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Tooltip on top">Hover me</button>
						</div>
						<a class="text-muted me-4" href="#"><u>ลิ้งอ้างอิง</u></a>
						<div class="mt-0 mt-0 me-2 text-muted">วันที่เขียนข่าว</div>
						<span class="fe fe-calendar text-muted me-2 text-17"></span>
						<div class="mt-0 mt-0 text-muted">Dec-01-2021</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endforeach

	<div class="col-xl-8 col-lg-7 col-md-12">
		<div class="card overflow-hidden">
			<a href="{{url('blog-details')}}" class="card custom-card background-image-blog img1 mb-0">
				<span class="badge rounded-pill bg-primary-gradient blog-label label1"></span>
			</a>
			<div class="card-body">
				<h6 href="#" class="text-dark blog-title">something</h6>
				<p class="mb-0 text-muted mt-4">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>
				<p class="text-muted">I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>
			</div>
			<div class="card-footer">
				<div class="d-sm-flex align-items-center">
					<div class="d-sm-flex ms-sm-auto">
						<a href="#" class="d-flex me-3"><span class="fe fe-calendar text-muted me-2 text-17"></span>
							<div class="mt-0 mt-0   text-muted">Dec-01-2021</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include(' livewire.blog-sidebar') <div class="col-xl-8 col-lg-7 col-md-12">
		<div class="card overflow-hidden">
			<a href="{{url('blog-details')}}" class="card custom-card background-image-blog img1 mb-0">
				<span class="badge rounded-pill bg-primary-gradient blog-label label1">nature</span>
			</a>
			<div class="card-body">
				<a href="#" class="text-dark blog-title">Best Place To visit For a Holiday!</a>
				<p class="mb-0 text-muted mt-4">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>
				<p class="text-muted">I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>
				<a href="{{url('blog-details')}}" class="btn btn-outline-primary mt-2">Read More</a>
			</div>
			<div class="card-footer">
				<div class="d-sm-flex align-items-center">
					<div class="avatar-list indicators">
						<a href="javascript:void(0)" class="avatar avatar-md rounded-circle cover-image" data-bs-image-src="{{asset('assets/images/users/4.jpg')}}"></a>
					</div>
					<h6 class="mb-0 text-muted ms-sm-2 mt-sm-0 mt-2">Jiggel mossin</h6>
					<div class="d-sm-flex ms-sm-auto">
						<a href="#" class="d-flex me-3"><span class="fe fe-calendar text-muted me-2 text-17"></span>
							<div class="mt-0 mt-0   text-muted">Dec-01-2021</div>
						</a>
						<a class="me-0 d-flex" href="#"><span class="fe fe-message-square text-muted me-2 text-17"></span>
							<div class="mt-0 mt-0   text-muted">11 Comments</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /row -->

<ul class="pagination product-pagination ms-auto float-end mb-4">
	<li class="page-item page-prev disabled"><a class="page-link" href="#" tabindex="-1">Prev</a></li>
	<li class="page-item active"><a class="page-link" href="#">1</a></li>
	<li class="page-item"><a class="page-link" href="#">2</a></li>
	<li class="page-item"><a class="page-link" href="#">3</a></li>
	<li class="page-item"><a class="page-link" href="#">4</a></li>
	<li class="page-item page-next"><a class="page-link" href="#">Next</a></li>
</ul>

@endsection

@section('scripts')

<!-- Tooltip and Popover JS -->
<script src="{{asset('assets/js/tooltip&popover.js')}}"></script>

@endsection