@extends('master.back')

@section('content')

<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b>{{ __('Edit Child Category') }}</b> </h3>
                <a class="btn btn-primary btn-sm" href="{{route('back.assessment.index')}}"><i class="fas fa-chevron-left"></i> {{ __('Back') }}</a>
                </div>
        </div>
    </div>

	<!-- Form -->
	<div class="row">

		<div class="col-xl-12 col-lg-12 col-md-12">

			<div class="card o-hidden border-0 shadow-lg">
				<div class="card-body ">
					<!-- Nested Row within Card Body -->
					<div class="row justify-content-center">
						<div class="col-lg-12">
								<form class="admin-form" action="{{ route('back.assessment.update',$assessment->id) }}" method="POST"
									enctype="multipart/form-data">

                                    @csrf
									@method('PUT')
									@include('alerts.alerts')

									<div class="form-group">
										<label for="category_id">{{ __('Select Category') }} *</label>
										<select name="category_id" id="category_id" class="form-control" >
											<option value="" disabled>{{__('Select One')}}</option>
											@foreach(DB::table('assessment_categories')->get() as $cat)
											<option value="{{ $cat->id }}" {{$assessment->cat_id == $cat->id ? 'selected' :''}} >{{ $cat->name }}</option>
											@endforeach
										</select>
									</div>

									<div class="form-group">
										<label for="question">{{ __('Name') }} *</label>
										<input type="text" name="question" class="form-control item-name" id="question"
											placeholder="{{ __('Enter Name') }}" value="{{ $assessment->question}}" >
									</div>

									<div class="form-group">
										<label for="pattern">{{ __('pattern') }} *</label>
										<input type="text" name="pattern" class="form-control" id="pattern"
											placeholder="{{ __('Enter pattern') }}" value="{{ $assessment->pattern }}" >
									</div>

								<div class="form-group">
										<button type="submit"
											class="btn btn-secondary ">{{ __('Submit') }}</button>
									</div>

									<div>
								</form>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>

@endsection
