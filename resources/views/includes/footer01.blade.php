@foreach($tipospaginas22 as $catpage)
	<div class="col-md-4">
		<h4>
			{{ $catpage->name }}
			<span class="badge">({{ $catpage->num_pages22 }})</span>
		</h4>


		<div class="list-group">
            @foreach($catpage->pages22 as $page2)
			<a href="#" class="list-group-item">
				<h5 class="list-group-item-heading">{{ $page2->title }}</h5>
				<p class="list-group-item-text small" style="margin-top: 5px;">{{ str_limit($page2->excerpt,100) }}</p>
			</a>
            @endforeach
		</div>
	</div>
@endforeach
