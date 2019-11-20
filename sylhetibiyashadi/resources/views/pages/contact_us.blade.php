@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2 class="section-title text-center">Contact Us</h2>
    <form method="post" action="{{url('sendemail/send')}}" >
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name-input">Name <span class="required">*</span></label>
                        <input type="text" name="cname" class="form-control" id="name-input" aria-required="true" aria-invalid="false">
                    </div>
                    <div class="form-group">
                        <label for="email-input">Email <span class="required">*</span></label>
                        <input type="email" name="cemail" class="form-control" id="email-input" aria-required="true" aria-invalid="false">
                    </div>
                    <div class="form-group">
                        <label for="phone-input">Phone Number<span class="required">*</span></label>
                        <input type="tel" name="cphone" value="" size="40" class="form-control" id="phone-input" aria-invalid="false">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="company-name">Company <span class="required">*</span></label>
                        <input type="text" name="companyname"class="form-control" id="company-name" aria-required="true">
                    </div>
                    <div class="form-group">
                        <label for="message-input">Message <span class="required">*</span></label>
                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-common px-5">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection

