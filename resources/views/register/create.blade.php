@include('header')


<main class="max-w-lg mx-auto mt-10" id="registerForm">

    <h2>Register</h2>

    <form method="post" action="/register">
        @csrf

            <div class="form-group">
                <label>Username: </label>
                <input type="text" name="username"/>

                <label>Password: </label>
                <input type="password" name="password"/>
            </div>
            <br>
            <input type="submit" name="Register" class="button" value="Register"/>

            <div class="goToLogin">
                <input  class="button" type="button" value="Already have an account? Log In here" name="go to log in" onclick="location.href='login'">
            </div>
    </form>

</main>
