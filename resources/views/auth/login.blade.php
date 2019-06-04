<form action="{{  route('login')  }}" method="post">
    @csrf
    <input type="email" name="email" placeholder="correo@test.cl">
    <input type="password" name="password" placeholder="contraseña">
    <button id="login-btn">Iniciar Sesión</button>
</form>