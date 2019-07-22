@extends('user.homepage')

@section('maincontent')


<!------ Include the above in your HEAD tag ---------->
    <ul class="breadcrumb">
        <li><a href="index.html">Home</a> <span class="divider">/</span></li>
        <li class="active">Login</li>
    </ul>
    <h3> SIGNUP</h3> 
    <hr class="soft"/>
    
    <div class="row">
        <div class="span4">
            <div class="well">
            <h5>CREATE YOUR ACCOUNT</h5><br/>
            Enter your e-mail address to create an account.<br/><br/><br/>
            <form method="POST" action="/user_signup">
                @csrf
                <h5 style="color: red">{{Session::get('msg')}}</h5>
              <div class="control-group">
                <label class="control-label" for="inputEmail0">Email</label>
                <div class="controls">
                  <input class="span3" name="email"  type="text" id="inputEmail0" placeholder="Email or name">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="inputEmail0">Password</label>
                <div class="controls">
                  <input class="span3" name="password"  type="text" id="inputEmail0" placeholder="password">
                </div>
              </div>
              <div class="controls">
              <button type="submit" class="btn block">SIGN UP</button><br><br>
              <button type="submit" style="display: inline-block; background-color: #1a75ff; border-radius: 7px; color: white; padding: 5px 7px;">Signup with FACEBOOK</button>
              <button type="submit" style="display: inline-block; background-color: red; border-radius: 7px; color: white; padding: 5px 7px;">Signup with GOOGLE</button>
              </div>
            </form>
        </div>
        </div>
        <div class="span1"> &nbsp;</div>
        <div class="span4">
            <div class="well">
            <h5>ALREADY REGISTERED ?</h5>
            <form>
              <div class="control-group">
                <label class="control-label" for="inputEmail1">Email</label>
                <div class="controls">
                  <input class="span3"  type="text" id="inputEmail1" placeholder="Email">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="inputPassword1">Password</label>
                <div class="controls">
                  <input type="password" class="span3"  id="inputPassword1" placeholder="Password">
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <button type="submit" class="btn">Sign in</button> <a href="forgetpass.html">Forget password?</a>
                </div>
              </div>
            </form>
        </div>
        </div>
    </div>
@endsection 