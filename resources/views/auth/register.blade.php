<x-guest-layout>
    @vite(['resources/css/auth/register.css'])
    
    <div class="register-container">
        <h1 class="register-title">Join AgroDetect</h1>
        
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <input type="text" name="name" class="register-input" placeholder="Full Name" required autofocus>
            
            <input type="email" name="email" class="register-input" placeholder="Email" required>
            
            <input type="password" name="password" class="register-input" placeholder="Password" required>
            
            <input type="password" name="password_confirmation" class="register-input" placeholder="Confirm Password" required>
            
            <select name="user_type" class="register-select">
                <option value="farmer" selected>Farmer</option>
                <option value="admin">Admin</option>
                
            </select>
            
            <button type="submit" class="register-button">Create Account</button>
            
            <a href="{{ route('login') }}" class="register-link">Already registered?</a>
        </form>
    </div>
</x-guest-layout>