@extends('welcome')
@section('conten_foto')

<div class="container mt-4">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($foto as $Get)
            <tr>
                <td>
                    <a href="{{ $Get->galeri_id }}" target="_blank">
                        {{ $Get->judul }}
                    </a>
                </td>
                <td>
                    <a href="{{ $Get->galeri_id }}" target="_blank">
                        <img src="{{ $Get->file }}" alt="{{ $Get->judul }}" class="img-fluid" width="200">
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
