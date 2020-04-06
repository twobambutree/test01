@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Quotes HTML
						<button class="btn btn-default">Btn1</button>
						<button class="btn btn-default">Btn2</button>
						<button class="btn btn-default">Btn3</button>
						<button class="btn btn-default">Btn4</button>
					</div>
					
					<div class="panel-body">
						@if (session('status'))
							<div class="alert alert-success">
								{{ session('status') }}
							</div>
						@endif
						<div>
							<div class="container">
								@foreach ($quotes as $index => $quote)
									<div class="row">
										<div class="col-sm">
											<div class="card" style="">
												<div class="card-body">
													<h5 class="card-title">{{ $quote->quote }}</h5>
													<h6 class="card-subtitle mb-2 text-muted"> {{ $quote->author }}</h6>
{{--													<a href="#" class="card-link">{{$index}}</a>--}}
												</div>
											</div>
										</div>
									</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection