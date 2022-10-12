@extends('template')
@section('edit')

<div class="main" id="main">

    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Edit siswa</h5>
          <form action="{{ route('siswa.update', $data->id) }}" method="post">
            
            @csrf
            @method('put')
            <div class="col-12">
                <label for="inputNanme4" class="form-label" hidden>ID</label>
                <input type="number" class="form-control" value="{{ $data->id }}" id="inputNanme4" name="id" hidden>
              </div>
            <div class="col-12">
                <label for="inputNanme4" class="form-label">NIS</label>
                <input type="number" class="form-control @error('nis') is-invalid @enderror" name="nis" value="{{ $data->nis }}" id="inputNanme4">
              </div>
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control @error('nama_siswa') is-invalid @enderror" name="nama_siswa" value="{{ $data->nama_siswa }}" id="inputNanme4">
              </div>
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Alamat</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $data->alamat }}" id="inputNanme4">
              </div>
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Nama Sekolah</label>
                <select id="inputState" class="form-select @error('sekolah_id') is-invalid @enderror" name="sekolah_id" value="{{ $data->sekolah_id }}">
                  <option selected>Choose...</option>
                  @foreach ($sekolah as $item)
                  {{-- <option  value="{{ $item->id }}">{{ $item->nama_sekolah }}</option> --}}
                  <option value="{{ $item->id }}" @selected($data->sekolah_id==$item->id)>
                    {{ $item->nama_sekolah }}</option>
                  @endforeach
                  </select>
              </div>
              <div class="text-center mt-5">
                <button type="submit" class="btn btn-primary">Submit</button>
               
              </div>
          </form>
        </div>
    </div>
</div>

@endsection
     