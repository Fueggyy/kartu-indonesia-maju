@extends ('layouts.AdminLTE.main')

@section ('content')
<div class="container">
          <div class="row justify-content-center">
            <div>
              <div class="card">
                <div class="card-body">
                  <a href="{{ route ('dashboard.cards.create') }}" class="btn btn-success mb-4">Tambah Data</a>
                  <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                      <tr>
                        <th>Print</th>
                        <th>Nomor</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Lahir</th>
                        <th>NIK</th>
                        <th>Fasilitas</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($card as $i)
                      <tr>
                        <td>
                          <div class="row">
                            <div class="col-5">
                              <a href="{{route ('dashboard.cards.show', $i->id)}}" class="btn btn-primary">
                                <i class="fas fa-print"></i>
                              </a>
                            </div>
                          </div>
                        </td>
                        <td>{{$i->nomor_kartu}}</td>
                        <td>{{$i->name}}</td>
                        <td>{{$i->alamat}}</td>
                        <td>{{ date('d F Y', strtotime($i->lahir)) }}</td>
                        <td>{{$i->nik}}</td>
                        <td>{{$i->fasilitas}}</td>
                        <td>
                          <div class="row">
                            <div class="col-5">
                              <form action="{{route ('dashboard.cards.show', $i->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                  <i class="fas fa-solid fa-trash"></i>
                                </button>
                              </form>
                            </div>
                            <div class="col-5">
                              <a href="{{route ('dashboard.cards.edit', $i->id)}}" class="btn btn-warning">
                                <i class="fas fa-solid fa-pen"></i>
                              </a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection