<?php include "shared/header.php"; ?>
    <!--  main -->
    <main>
        <div class="accordion" id="acordeon">

            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta1" aria-expanded="false" aria-controls="pregunta1">
                    ¿Quienes Somos?
                </button>
                </h2>
                <div id="pregunta1" 
                    class="accordion-collapse collapse show" 
                    data-bs-parent="#acordeon">
                    <div class="accordion-body">
                        <strong>Estudiantes.</strong>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta2" aria-expanded="false" aria-controls="pregunta2">
                    ¿Que queremos?
                </button>
                </h2>
                <div id="pregunta2"
                    class="accordion-collapse collapse" 
                    data-bs-parent="#acordeon">
                    <div class="accordion-body">
                        <strong>Que vengan Morras Chidas.</strong>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta3" aria-expanded="false" aria-controls="pregunta3">
                    ¿Eri gei?
                </button>
                </h2>
                <div id="pregunta3" 
                    class="accordion-collapse collapse" 
                    data-bs-parent="#acordeon">
                    <div class="accordion-body">
                        <strong>0_o?</strong>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Seccion de mi main -->
    <?php include "shared/footer.php"; ?>