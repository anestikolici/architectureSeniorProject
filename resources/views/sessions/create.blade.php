@include('header')


<main class="max-w-lg mx-auto mt-10" id="registerForm">

    <h2>Log In!</h2>

    <form method="post" action="/sessions">
        @csrf

        <div class="form-group">
            <label>Username: </label>
            <input type="text" name="username"/>

            <label>Password: </label>
            <input type="password" name="password"/>
        </div>
        <br>
        <input type="submit" name="Login" class="button" value="Login"/>

        <div class="goToRegister">
            <input  class="button" type="button" value="No Account? Register here" name="go to register" onclick="location.href='register'">
        </div>
    </form>

</main>
