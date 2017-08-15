@if (! $errors->isEmpty())
    <div class="alert alert-danger">
        <p><strong>Upsss</strong> Comprueba los errores del formulario:</p>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif