<x-app-layouts title="Tambah {{ $nama }} | Apps">
    <div class="container">
        <div class="row">
            <h2 style="text-align: center; margin-top: 3px">Tambah Surat {{ $nama }}</h2>
            <div class="container mb-3">
                <a href="{{ route('surat_keluar.index') }}" class="btn btn-primary"><span data-feather="arrow-left"></span></a>
            </div>
            <div class="card">
                <form action="{{ route('surat_keluar.store') }}" method="post" class="mt-3 mb-3" enctype="multipart/form-data">
                    @include('surat.__form')
                  </form>
            </div>
        </div>
    </div>
</x-app-layouts>