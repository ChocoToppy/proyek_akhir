<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Halaman Edit Data Buyer</title >
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Edit Data Buyer
            </div>
            <div class="card-body">
                <form name="update-data-buyer" id="update-data-buyer" method="post" action="{{url('update-buyer')}}/{{ $post->id }}">
                @csrf
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" id="id" name="id" class="form-control @error('id') is-invalid @enderror""  value="{{ $post->id }}">
                        @error('id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror""  value="{{ $post->nama }}">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="number" id="umur" name="umur" class="form-control @error('umur') is-invalid @enderror""  value="{{ $post->umur }}">
                        @error('umur')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group w-50">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror" >{{ $post->jenis_kelamin }}>
                            {{-- <option value="{{ $post->jenis_kelamin }}">{{ $post->jenis_kelamin}}</option> --}}
                            <option @php
                                $gender= $post->jenis_kelamin;
                            @endphp
                            @if ($gender == 'Pria')
                                {{ 'selected' }}
                            @endif value="Pria">Pria</option>
                            <option @php
                                $gender= $post->jenis_kelamin;
                            @endphp
                            @if ($gender == 'Wanita')
                                {{ 'selected' }}
                            @endif value="Wanita">Wanita</option>
                        </select>
                        @error('jenis_kelamin')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror"" >{{ $post->alamat }}</textarea>
                        @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kota">Kota</label>
                        <input type="text" id="kota" name="kota" class="form-control @error('kota') is-invalid @enderror"" value="{{ $post->kota }}">
                        @error('kota')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="negara">Negara</label>
                        <input type="text" id="negara" name="negara" class="form-control @error('negara') is-invalid @enderror""  value="{{ $post->negara }}">
                        @error('negara')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    <a class="btn btn-danger mt-2" href="{{ url('tampil-buyer') }}">Batal</a>
                </form>
            </div>
        </div>
        </div>
</body>
</html>
{{-- Abilawa Andamari Supriyadi G.231.21.0153 --}}
