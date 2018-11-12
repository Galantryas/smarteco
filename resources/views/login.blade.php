@extends('base')
@section('content')
    <section class="main-section">
        <div class="content">

        <link rel="stylesheet" href="css/login.css">
    
        <div class="loginbox">
            <!-- Remove This Before You Start -->
            <img src="user.png" class="user">
            <h2 class="text">Log In Here</h2>
            <form>
                <p>Username</p>
                <input type="text" name="" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="" placeholder="Enter Password">
                <input type="submit" value="Sign In" name="">
            </form>
            <p id="lupa">Lupa Password ?</p>
            <p id="lupa">Hubungi kami</p>
            <p id="lupa">CP : 088888888888 </p>
        </div>
        </div>
    </section>
@endsection
