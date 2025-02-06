<?php
require '../vendor/autoload.php'; 
use OpenAI\Client;
use OpenAI\OpenAIApi;
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();
$client = OpenAI::client($_ENV['OPENAI_API_KEY']);

$response = $client->chat()->create([
    'model' => 'gpt-3.5-turbo', // Vous pouvez utiliser gpt-4 si disponible
    'messages' => [
        ['role' => 'system', 'content' => 'You are a translation assistant.'],
        ['role' => 'user', 'content' => "Translate the following text to {$targetLanguage}: {$text}"],
    ],
    'temperature' => 0.3, // Optionnel : contrôle la créativité de la réponse
]);
echo $response['choices'][0]['message']['content'];

?>
