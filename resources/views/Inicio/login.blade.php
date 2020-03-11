@extends('layout.main')
@section('contenido')
<div class="container space-2">
      <form class="js-validate w-md-75 w-lg-50 mx-md-auto">
        <!-- Title -->
        <div class="mb-7">
          <!-- <h2 class="h3 text-primary font-weight-normal mb-0">Welcome <span class="font-weight-semi-bold">back</span></h2>
          <p>Login to manage your account.</p> -->
          <h1 class="logo-name" style="color: #e6e6e6;font-size: 180px;font-weight: 800;align-content: center;text-align: center;">UTC</h1>
          <p style="text-align: center;">Sistema Intergal Universitario (SIU)</p>
        </div>
        <!-- End Title -->

        <!-- Form Group -->
        <div class="js-form-message form-group">
          <label class="form-label" for="signinSrEmail">Nomina/Matricula/Correo</label>
          <input type="email" class="form-control" name="email" id="signinSrEmail" placeholder="Nomina/Matricula/Correo" aria-label="Email address" required
                 data-msg="Please enter a valid email address."
                 data-error-class="u-has-error"
                 data-success-class="u-has-success">
        </div>
        <!-- End Form Group -->

        <!-- Form Group -->
        <div class="js-form-message form-group">
          <label class="form-label" for="signinSrPassword">
            <span class="d-flex justify-content-between align-items-center">
            Contraseña
              <!-- <a class="link-muted text-capitalize font-weight-normal" href="recover-account-simple.html">Forgot Password?</a> -->
            </span>
          </label>
          <input type="password" class="form-control" name="password" id="signinSrPassword" placeholder="********" aria-label="********" required
                 data-msg="Your password is invalid. Please try again."
                 data-error-class="u-has-error"
                 data-success-class="u-has-success">
        </div>
        <!-- End Form Group -->

        <!-- Button -->
        <div class="row align-items-center mb-5">
          <div class="col-6">
            <!-- <span class="small text-muted">Don't have an account?</span>
            <a class="small" href="signup-simple.html">Signup</a> -->
          </div>

          <div class="col-6 text-right">
            <button type="submit" class="btn btn-primary transition-3d-hover">Ingresar</button>
          </div>
        </div>
        <!-- End Button -->
      </form>
    </div>
@endsection
