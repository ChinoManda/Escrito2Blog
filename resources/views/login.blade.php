<form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>

@if(session("created"))
        <div class="alert alert-success">
            User created
        </div>
    @endif

    @if(session("logout"))
    <div class="alert alert-warning">
        User logged out
    </div>
    @endif

    @if(session("failed"))
        <div class="alert alert-danger">
            Invalid credentials
        </div>
    @endif
    </div>

    <div>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        @error('password')
            <span>{{ $message }}</span>
        @enderror
    </div>

<!--     <div>
        <input type="checkbox" id="remember" name="remember">
        <label for="remember">Remind me</label>
    </div>
 -->

    <button type="submit">Login</button>
</form>