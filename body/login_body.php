<div class="container my-5 d-flex justify-content-center">
      <div class="login-form text-center">
        <div class="icon mb-4">
          <img src="img/login.png" alt="Icono de usuario" height="100" />
        </div>
        <form>
          <div class="form-group">
            <label for="userType">TIPO DE USUARIO:</label>
            <select id="userType" class="form-control">
              <option>Alumno</option>
              <option>Profesor</option>
              <option>Administrador</option>
            </select>
          </div>
          <div class="form-group">
            <label for="username">USUARIO:</label>
            <input
              type="text"
              id="username"
              class="form-control"
              placeholder="111828"
            />
          </div>
          <div class="form-group">
            <label for="password">CONTRASEÑA:</label>
            <input
              type="password"
              id="password"
              class="form-control"
              placeholder="********"
            />
          </div>
          <button type="submit" class="btn login-btn btn-block">Acceder</button>
        </form>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
