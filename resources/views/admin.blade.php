
<!-- ADMIN LOBBY -->
<section class="hero container">
  <div class="row text-center mb-5">
    <div class="col">
      <h1 class="display-4 fw-bold">Panel de Administración</h1>
      <p class="lead text-secondary">Gestiona usuarios, cursos y configuraciones del sistema</p>
    </div>
  </div>

  <div class="row g-4">

    <!-- Usuarios -->
    <div class="col-md-4">
      <div class="admin-card p-4 text-center h-100">
        <div class="icon">👥</div>
        <h4 class="mt-3">Usuarios</h4>
        <p class="text-secondary">Crear, editar y eliminar usuarios del sistema.</p>
        <button onclick="window.location.href='{{ route('students.index') }}'" class="btn btn-admin mt-3">Gestionar</button>
      </div>
    </div>

    <!-- Cursos -->
    <div class="col-md-4">
      <div class="admin-card p-4 text-center h-100">
        <div class="icon">📚</div>
        <h4 class="mt-3">Cursos</h4>
        <p class="text-secondary">Administrar cursos, módulos y contenidos.</p>
        <button class="btn btn-admin mt-3">Administrar</button>
      </div>
    </div>

    

  </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


