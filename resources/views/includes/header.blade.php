<style>
    header {
        background-color: #f9f9f9;
        padding: 10px;
        border-bottom: 1px solid #ccc;
    }

    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    nav a {
        text-decoration: none;
        color: #333;
        padding: 5px 10px;
        margin-right: 10px;
        border: 1px solid #ccc;
        background-color: #f9f9f9;
    }

    nav a:hover {
        background-color: #ccc;
    }

    .custom-btn-profile {
    background-color: #ffc107;
    border: 1px solid #ffc107;
}

.custom-btn-profile:hover {
    background-color: #ffca2c;
    border-color: #ffca2c;
}
</style>

<header>
    <nav>
        <a href="/logout">Cerrar sesión</a>
    </nav>
    <nav>
        <a href="{{ route('profile') }}" class="custom-btn custom-btn-profile">Mi perfil</a>
    </nav>
</header>
