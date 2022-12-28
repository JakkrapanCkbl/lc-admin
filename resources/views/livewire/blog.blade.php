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
		<div class='col-xl-6 col-lg-8 col-md-12' id='blogquery'>
			@include('livewire.blogloop')
		</div>
		@include('livewire.blog-sidebar')
	</div>
</div>

<ul class="pagination product-pagination ms-auto float-end mb-4">
	<li class="page-item page-prev"><a class="page-link" href="#" tabindex="-1">Prev</a></li>
	<li class="page-item active"><a class="page-link" href="1">1</a></li>
	<li class="page-item"><a class="page-link" href="2" id="pagination2">2</a></li>
	<li class="page-item"><a class="page-link" href="3">3</a></li>
	<li class="page-item"><a class="page-link" href="4">4</a></li>
	<li class="page-item page-next"><a class="page-link" href="#" tabindex="+1">Next</a></li>
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
	$(document).ready(function() {

		var blogType = "";

		function fetch_data(url, page) {
			// $.ajax({
			// url: "/pagination/fetch_data?page=" + page + "&sortby=" + sort_by + "&sorttype=" + sort_type + "&query=" + query,
			// url: window.location.href + "?page=" + page,
			// success: function(blogs) {
			// 	console.log(blogs);
			// 	$('#blogquery').html(blogs);
			// }
			// })
			$.ajax({
				url: url,
				type: 'GET',
				dataType: 'html',
				success: function(blogs) {
					console.log("Fetch Complete: " + blogs)
					$('#blogquery').html(blogs);
				},
				error: function(xhr, status, error) {
					console.log("notok")
				}
			});

		}

		$(".ajaxtagbutton").click(function() {
			// $.ajax({
			// 	url: $(this).data('url'),
			// 	type: 'GET',
			// 	dataType: 'html',
			// 	success: function(blogs) {
			// 		$('#blogquery').html(blogs);
			// 	},
			// 	error: function(xhr, status, error) {
			// 		console.log("notok")
			// 	}
			// });
			var page = 1;
			var url = $(this).data('url') + "?page=" + page;
			blogType = url;
			fetch_data(url, page);
		});

		$(".pagination a").click(function() {
			event.preventDefault();
			$('li').removeClass('active');
			$(this).parent().addClass('active');

			var page = $(this).attr('href');
			var url = blogType + "?page=" + page;

			console.log("Pag Link: " + url)
			console.log("Pagination " + $(this).attr('href'));

			fetch_data(url, page);
		});

		

	});
	//dropdown-menu tag search change
	$(".dropdown-menu a").click(function() {
		$("button").text($(this).text());
	})
</script>
<script>
	$(document).ready(function() {


		// $(document).on('click', '.pagination a', function(event) {
		// 	console.log("Pagination");
		// 	event.preventDefault();
		// 	var page = $(this).attr('href').split('page=')[0];
		// 	console.log(page);

		// 	// $('#hidden_page').val(page);
		// 	// var column_name = $('#hidden_column_name').val();
		// 	// var sort_type = $('#hidden_sort_type').val();

		// 	// var query = $('#serach').val();

		// 	$('li').removeClass('active');
		// 	$(this).parent().addClass('active');
		// 	// fetch_data(page, sort_type, column_name, query);
		// 	fetch_data(page);
		// });

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

	});
</script>

@endsection