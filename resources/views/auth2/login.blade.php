<html>
    <head>
        <link rel="stylesheet" href="{{asset('css/login.css') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <form action="{{ url('user/login') }}" id="formId" method="post">
            @csrf
            <div class="imgcontainer">
                <img src="img_avatar2.png" alt="Avatar" class="avatar">
            </div>
            <div class="container">
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button type="submit">Login</button>
                <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="submit" id="submitBtn" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </body>
</html>
<script>
    document.getElementById('formId').addEventListener('submit',function(e){
        e.preventDefault();
        let url = this.action;
        alert(url);

        fetch(url,{
            method:"post",
            body: new FormData(this)
        }).then(res=>
            res.json()
        ).then(data=>{
            console.log(data);
            window.location.href ='/dashboard';
            alert(data.message);            
        })
    })
</script>