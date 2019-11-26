@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2 class="section-title text-center">Contact Us</h2>
        <div class="contact-text mb-5">
            <h3 class="text-center mb-3">পাত্র-পাত্রী পছন্দ হলে যোগাযোগ করুন </h3>
            কোনো পাত্র বা পাত্রীর সাথে যোগাযোগ করতে চাইলে বা বিস্তারিত জানতে হলে আপনাকে আমাদের নিম্নবর্ণিত নাম্বারে ফোন দিতে হবে। প্রোফাইলে স্থায়ী বা বর্তমান ঠিকানা দেয়া আছে, আপনি নিজ থেকে যোগাযোগ করতে পারেন । এই সুবিধা আপনি ফ্রি পাচ্ছেন ।
                    আমরা আপনাকে সন্ধান দিচ্ছি, ফোন নাম্বার নেয়ার জন্যে আমাদেরকে সামান্য কিছু পারিশ্রমিক দিতে হচ্ছে ।
                    বিস্তারিত তথ্য ঘটক আপনাকে দিবে। টাকা দেয়ার পর আমাদের কাজ হলো আপনাকে আপনার পছন্দের পাত্র বা পাত্রীর ঘটক বা ফ্যামিলির সাথে লিংক করে দেয়া । বাকি কাজ আপনাদের মধ্যে। ওয়ান-টাইম পেইমেন্ট দিয়ে ১ জন পাত্র বা পাত্রীর তথ্য পাবেন ।
                    গোপনীয়তার কথা চিন্তা করে, আমরা এখানে ফটো আর পিকচার দেই নি । আমাদের দ্বারা আপনি কোনো রকম প্রতারণার শিকার হবেন না। এই ওয়েবসাইট Digital Security Act এর প্রতি শ্রদ্ধাশীল । দয়া করে কেউ অযথা ফোন দিয়ে বিরক্ত করবেন না।
                    বিস্তারিত জানতে কল করুন : <a href="tel:01756382137">01756382137</a> , <a href="01318214587">01318214587</a> 
        </div>
    <form id="contact-form" method="post" action="/contact" >
        @csrf
        <div class="success-messages"></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name-input">Name <span class="required">*</span></label>
                        <input type="text" name="cname" value="{{ old('cname') }}" class="form-control" id="name-input" aria-required="true" aria-invalid="false">
                    </div>
                    <div class="form-group">
                        <label for="email-input">Email <span class="required">*</span></label>
                        <input type="email" name="cemail" value="{{ old('cemail') }}" class="form-control" id="email-input" aria-required="true" aria-invalid="false">
                    </div>
                    <div class="form-group">
                        <label for="phone-input">Phone Number<span class="required">*</span></label>
                        <input type="tel" name="cphone" value="{{ old('cphone') }}" size="40" class="form-control" id="phone-input" aria-invalid="false">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="company-name">Topic <span class="required">*</span></label>
                        <input type="text" name="topic" value="{{ old('topic') }}" class="form-control" id="company-name" aria-required="true">
                    </div>
                    <div class="form-group">
                        <label for="message-input">Message <span class="required">*</span></label>
                        <textarea class="form-control" name="message" value="{{ old('message') }}" id="exampleFormControlTextarea1" rows="5"></textarea>
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

