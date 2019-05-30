<form action="{{  route('causes.new')  }}" method="post">
    @csrf
    <textarea name="body" cols="30" rows="10"></textarea>
    <button id="create-cause">Crear Causa</button>
</form>