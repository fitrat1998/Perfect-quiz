@extends('./layouts.app')
@section('content')
      <section class="content">
        <h3 class="logo">Logo</h3>

        <div class="text-content">
            <h2 class="head-text">Kirish</h2>
            <p class="body-text">Tizimga kirish uchun 
                email & parolingizni kiriting!</p>
        </div>
    </section>
    <div class="login">
        <div class="form-body">
            <div class="form-head">
                <h3><a href="#" class="logo-link">Logo</a> <span class="logo-text">ga xush kelibsiz</span></h3>
            </div>
            <div class="float-left">
                <h3 class="begin">Kirish</h3>
            </div>
            <div class="float-right">
                <p>Hisobingiz yo’qmi ?</p>
                <a href="#">Ro’yxatdan o’tish</a>
            </div>
        </div>
        <div class="margin-top"></div>
        <div class="form-group">
            <label for="">Email kiriting</label>
            <input type="email" placeholder="Email" name="email">
        </div>

        <div class="form-group">
            <label for="">Parolni kiriting</label>
            <input type="password" placeholder="Password" name="password">

            
        <a href="" class="reset">Parolni unitdingizmi?</a>
        </div>
        <div class="form-group">
            <button class="login-button">Kirish</button>
        </div>
    </div>
    
    <section class="bottom-content"></section>
@endsection