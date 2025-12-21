<div class="login-form-wrapper">
    <div class="slogan">
        <h1>MEJIWOO</h1>
        <h2>미지우</h2>
    </div>

    <div class="auth-message">
        <h2>Sign in to your account</h2>
    </div>

    <form action="/login" method="post" class="login-form">
        <div>
            <input type="email" name="email" required placeholder="Email Address">
            <input type="password" name="password" required placeholder="Password">
        </div>
    
        <button type="submit">Log in</button>
    </form>

    <p>Not a client? <a href="/register">Sign up</a> </p> 
</div>