<x-app-layouts title="Ubah {{ $nama }} | Apps">
    <div class="container">
        <div class="row">
            <h2 style="text-align: center; margin-top: 3px">Ubah Surat {{ $nama }}</h2>
            <div class="container mb-3">
                <a href="{{ route('surat_masuk.index') }}" class="btn btn-primary"><span data-feather="arrow-left"></span></a>
            </div>
                <div class="card">
                <form action="{{ route('surat_masuk.update', $surat->id) }}" method="post" enctype="multipart/form-data" class="mt-3 mb-3">
                    @method('put')
                    @include('surat.__form')
                  </form>
            </div>
        </div>
    </div>
</x-app-layouts>