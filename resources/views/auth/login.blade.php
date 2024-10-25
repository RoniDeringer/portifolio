<form action="{{route('post-login')}}" method="POST">
    @csrf
    <label for="email">Email:</label>
    <input type="text" name="email" required>

    <label for="password">Senha:</label>
    <input type="password" name="password" required>

    <button type="submit">Login</button>
</form>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
