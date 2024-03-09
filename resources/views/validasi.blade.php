<html>
<body>
    @if (!empty($angka))
        <h1>Hasil Perkalian</h1>
        <p>Angka: {{ $angka }}</p>
        <p>Hasil Perkalian: {{ $hasil }}</p>
    @else
        <h1>Create Post</h1>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @error('Kesalahan')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    @endif
</body>
</html>
