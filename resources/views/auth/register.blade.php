<!DOCTYPE html>
<html lang="en">



@include('includes.header')


<style type="text/css">
    .panel{
       min-width: 130vh;
       transform: translateY(-50%);
       transform: translateX(-30%);
    }
</style>



<body>

<div class="wrapper-page animated fadeInDown">
    <div class="panel panel-color panel-primary">
        <div class="panel-heading">
            <h3 class="text-center m-t-10"> Sign Up In <strong>Swapnotthan</strong> </h3>
        </div>
        <br>
        @include('includes.alert')

        {!! Form::open(array('route' => 'user.store', 'method' => 'post', 'class' => 'form-signin')) !!}

        <div class="form-group ">
            <div class="col-xs-12"><br>
                {!! Form::text('firstName', '', array('class' => 'form-control', 'placeholder' => 'First Name', 'autofocus')) !!}
            </div>
        </div>

        <div class="form-group ">
            <div class="col-xs-12"><br>
                {!! Form::text('lastName', '', array('class' => 'form-control', 'placeholder' => 'Last Name', 'autofocus')) !!}
            </div>
        </div>

        <div class="form-group ">
            <div class="col-xs-12"><br>
                {!! Form::text('mother', '', array('class' => 'form-control', 'placeholder' => 'Mothers Name', 'autofocus')) !!}
            </div>
        </div>

        <div class="form-group ">
            <div class="col-xs-12"><br>
                {!! Form::text('father', '', array('class' => 'form-control', 'placeholder' => 'Fathers Name', 'autofocus')) !!}
            </div>
        </div>

        <div class="form-group ">
            <div class="col-xs-12"><br>
                {!! Form::text('present_address', '', array('class' => 'form-control', 'placeholder' => 'Present Address', 'autofocus')) !!}
            </div>
        </div>

        <div class="form-group ">
            <div class="col-xs-12"><br>
                {!! Form::text('mobile_number', '', array('class' => 'form-control', 'placeholder' => 'Mobile number', 'autofocus')) !!}
            </div>
        </div>

        <div class="form-group ">
            <div class="col-xs-12"><br>
                {!! Form::text('dept', '', array('class' => 'form-control', 'placeholder' => 'Department', 'autofocus')) !!}
            </div>
        </div>

        <div class="form-group ">
            <div class="col-xs-12"><br>
                {!! Form::text('reg_no', '', array('class' => 'form-control', 'placeholder' => 'Registration No', 'autofocus')) !!}
            </div>
        </div>

        <div class="form-group ">
            <div class="col-xs-12"><br>
                {!! Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email', 'autofocus')) !!}
            </div>
        </div>

        <div class="form-group ">
            <div class="col-xs-12"><br>
                {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) !!}
            </div>
        </div>



        <div class="form-group text-right">
            <br>
            <div class="col-xs-12"><br>
                {!! Form::submit('Sign Up', array('class' => 'btn btn-lg btn-login btn-block btn-purple ', 'type'=>'submit')) !!}
                <br>
            </div>
        </div>







        <center>
            <p>or you can sign up via social network</p>

            <div class="login-social-link">
                <a href="{{ route('login/fb') }}" class="btn btn-primary"><i class="fa fa-facebook"></i> Facebook</a>
                <!-- <a href="#" class="btn btn-info"><i class="fa fa-twitter"></i>Twitter</a> -->
                <a href="{{ route('login/gp') }}" class="btn btn-danger"><i class="fa fa-google-plus"></i> Google</a>
            </div>


            <div class="registration">
                <br>
                Already have an account?
                <a class="" href="{{ route('login') }}">
                    Log In
                </a>
            </div>
        </center>

        {!! Form::close() !!}

    </div>
</div>


</body>
<!-- js placed at the end of the document so the pages load faster -->
{!! HTML::script('js/jquery.js') !!}
{!! HTML::script('js/bootstrap.min.js') !!}
{!! HTML::script('js/pace.min.js') !!}
{!! HTML::script('js/wow.min.js') !!}
{!! HTML::script('js/jquery.nicescroll.js') !!}

        <!--common script for all pages-->
{!! HTML::script('js/jquery.app.js') !!}

</html>
