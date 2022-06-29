<x-app-layouts title="Login | APPs">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header text-center" style="background-color: #4c5b3c ;color: white">
                        <h2>Login</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <form>
                                <div class="mb-3">
                                  <label for="email" class="form-label">Email :</label>
                                  <input type="email" class="form-control" id="email" name="email">
                                    @error('email')
                                        <div class="span text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                  <label for="password" class="form-label">Password :</label>
                                  <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <button type="submit" class="btn" style="background-color: #4c5b3c; color: white" >Login</button>
                              </form>
                        </form>
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