<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practica2";

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtener la acción de la solicitud
$action = $_REQUEST['action'];

// Realizar operaciones CRUD según la acción
switch ($action) {
    case "getTasks":
        $completed = isset($_GET['completed']) ? $_GET['completed'] : null;
        getTasks($conn, $completed);
        break;
    case "addTask":
        $taskName = $_POST['taskName'];
        addTask($conn, $taskName);
        break;
    case "toggleTaskStatus":
        $taskId = $_POST['taskId'];
        toggleTaskStatus($conn, $taskId);
        break;
        // Puedes agregar más casos según sea necesario (editar, eliminar, etc.)
}

// Cerrar la conexión a la base de datos
$conn->close();

// Obtener y mostrar tareas
function getTasks($conn, $completed = null)
{
    // Utilizamos una consulta preparada para evitar problemas de seguridad
    $sql = "SELECT * FROM tasks";
    if ($completed !== null) {
        $sql .= " WHERE completed = ?";
    }

    $stmt = $conn->prepare($sql);

    // Si hay un parámetro, vincúlalo a la consulta preparada
    if ($completed !== null) {
        $stmt->bind_param("i", $completed);
    }

    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<li class="list-group-item ' . ($row['completed'] ? 'completed-task' : '') . '" data-task-id="' . $row['id'] . '">' . htmlspecialchars($row['task_name']) . '</li>';
        }
    } else {
        echo '<li class="list-group-item">No tasks found</li>';
    }

    $stmt->close();
}

// Agregar nueva tarea
function addTask($conn, $taskName)
{
    $sql = "INSERT INTO tasks (task_name, completed, created_at) VALUES ('$taskName', 0, NOW())";
    $conn->query($sql);
}

// Marcar tarea como completada o pendiente
function toggleTaskStatus($conn, $taskId)
{
    $sql = "UPDATE tasks SET completed = NOT completed WHERE id = $taskId";
    $conn->query($sql);
}
