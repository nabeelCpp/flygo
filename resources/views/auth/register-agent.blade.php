@extends('layouts.front')

@section('content')
<section style="margin-bottom: 20%">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() !== 'agent.register-view'?"active":'' }}" href="{{ url('register') }}">{{ __('Register') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() == 'agent.register-view'?"active":'' }}" href="{{ route('agent.register-view') }}">{{ __('Agent Register') }}</a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        @isset($route)
                            <form method="POST" id="register_form" action="{{ $route }}" enctype="multipart/form-data">
                        @else 
                            <form method="POST" id="register_form" action="{{ route('register') }}" enctype="multipart/form-data">
                        @endisset
                            @csrf
                                <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            @error('email')
                                                {{ __($message) }}
                                            @enderror
                                        </strong>
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="landline" class="col-md-4 col-form-label text-md-end">{{ __('Landline Number') }}</label>

                                <div class="col-md-6">
                                    <input id="landline" type="text" class="form-control @error('landline') is-invalid @enderror" name="landline" value="{{ old('landline') }}" required autocomplete="landline" autofocus>

                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            @error('landline')
                                                {{ __($message) }}
                                            @enderror
                                        </strong>
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="mobile" class="col-md-4 col-form-label text-md-end">{{ __('Mobile Number') }}</label>

                                <div class="col-md-6">
                                    <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>

                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            @error('mobile')
                                                {{ __($message) }}
                                            @enderror
                                        </strong>
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="country" class="col-md-4 col-form-label text-md-end">{{ __('Country') }}</label>

                                <div class="col-md-6">
                                    <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus>

                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            @error('country')
                                                {{ __($message) }}
                                            @enderror
                                        </strong>
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="city" class="col-md-4 col-form-label text-md-end">{{ __('City') }}</label>

                                <div class="col-md-6">
                                    <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>

                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            @error('city')
                                                {{ __($message) }}
                                            @enderror
                                        </strong>
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="travel_agent_id" class="col-md-4 col-form-label text-md-end">{{ __('Travel Agent ID') }}</label>

                                <div class="col-md-6">
                                    <input id="travel_agent_id" type="text" class="form-control @error('travel_agent_id') is-invalid @enderror" name="travel_agent_id" value="{{ old('travel_agent_id') }}" required autocomplete="travel_agent_id" autofocus>

                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            @error('travel_agent_id')
                                                {{ __($message) }}
                                            @enderror
                                        </strong>
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            @error('username')
                                                {{ __($message) }}
                                            @enderror
                                        </strong>
                                    </span>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="company_logo" class="col-md-4 col-form-label text-md-end">{{ __('Company Logo') }}</label>

                                <div class="col-md-6">
                                    <input id="company_logo" type="file" class="form-control @error('company_logo') is-invalid @enderror" name="company_logo" value="{{ old('company_logo') }}" required autocomplete="company_logo" autofocus>

                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            @error('company_logo')
                                                {{ __($message) }}
                                            @enderror
                                        </strong>
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="documents" class="col-md-4 col-form-label text-md-end">{{ __('Documents') }}</label>

                                <div class="col-md-6">
                                    <input id="documents" type="file" multiple class="form-control @error('documents') is-invalid @enderror" name="documents[]" value="{{ old('documents') }}" required autocomplete="documents" autofocus>

                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            @error('documents')
                                                {{ __($message) }}
                                            @enderror
                                        </strong>
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="company_name" class="col-md-4 col-form-label text-md-end">{{ __('Company Name') }}</label>

                                <div class="col-md-6">
                                    <input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" required autocomplete="company_name" autofocus>

                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            @error('company_name')
                                                {{ __($message) }}
                                            @enderror
                                        </strong>
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="company_representative_name" class="col-md-4 col-form-label text-md-end">{{ __('Company Representative Name') }}</label>

                                <div class="col-md-6">
                                    <input id="company_representative_name" type="text" class="form-control @error('company_representative_name') is-invalid @enderror" name="company_representative_name" value="{{ old('company_representative_name') }}" required autocomplete="company_representative_name" autofocus>

                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            @error('company_representative_name')
                                                {{ __($message) }}
                                            @enderror
                                        </strong>
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="akama" class="col-md-4 col-form-label text-md-end">{{ __('Akama/Identification Number') }}</label>

                                <div class="col-md-6">
                                    <input id="akama" type="text" class="form-control @error('akama') is-invalid @enderror" name="akama" value="{{ old('akama') }}" required autocomplete="akama" autofocus>

                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            @error('akama')
                                                {{ __($message) }}
                                            @enderror
                                        </strong>
                                    </span>
                                </div>
                            </div>

                            

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            @error('password')
                                                {{ $message }}
                                                @enderror
                                        </strong>
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                           
                                        </strong>
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
    <script>
        let form = $('#register_form');
        form.find('[type="submit"]').click(function(e){
            let required = form.find('[required]');
            required.each(function(){
                if($(this).val() == ''){
                    // $(this).addClass('border border-danger');
                    // $(this).next('.invalid-feedback').find('strong').text('Fill this field!');
                    // $(this).next('.invalid-feedback').show(300);
                    $(this).addClass('is-invalid');
                }else{
                    if($(this).hasClass('is-invalid')){
                        // $(this).removeClass('border-danger');
                        // $(this).removeClass('border');
                        $(this).removeClass('is-invalid');
                    }
                    // $(this).next('.invalid-feedback').find('strong').text('');
                }
            })
        })

    </script>
@endsection
