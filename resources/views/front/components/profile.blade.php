{{-- profile --}}
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row ">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{ Auth::user()->name }}</span><span class="text-black-50">{{ Auth::user()->email }}</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">{{ __('general.profile_settings') }}</h4>
                </div>
              
                <form  method="post"  action="{{ route('update_profile',Auth::user()->id) }}">
                    @csrf
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">{{ __('general.name') }}</label><input type="text" class="form-control @error('name') invalid @enderror" name="name" placeholder="{{ Auth::user()->name }}" value="{{ Auth::user()->name }}" />
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12"><label class="labels">{{ __('general.email') }}</label><input type="text" class="form-control @error('name') invalid @enderror" name="email" placeholder="{{ Auth::user()->email }}" value="{{ Auth::user()->email }}"/>
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="col-md-12"><label class="labels">{{ __('general.password') }}</label><input type="password" class="form-control @error('password') invalid @enderror" name="password" placeholder="{{ __('general.password') }}" >
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12"><label class="labels">{{ __('general.confirm_password') }}</label><input type="password" class="form-control @error('name') invalid @enderror" name="confirm_password" placeholder="{{ __('general.confirm_password') }}"/>
                            @error('confirm_password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">{{ __('general.update_profile') }}</button></div>
                </form>
            </div>
        </div>
        {{-- <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div> --}}
    </div>
</div>

