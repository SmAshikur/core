@extends('master.back')

@section('content')

<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b>{{ __('Edit Course') }}</b> </h3>
                <a class="btn btn-primary  btn-sm" href="{{route('back.course.index')}}"><i class="fas fa-chevron-left"></i> {{ __('Back') }}</a>
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
								<form class="admin-form" action="{{ route('back.course.update',$data->id) }}" method="POST"
									enctype="multipart/form-data">

                                    @csrf
                                    @method('PUT')
									@include('alerts.alerts')

									<div class="form-group">
										<label for="name">{{ __('Set Image') }} *</label>
										<br>
											<img class="admin-img" src="{{ $data->image ? asset('assets/images/'.optional($data)->image) : asset('assets/images/placeholder.png') }}"
												alt="No Image Found">
										<br>
										<span class="mt-1">{{ __('Image Size Should Be 110 x 81.') }}</span>
									</div>

									<div class="form-group position-relative">
										<label class="file">
											<input type="file"  accept="image/*"  class="upload-photo" name="photo" id="file"
												aria-label="File browser example">
											<span class="file-custom text-left">{{ __('Upload Image...') }}</span>
										</label>
                                    </div>

									<div class="form-group">
										<label for="title">{{ __('Title') }} *</label>
										<input type="text" name="title" class="form-control item-name"  id="title"
											placeholder="{{ __('Enter Name') }}" value="{{ optional($data)->title }}">
									</div>
									
									<div class="form-group">
										<label for="sub_title">{{ __('Sub Title') }} *</label>
										<input type="text" name="sub_title" class="form-control item-name" id="name"
											placeholder="{{ __('Enter Name') }}" value="{{ optional($data)->sub_title }}">
									</div>
                                    <div class="form-group">
										<label for="description">{{ __('Description') }} </label>
										<textarea class="form-control text-editor" name="description" id="description" placeholder="{{ __('Description') }}">
										    {!! optional($data)->description !!}
										</textarea>
									</div>
									<div class="input-group mb-3">
                                      <input type="number" name="price" value="{{ optional($data)->price }}" class="form-control" placeholder="Price" aria-label="Price" aria-describedby="basic-addon2">
                                      <div class="input-group-append">
                                          <span class="input-group-text">Select Price For</span>
                                          <select name="time" class="form-control input-group-text">
                                              <option {{optional($data)->time == "/week" ? "selected":'' }} value="/week">/week</option>
                                              <option {{optional($data)->time == "/month" ? "selected":'' }} value="/month">/month</option>
                                              <option {{optional($data)->time == "/year" ? "selected":'' }} value="/year">/year</option>
                                          </select>
                                      </div>
                                    </div>


									<div class="form-group">
										<label for="sub_title">{{ __('Status') }} *</label>
										<select name="status" class="form-control">
                                              <option {{ optional($data)->status == 1? 'selected' : '' }} value="1">Active</option>
                                              <option {{ optional($data)->status == 0? 'selected' : '' }} value="0">Inavtive</option>
                                          </select>
									</div>
									<hr>
									
									<div class="form-group">
										<label for="meta_title">{{ __('Meta Title') }} </label>
										<input type="text" name="meta_title" class="form-control item-name" id="name"
											placeholder="{{ __('Meta Title') }}" value="{{ optional($data)->meta_title }}">
									</div>
									
									<div class="form-group">
										<label for="meta_tag">{{ __('Meta Tag') }} </label>
										<textarea class="form-control" name="meta_tag" id="meta_tag" placeholder="{{ __('Meta Tag') }}">
										    {!!  optional($data)->meta_tag !!}
										</textarea>
									</div>
									
									<div class="form-group">
										<label for="meta_description">{{ __('Meta Description') }} </label>
										<textarea class="form-control" name="meta_description" id="meta_description" placeholder="{{ __('Meta Description') }}">
										     {!!  optional($data)->meta_description !!}
										</textarea>
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