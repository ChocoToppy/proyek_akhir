<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Edit Order</title>
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Edit Data Order
            </div>
            <div class="card-body">
                <form name="update-data-buyer" id="update-data-buyer" method="post" action="{{url('update-order')}}/{{ $post->id }}">
                @csrf
                    <div class="form-group">
                        <label for="order">Order</label>
                        <input type="text" id="order" name="order" class="form-control @error('order') is-invalid @enderror""  value="{{ $post->order }}">
                        @error('order')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal_pembelian">Pembelian Order</label>
                        <input type="date" id="tanggal_pembelian" name="tanggal_pembelian" class="form-control @error('tanggal_pembelian') is-invalid @enderror""  value="{{ $post->tanggal_pembelian }}">
                        @error('tanggal_pembelian')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal_kedatangan">Tanggal Kedatangan</label>
                        <input type="date" id="tanggal_kedatangan" name="tanggal_kedatangan" class="form-control @error('tanggal_kedatangan') is-invalid @enderror""  value="{{ $post->tanggal_kedatangan }}">
                        @error('tanggal_kedatangan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="seller" class="mb-2 mt-1">Seller</label>
                        <select class="form-control @error('seller') is-invalid @enderror" id="position-option" name="id_seller">
                            @foreach ($seller as $item)
                                <option value="{{ $item->mid }}" {{ $post->seller_id == $item->mid? 'selected' : null }}{{ old('id_seller')==$item->mid? 'selected':null }}>{{ $item->nama }}</option>
                            @endforeach
                        </select>
                        @error('seller')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- <div class="form-group">
                        <label for="seller">Seller</label>
                        <input type="text" id="seller" name="seller" class="form-control @error('seller') is-invalid @enderror"" value="{{ $post->seller }}">
                        @error('seller')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div> --}}
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" id="keterangan" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror"" value="{{ $post->keterangan }}">
                        @error('keterangan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    <a class="btn btn-danger mt-2" href="{{ url('tampil-order') }}">Batal</a>
                </form>
            </div>
        </div>
        </div>
</body>
</html>
