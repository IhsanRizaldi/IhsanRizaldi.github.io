<x-app-layouts title="Surat Keluar | Apps">
    <div class="container">
      @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
          @endif 
      @if (session()->has('primary'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    {{ session()->get('primary') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
          @endif 
      @if (session()->has('danger'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session()->get('danger') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
          @endif 
        <h2 style="text-align: center; margin-top: 3px">Surat Keluar</h2>
        <a href="{{ route('home') }}" class="btn btn-primary"><span data-feather="arrow-left"></span></a>
        <a href="{{ route('surat_keluar.create') }}" class="btn btn-primary"><span data-feather="plus"></span></a>
        <a href="{{ route('printsk') }}" target="blank" class="btn btn-danger"><span data-feather="file"></span></a>
      </div>
      <div class="container mt-2">
        <div class="row">
          <div class="col-md-6">
            <form action="/surat_keluar" class="d-flex">
              <input class="form-control me-2" name="cari" id="cari" type="search" placeholder="Search" value="{{ request('cari') }}">
              <button class="btn btn-success" type="submit"><span data-feather="search"></span></button>
            </form>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mt-3">
          <div class="card">
                       <table class="table table-responsive table-striped">
                        <thead>
                          <tr>
                            <th scope="col">No Surat</th>
                            <th scope="col">Perihal</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Dok</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($surat as $s)
                          <tr>
                            <td>{{ $s->no_surat }}</td>
                            <td>{{ $s->perihal }}</td>
                            <td>{{ $s->alamat }}</td>
                            <td>{{ $s->tanggal }}</td>
                            <td><a href="dokK/{{ $s->dok }}" target="blank"><button class="btn btn-info btn-sm"><span data-feather="eye"></span></button></a></td>                   
                            <td>
                                <a href="{{ route('surat_keluar.edit',$s->id) }}" class="btn btn-sm btn-secondary"><span data-feather="edit"></span></a>
                              </td>
                              <td>
                                <form action="{{ route('surat_keluar.destroy',$s->id) }}" method="post">
                                  @csrf
                                  @method("DELETE")
                                  <button type="submit" class="btn btn-warning btn-sm"><span data-feather="delete"></button>
                                </form>                              
                              </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      <div class="d-flex justify-content-center">
                        {{ $surat->links() }}
                      </div>
                </div>
            </div>
          </div>
          <footer class="footer mt-auto fixed-bottom py-3" style="background-color: #4c5b3c ;color: white">
            <div class="container text-center">
              <span class="text-muted">&copy; Penuh Cinta Ihsan Rizaldi</span>
            </div>
          </footer>
</x-app-layouts>