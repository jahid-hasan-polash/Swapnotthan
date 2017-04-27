@extends('layouts.userDefault')
@section('content')

		<div id="content" class="container">
			<div class="row margin-vert-30">
				<!-- Main Column -->
				<div class="col-md-9">
					<h2>{!!  $news->title  !!}</h2><br>
					<!-- News Image will be here -->
					<img src="\img\images\{!! $news->newsImage->image->image_title !!}">
					<p>{!!  $news->description  !!}</p>
				</div>
				<!-- End Main Column -->
				<!-- Side Column -->
				<div class="col-md-3">
					<!-- Recent Posts -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Recent News</h3>
						</div>
						@foreach($newsAll as $news_link)

						@if($news_link->id == $news->id)
						<!-- do nothing -->
						@else
						<div class="panel-body">
							<ul class="posts-list margin-top-10">
								<li>
									<div class="recent-post">
										<a href="{!! URL::route('news.show',$news_link->id) !!}" class="posts-list-title">{!! $news_link->title !!}</a>
										<br>
			
									</div>
									<div class="clearfix"></div>
								</li>
							</ul>				
						</div>
						@endif
						@endforeach
						</div>
						<!-- End recent Posts -->
						
					</div>
					<!-- End Side Column -->
				</div>
			</div>
			

@stop