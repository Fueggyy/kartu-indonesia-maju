@extends ('layouts.AdminLTE.main')

@section ('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('dashboard.cards.update', $card->id)}}">
                        @csrf
                        @method ('PUT')

                        <div class="row mb-3">
                            <label for="nis" class="col-md-4 col-form-label text-md-end">{{ __('NOMOR') }}</label>

                            <div class="col-md-6">
                                <input id="nomor" type="nomor" class="form-control" name="nomor_kartu" value="{{ $card->nomor_kartu }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nama" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control" name="name" value="{{ $card->name }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nama" class="col-md-4 col-form-label text-md-end">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <input id="alamat" type="alamat" class="form-control" name="alamat" value="{{ $card->alamat }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nama" class="col-md-4 col-form-label text-md-end">{{ __('Lahir') }}</label>

                            <div class="col-md-6">
                                <input id="lahir" type="date" class="form-control" name="lahir" value="{{ $card->lahir }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nama" class="col-md-4 col-form-label text-md-end">{{ __('NIK') }}</label>

                            <div class="col-md-6">
                                <input id="nik" type="nik" class="form-control" name="nik" value="{{ $card->nik }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nama" class="col-md-4 col-form-label text-md-end">{{ __('Fasilitas') }}</label>

                            <div class="col-md-6">
                                <input id="fasilitas" type="fasilitas" class="form-control" name="fasilitas" value="{{ $card->fasilitas }}" required>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Tambah') }}
                                </button>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection