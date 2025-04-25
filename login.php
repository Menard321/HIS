<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <title>Login Page</title>
  </head>
  <body class="d-flex justify-content-center align-items-center vh-100">
    <div class="border p-4 rounded shadow bg-white" style="width: 350px">
      <form>
        <div class="d-flex justify-content-center">
          <h2>Login</h2>
        </div>
        <div class="mb-4">
          <label for="exampleInputEmail1" class="form-label"
            >Email address / Username</label
          >
          <input
            type="email"
            class="form-control"
            id="exampleInputEmail1"
            aria-describedby="emailHelp"
            placeholder="email / username"
          />
        </div>
        <div class="mb-4">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input
            type="password"
            class="form-control"
            id="exampleInputPassword1"
            placeholder="password"
          />
        </div>
        <div class="mb-4 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" />
          <label class="form-check-label" for="exampleCheck1"
            >Remember me</label
          >
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>

        <p class="d-flex justify-content-center mb-3">
          Don't have an account? <a href="register.html">Register</a>
        </p>
        <p class="d-flex text-secondary justify-content-center">
          <a href="reset.html" class="text-decoration-none text-secondary">
            Forgot password?
          </a>
        </p>
      </form>
    </div>
  </body>
</html>
