<?php
// Mini-Proyecto: Sistema de Blog Simple

class Comentario {
    public $usuario;
    public $texto;

    public function __construct($usuario, $texto) {
        $this->usuario = $usuario;
        $this->texto = $texto;
    }

    public function mostrar() {
        return "\t- {$this->usuario}: " . htmlspecialchars($this->texto);
    }
}

class Post {
    public $titulo;
    public $contenido;
    private $comentarios = [];

    public function __construct($titulo, $contenido) {
        $this->titulo = $titulo;
        $this->contenido = $contenido;
    }

    public function agregarComentario(Comentario $comentario) {
        $this->comentarios[] = $comentario;
    }

    public function mostrar() {
        $html = "<article class='post'>";
        $html .= "<h2>" . htmlspecialchars($this->titulo) . "</h2>";
        $html .= "<p>" . nl2br(htmlspecialchars($this->contenido)) . "</p>";
        
        if (!empty($this->comentarios)) {
            $html .= "<h3>Comentarios:</h3>";
            $html .= "<ul>";
            foreach ($this->comentarios as $comentario) {
                $html .= "<li>" . $comentario->mostrar() . "</li>";
            }
            $html .= "</ul>";
        }
        $html .= "</article>";
        return $html;
    }
}

// --- Uso del sistema ---

// Crear un nuevo post
$miPost = new Post(
    "Mi Primer Post sobre POO", 
    "La Programación Orientada a Objetos es un paradigma muy potente.\nPermite organizar el código de una forma más limpia y reutilizable."
);

// Agregar comentarios al post
$miPost->agregarComentario(new Comentario("Ana", "¡Gran artículo! Muy claro."));
$miPost->agregarComentario(new Comentario("Pedro", "No estoy de acuerdo con todo, pero buen punto."));
$miPost->agregarComentario(new Comentario("Luis", "<script>alert('xss')</script>")); // Comentario malicioso

?>
<!DOCTYPE html>
<html>
<head>
    <title>Mini-Blog con POO</title>
    <style>
        body { font-family: sans-serif; background-color: #f4f4f4; color: #333; }
        .post { max-width: 800px; margin: 20px auto; padding: 20px; background-color: #fff; border: 1px solid #ddd; border-radius: 5px; }
        .post h2 { color: #0056b3; }
        .post ul { list-style-type: none; padding-left: 20px; }
        .post li { background-color: #f9f9f9; padding: 10px; border-left: 3px solid #0056b3; margin-bottom: 5px; }
    </style>
</head>
<body>

<?php
// Mostrar el post y sus comentarios
echo $miPost->mostrar();
?>

</body>
</html>
