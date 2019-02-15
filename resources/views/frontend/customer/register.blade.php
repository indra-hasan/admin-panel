@extends('layouts.main')
@section('content')
<section class="bgwhite p-t-66 p-b-60">
    <div class="container">
        <form class="leave-comment" action="{{ url('customer/register') }}" method="post">
                
            {{ csrf_field() }}

            <h4 class="m-text26 p-b-36 p-t-15">
                Register Customer
            </h4>
            @if ($errors->has('first_name'))
                <span class="help-block" style="color:red;">
                    <strong>{{ $errors->first('first_name') }}</strong>
                </span>
            @endif
            <div class="bo4 of-hidden size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="first_name" value="{{ old('first_name') }}" placeholder="First Name">
            </div>
            @if ($errors->has('last_name'))
                <span class="help-block" style="color:red;">
                    <strong>{{ $errors->first('last_name') }}</strong>
                </span>
            @endif 
            <div class="bo4 of-hidden size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name">
            </div>
            
            @if ($errors->has('email'))
                <span class="help-block" style="color:red;">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            <div class="bo4 of-hidden size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" value="{{ old('email') }}" placeholder="Email Address">
            </div>
            @if ($errors->has('password'))
                <span class="help-block" style="color:red;">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <div class="bo4 of-hidden size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="password" placeholder="Password">
            </div>

            @if($errors->has('password_confirmation'))
                <span class="help-block" style="color:red;">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
             @endif
            <div class="bo4 of-hidden size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="password_confirmation" placeholder="Confirm Password">
            </div>

            <div class="w-size25">
                <!-- Button -->
                <button type="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
                    Register
                </button>
            </div>
        </form>
    </div>
</section>
@endsection