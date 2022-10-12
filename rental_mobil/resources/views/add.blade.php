@extends('template')
@section('add')

<div class="main" id="main">
{{-- {{$data2}} --}}
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">add siswa</h5>
          <form action="{{ route('siswa.store')}}" method="POST">
            @csrf
            <div class="col-12">
                <label for="inputNanme4" class="form-label" hidden>ID</label>
                <input type="number" class="form-control" id="inputNanme4" name="id" hidden>
              </div>
            <div class="col-12">
                <label for="inputNanme4" class="form-label">NIS</label>
                <input type="number" class="form-control @error('nis') is-invalid @enderror" name="nis" id="inputNanme4">
              </div>
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control @error('nama_siswa') is-invalid @enderror" name="nama_siswa" id="inputNanme4">
              </div>
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Alamat</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="inputNanme4">
              </div>
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Nama Sekolah</label>
                <select id="inputState" class="form-select @error('sekolah_id') is-invalid @enderror" name="sekolah_id">
                  <option selected>Choose...</option>
                  @foreach ($data2 as $item)
                  <option  value="{{ $item->id }}">{{ $item->nama_sekolah }}</option>
                  @endforeach
                  </select>
              </div>
              <div class="text-center mt-5">
                <button type="submit" class="btn btn-primary">Submit</button>
                {{-- <button type="reset" class="btn btn-secondary">Reset</button> --}}
              </div>
          </form>
        </div>
    </div>
</div>

@endsection
     