<x-app-layouts title="Home | Apps">
    <div class="container">
        <div class="row text-center mt-3">
          @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
          @endif     
                <h2>Selamat Datang {{ Auth::user()->name }}</h2>
            <div class="row mt-3">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Surat Masuk</h5>
                      <p class="card-text">Anda Dapat Menambah, Menghapus, Mengedit, Mengupload, Dan Mendownload Data Surat Masuk</p>
                      <a href="{{ route('surat_masuk.index') }}" class="btn btn-primary" style="background-color: #4c5b3c ;color: white"><span data-feather="archive"></span> Masuk</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Surat Keluar</h5>
                      <p class="card-text">Anda Dapat Menambah, Menghapus, Mengedit, Mengupload, Dan Mendownload Data Surat Keluar</p>
                      <a href="{{ route('surat_keluar.index') }}" class="btn btn-primary" style="background-color: #4c5b3c ;color: white"><span data-feather="archive"></span> Masuk</a>
                    </div>
                </div>
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