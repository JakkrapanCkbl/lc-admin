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
		<div class="col-xl-3 col-lg-2"></div>
		<div class="col-12">
			<div id="demo">
				<button type="button" class="ajaxbutt" data-url="{{url('/blogdata/trend')}}">
					Trend
				</button>
			</div>
			<div id="demo">
				<button type="button" class="ajaxbutt" data-url="{{url('/blogdata/recent')}}">
					Recent
				</button>
			</div>

		</div>
		<div class="col-xl-6 col-lg-8 col-md-12 collapse">
			@include('livewire.blogloop')
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

<!-- ajax jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
	// function buttonclick() {
	// 	document.getElementById("ajaxtext").innerHTML = "Text is changed";
	// }

	$(document).ready(function() {
		$.ajax({
			url: $(this).data('url'),
			type: 'GET',
			beforeSend: function() {
				$('#current_page').append("loading..");
				console.log("Loading");
			},
			success: function(blogs) {
				$('.collapse').collapse('show');
				// $('#blogcard').html(blogs);
			}
		});

		$(".ajaxbutt").click(function() {
			$.ajax({
				url: $(this).data('url'),
				type: 'GET',
				// dataType: 'json',
				success: function(blogs) {
					console.log("ok");
					console.log(blogs);
					if (blogs['id'] == 1) {
						$('.collapse').collapse('hide');
						console.log("ok ".blogs['id']);
					} else {
						$('.collapse').collapse('show');
					}
					// $('#blogcard').html(blogs)
				},
				error: function(xhr, status, error) {
					console.log("notok")
				}
			});
		});
	});
</script>
<script>
	//dropdown-menu text change
	$(".dropdown-menu a").click(function() {
		$("button").text($(this).text());
	})
</script>
<script>
	jQuery(document).ready(function() {
		jQuery('#ajaxSubmit').click(function(e) {
			e.preventDefault();
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
				}
			});
		});
	});
</script>

<script>
	$(document).ready(function() {

		function fetch_data(page, sort_type, sort_by, query) {
			$.ajax({
				url: "/pagination/fetch_data?page=" + page + "&sortby=" + sort_by + "&sorttype=" + sort_type + "&query=" + query,
				success: function(data) {
					$('tbody').html('');
					$('tbody').html(data);
				}
			})
		}

		$(document).on('keyup', '#serach', function() {
			var query = $('#serach').val();
			var column_name = $('#hidden_column_name').val();
			var sort_type = $('#hidden_sort_type').val();
			var page = $('#hidden_page').val();
			fetch_data(page, sort_type, column_name, query);
		});

		$(document).on('click', '.sorting', function() {
			var column_name = $(this).data('column_name');
			var order_type = $(this).data('sorting_type');
			var reverse_order = '';
			if (order_type == 'asc') {
				$(this).data('sorting_type', 'desc');
				reverse_order = 'desc';
				clear_icon();
				$('#' + column_name + '_icon').html('<span class="glyphicon glyphicon-triangle-bottom"></span>');
			}
			if (order_type == 'desc') {
				$(this).data('sorting_type', 'asc');
				reverse_order = 'asc';
				clear_icon
				$('#' + column_name + '_icon').html('<span class="glyphicon glyphicon-triangle-top"></span>');
			}
			$('#hidden_column_name').val(column_name);
			$('#hidden_sort_type').val(reverse_order);
			var page = $('#hidden_page').val();
			var query = $('#serach').val();
			fetch_data(page, reverse_order, column_name, query);
		});

		$(document).on('click', '.pagination a', function(event) {
			event.preventDefault();
			var page = $(this).attr('href').split('page=')[1];
			$('#hidden_page').val(page);
			var column_name = $('#hidden_column_name').val();
			var sort_type = $('#hidden_sort_type').val();

			var query = $('#serach').val();

			$('li').removeClass('active');
			$(this).parent().addClass('active');
			fetch_data(page, sort_type, column_name, query);
		});

	});
</script>

@endsection