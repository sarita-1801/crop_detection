<x-guest-layout>
    @vite(['resources/css/auth/login.css'])
    
    <div class="login-container">
        <h1 class="login-title">Login to AgroDetect</h1>
        
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <input type="email" name="email" class="login-input" placeholder="Email" required autofocus>
            
            <input type="password" name="password" class="login-input" placeholder="Password" required>
            
           
            
            <div class="login-remember">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember me</label>
            </div>
            
            <button type="submit" class="login-button">Login</button>
            
            <div class="login-links">
                <a href="{{ route('password.request') }}" class="login-link">Forgot password?</a>
                <a href="{{ route('register') }}" class="login-link">Create Account</a>
            </div>
        </form>
    </div>
</x-guest-layout>