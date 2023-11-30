$(document).ready(function () {
    // Cargar tareas al cargar la página
    loadTasks();

    // Enviar formulario para agregar nueva tarea
    $("#taskForm").submit(function (event) {
        event.preventDefault();
        var taskName = $("#taskName").val();
        addTask(taskName);
    });

    // Marcar tarea como completada o eliminar tarea
    $("#taskList").on("click", ".list-group-item", function () {
        var taskId = $(this).data("task-id");
        toggleTaskStatus(taskId);
    });

    // Filtros para mostrar tareas completadas o pendientes
    $("#showAll").click(function () {
        loadTasks();
    });

    $("#showCompleted").click(function () {
        loadTasks(true);
    });

    $("#showPending").click(function () {
        loadTasks(false);
    });

    // Cargar tareas
    function loadTasks(completed = null) {
        $.ajax({
            url: "backend.php",
            type: "GET",
            data: { action: "getTasks", completed: completed },
            success: function (data) {
                $("#taskList").html(data);
            }
        });
    }

    // Agregar tarea
    function addTask(taskName) {
        $.ajax({
            url: "backend.php",
            type: "POST",
            data: { action: "addTask", taskName: taskName },
            success: function () {
                loadTasks();
                $("#taskForm")[0].reset();
            }
        });
    }

    // Marcar tarea como completada o pendiente
    function toggleTaskStatus(taskId) {
        $.ajax({
            url: "backend.php",
            type: "POST",
            data: { action: "toggleTaskStatus", taskId: taskId },
            success: function () {
                loadTasks();
            }
        });
    }
});