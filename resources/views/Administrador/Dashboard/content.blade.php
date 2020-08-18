<h1>Bienvenido Administrador</h1>
<form action="{{route('logout')}}" method="POST">
    @csrf
    <button type="submit">Cerrar Sesion</button>
</form>