<form method="POST" action="/register">
    @csrf

    <div>
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus>
        @error('name')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        @error('password')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="password_confirmation">Confirmar contraseña:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
    </div>

    <button type="submit">Registrarse</button>
</form>