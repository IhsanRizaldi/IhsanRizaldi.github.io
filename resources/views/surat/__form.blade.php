                    @csrf
                    <div class="mb-3">
                      <label for="no_surat" class="form-label"><strong>No Surat :</strong></label>
                      <input type="text" class="form-control" value="{{ old('no_surat',$surat->no_surat) }}" id="no_surat" name="no_surat">
                      @error('no_surat')
                          <div class="span text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="perihal" class="form-label"><strong>Perihal :</strong></label>
                      <input type="text" class="form-control" value="{{ old('perihal',$surat->perihal) }}" id="perihal" name="perihal">
                      @error('perihal')
                          <div class="span text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="alamat" class="form-label"><strong>Alamat :</strong></label>
                      <input type="text" class="form-control" value="{{ old('alamat',$surat->alamat) }}" id="alamat" name="alamat">
                      @error('alamat')
                          <div class="span text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="tanggal" class="form-label"><strong>Tanggal :</strong></label>
                      <input type="date" class="form-control" value="{{ old('tanggal',$surat->tanggal) }}" id="tanggal" name="tanggal">
                      @error('tanggal')
                          <div class="span text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="dok" class="form-label"><strong>Dok :</strong></label>
                      <input type="file" class="form-control" id="dok" name="dok">
                      @error('dok')
                          <div class="span text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">{{ $submit }}</button>