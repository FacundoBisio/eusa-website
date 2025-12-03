<?php
// send-mail.php (Para Founders)
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    header('Content-Type: application/json');
    echo json_encode(["status" => "error", "message" => "Method not allowed"]);
    exit;
}

function field($key) {
    return isset($_POST[$key]) ? trim($_POST[$key]) : "";
}

// 1. Capturamos TODOS los campos del HTML de Founders
$name     = strip_tags(field("name"));
$email    = filter_var(field("email"), FILTER_SANITIZE_EMAIL);
$location = strip_tags(field("location")); 
$startup  = strip_tags(field("startup"));
$stage    = strip_tags(field("stage"));    
$funding  = strip_tags(field("funding"));  
$website  = strip_tags(field("website"));
$blocker  = strip_tags(field("blocker"));  
$message  = strip_tags(field("message"));

// 2. Validación básica
if ($name === "" || $email === "" || $message === "") {
    http_response_code(400);
    header('Content-Type: application/json');
    echo json_encode(["status" => "error", "message" => "Missing required fields"]);
    exit;
}

// 3. Configura aquí tu email real
$to      = "sebastian@eusa-partners.com"; // receptor del correo
$subject = "New Founder Application: $startup";

// 4. Construimos el cuerpo del correo con todos los datos
$body = "New application from the EUSA website (FOUNDER):\n\n"
      . "Name: $name\n"
      . "Email: $email\n"
      . "Location: $location\n"
      . "Startup Name: $startup\n"
      . "Stage: $stage\n"
      . "Funding Target: $funding\n"
      . "Pitch Deck / Website: $website\n"
      . "Biggest Blocker: $blocker\n\n"
      . "Why EUSA / Message:\n$message\n";

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