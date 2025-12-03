<?php
// send-mail-investor.php (Para Investors)
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    header('Content-Type: application/json');
    echo json_encode(["status" => "error", "message" => "Method not allowed"]);
    exit;
}

function field($key) {
    return isset($_POST[$key]) ? trim($_POST[$key]) : "";
}

// 1. Capturamos campos específicos de Investors
$name        = strip_tags(field("name"));
$email       = filter_var(field("email"), FILTER_SANITIZE_EMAIL);
$thesis      = strip_tags(field("thesis"));
$geographies = strip_tags(field("geographies"));
$ticket      = strip_tags(field("ticket"));

// 2. Validación
if ($name === "" || $email === "") {
    http_response_code(400);
    header('Content-Type: application/json');
    echo json_encode(["status" => "error", "message" => "Missing required fields"]);
    exit;
}

// 3. Configura tu email
$to      = "tucorreo@tudominio.com"; // CAMBIAR ESTO
$subject = "New Investor Network Request: $name";

// 4. Cuerpo del correo diferenciado
$body = "New Investor Network request from EUSA website:\n\n"
      . "Name: $name\n"
      . "Email: $email\n\n"
      . "Investment Thesis:\n$thesis\n\n"
      . "Geographies: $geographies\n"
      . "Ticket Size: $ticket\n";

$headers  = "From: EUSA Website <no-reply@eusa-partners.com>\r\n";
$headers .= "Reply-To: $name <$email>\r\n";

$sent = mail($to, $subject, $body, $headers);

header('Content-Type: application/json');
if ($sent) {
    echo json_encode(["status" => "ok"]);
} else {
    http_response_code(500);
    echo json_encode(["status" => "error", "message" => "Mail not sent"]);
}
?>