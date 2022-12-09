@extends('layouts.app')

@section('styles')

@endsection

@section('content')

<!-- row -->

<!-- Blogs Space -->
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header border-bottom d-block">
				<div class="tabs-menu">
					<!-- Tabs -->
					<ul class="nav panel-tabs">
						<li><a href="#trending" class="my-1 active me-1 text-default" data-bs-toggle="tab">Trending</a></li>
						<li><a href="#popular" data-bs-toggle="tab" class="my-1 me-1 text-default">Popular</a></li>
						<li><a href="#recent" data-bs-toggle="tab" class="my-1 me-1 text-default">Recent</a></li>
						<li><a href="#editorpicks" data-bs-toggle="tab" class="my-1 text-default">Editor Picks</a></li>
						<div class="btn-group">
							<button type="button" class="btn btn-outline-default dropdown-toggle" data-bs-toggle="dropdown">
								Action <span class="caret"></span>
							</button>
							<ul class="dropdown-menu my-1" role="menu">
								<li class="dropdown-plus-title">
									Dropdown
									<b class="fa fa-angle-up" aria-hidden="true"></b>
								</li>
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</div>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-3"></div>
		<div class="col-xl-6 col-lg-7 col-md-7">
			@foreach ($blogs as $blog)
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
					@default
					<!-- News -->
					<span class="badge rounded-pill bg-info-gradient blog-label label1">{{$blog['type']}}</span>
					@break
					@endswitch
				</a>
				<div class="card-body">
					<h6 href="#" class="text-dark blog-title">{{$blog['header']}}</h6>
					<p class="text-muted">{{$blog['description']}}</p>
				</div>
				<div class="card-footer">
					<div class="d-sm-flex align-items-center">
						<div class="d-sm-flex ms-sm-auto">
							<a class="text-muted me-4" href="{{$blog['link']}}" data-bs-placement="bottom" data-bs-toggle="tooltip" title="ลิ้งนี้จะพาคุณไปที่ {{$blog['link']}}"><u>ลิ้งอ้างอิง</u></a>
							<div class="mt-0 mt-0 me-2 text-muted">วันที่เขียนข่าว</div>
							<span class="fe fe-calendar text-muted me-2 text-17"></span>
							<div class="mt-0 mt-0 text-muted">{{$blog['date']}}</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		@include('livewire.blog-sidebar')
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
<script>
	var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
	var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
		return new bootstrap.Tooltip(tooltipTriggerEl)
	})
</script>
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
@endsection