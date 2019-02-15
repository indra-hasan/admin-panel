@extends('layouts.main')
@section('content')
<section class="bgwhite p-t-66 p-b-60">
    <div class="container">
        <form class="leave-comment" action="{{ url('customer/login') }}" method="post">
            {{ csrf_field() }}
            <h4 class="m-text26 p-b-36 p-t-15">
                Login Customer
            </h4>
            <div class="row">
                <div class="col-md-6 p-b-30">
                    
                    @if ($errors->has('email'))
                        <span class="help-block" style="color:red;">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email Address">
                    </div>
                    @if ($errors->has('password'))
                        <span class="help-block" style="color:red;">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="password" placeholder="Password">
                    </div>
                
                           
                    <div class="w-size25">
                        <!-- Button -->
                        <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
                            Login
                        </button>
                    </div>

                </div>    
            </div>
            
        </form>
    </div>
</section>
@endsection