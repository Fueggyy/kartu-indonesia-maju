@extends ('layouts.AdminLTE.main')

@section ('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Kartu <b>{{$card->nomor_kartu}}</b> </div>

                <div class="card-body">
                    <form action="{{route('dashboard.cards.index')}}" method="GET">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <label for="nama" class="col-md-4 col-form-label text-md-end">{{ __('Nomor Kartu') }}</label>

                            <div class="col-md-6">
                                <input id="nama" type="nama" class="form-control" name="nama" value="{{ $card->nomor_kartu }}" readonly>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nis" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="nis" type="nis" class="form-control" name="nis" value="{{ $card->name }}" readonly>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nis" class="col-md-4 col-form-label text-md-end">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <input id="nisn" type="text" class="form-control" name="nisn" value="{{ $card->alamat }}" readonly>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nis" class="col-md-4 col-form-label text-md-end">{{ __('Lahir') }}</label>

                            <div class="col-md-6">
                                <input id="nik" type="text" class="form-control" name="nik" value="{{ date('d F Y', strtotime($card->lahir)) }}" readonly>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="pengirim" class="col-md-4 col-form-label text-md-end">{{ __('NIK') }}</label>
                            <div class="col-md-6">
                                <input id="kelamin" type="text" class="form-control" name="kelamin" value="{{ $card->nik }}" readonly>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="pengirim" class="col-md-4 col-form-label text-md-end">{{ __('Fasilitas') }}</label>
                            <div class="col-md-6">
                                <input id="kelamin" type="text" class="form-control" name="tahunmasuk" value="{{ $card->fasilitas }}" readonly>
                            </div>
                        </div>

                        
                    </form>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 offset-md-4">
                    <a href="{{ URL::to( 'dashboard/cards/' . $previous ) }}" class="previous">&laquo; Previous</a>
                    <a href="{{ URL::to( 'dashboard/cards/' . $next ) }}" class="next">Next &raquo;</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection