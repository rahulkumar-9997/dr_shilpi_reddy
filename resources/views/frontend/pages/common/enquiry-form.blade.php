@php
    $formId = 'enquiry-form-' . ($formType ?? 'default');
@endphp
<form action="{{route('home-enquiry.store')}}" class="contact-form enquiry-form" method="post" id="{{ $formId }}">
    @csrf
    <input type="hidden" name="form_type" value="{{ $formType ?? 'homePage' }}">
    <input type="hidden" name="page_url" value="{{ $pageURL ?? url()->current() }}">
    <div class="row">
        @if(($formType ?? '') == 'homePage')
            <div class="col-lg-12">
                <div class="text-center">
                    <h2>Book An Appointment With <br>Dr. K. Shilpi Reddy</h2>
                </div>
            </div>
        @endif
        @if(($formType ?? '') == 'modalForm')
            <div class="col-lg-12">
                <div class="text-center">
                    <h4 class="tw-text-[22px] tw-leading-[1.4] tw-font-semibold tw-mb-6">Book An Appointment With <br>Dr. K. Shilpi Reddy</h4>
                </div>
            </div>
        @endif
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter your name" name="name" id="name">
                @if($errors->has('name'))
                <div class="text-danger">{{ $errors->first('name') }}</div>
                @endif
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <input name="email" type="email" id="email" class="form-control" placeholder="Enter your email address">
                @if($errors->has('email'))
                <div class="text-danger">{{ $errors->first('email') }}</div>
                @endif
            </div>
        </div>
        <div class="col-lg-12 col-md-12">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter your mobile no." name="mobile_number" id="mobile_number">
                @if($errors->has('mobile_number'))
                <div class="text-danger">{{ $errors->first('mobile_number') }}</div>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="textarea form-group W-100">
                <textarea class="form-control " placeholder="Enter message" rows="2" name="message" id="message"></textarea>
            </div>
        </div>
    </div>
    <button type="submit" class="btn  appointment-btn">
         {{ $buttonText ?? 'Submit' }}
    </button>
</form>