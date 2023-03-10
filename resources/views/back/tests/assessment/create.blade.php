@extends('master.back')

@section('content')

<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b>Create Questions For Assesment Test</b>
                </h3>
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
								<form class="admin-form" action="{{ route('back.assessment.store') }}" method="POST"
									enctype="multipart/form-data">

                                    @csrf

									@include('alerts.alerts')

									<div class="form-group">
										<label for="cat_id">{{ __('Select Category') }} *</label>
										<select name="cat_id" id="cat_id" class="form-control" >
											<option value="" selected disabled>{{__('Select One')}}</option>
											@foreach(DB::table('assessment_categories')->get() as $cat)
											<option value="{{ $cat->id }}">{{ $cat->name }}</option>
											@endforeach
										</select>
									</div>

									

									<div class="form-group">
										<label for="question">Question *</label>
										<input type="text" name="question" class="form-control item-name" id="question"
											placeholder="Enter question" value="{{ old('question') }}" >
									</div>

									{{-- <div class="form-group">
										<label for="slug">{{ __('Slug') }} *</label>
										<input type="text" name="slug" class="form-control" id="slug"
											placeholder="{{ __('Enter Slug') }}" value="{{ old('slug') }}" >
									</div> --}}
                                    <div class="form-group">
										<label for="pattern">Select Answer Pattern *</label>
										<select name="pattern" id="pattern" class="form-control" >
											<option value="4">Option 4</option>
                                            <option value="3">Option 3</option>
										</select>
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
