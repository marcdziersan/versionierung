<?php
session_start();
define('VERSION', '2.4.0');

require_once __DIR__ . '/classes/User.php';
$messages = require __DIR__ . '/lang/messages.php';

$lang = $_GET['lang'] ?? 'de';
$t = $messages[$lang] ?? $messages['de'];

$dbFile = __DIR__ . '/data/users.json';
if (!file_exists($dbFile)) file_put_contents($dbFile, json_encode([]));

// Funktionen
function loadUsers($file) {
    $data = json_decode(file_get_contents($file), true);
    return is_array($data) ? $data : [];
}

function saveUser($file, $newUser) {
    $users = loadUsers($file);
    $users[] = $newUser;
    file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

// Variablen
$name = $_POST['name'] ?? '';
$language = $_POST['language'] ?? 'en';
$search = $_GET['search'] ?? '';
$greetingOutput = '';
$timeGreetingOutput = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (trim($name) === '') {
        $error = 'Bitte gib einen Namen ein.';
    } else {
        $user = new User($name, $language);
        $greetingOutput = $user->greet();
        $timeGreetingOutput = $user->timeBasedGreeting();

        $entry = [
            'name' => $user->getName(),
            'language' => $user->getLanguage(),
            'greeting' => $greetingOutput,
            'timeGreeting' => $timeGreetingOutput,
            'timestamp' => date('Y-m-d H:i:s')
        ];
        $_SESSION['last_user'] = $entry;
        saveUser($dbFile, $entry);
    }
}

$allUsers = loadUsers($dbFile);
if ($search) {
    $allUsers = array_filter($allUsers, fn($u) => str_contains(strtolower($u['name']), strtolower($search)));
}
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <title><?= $t['title'] ?> (v<?= VERSION ?>)</title>
    <style>
        body { font-family: sans-serif; padding: 20px; background: #f9f9f9; }
        form, .output, .controls { background: white; padding: 1em; margin-bottom: 1em; border-radius: 8px; }
        table { width: 100%; border-collapse: collapse; margin-top: 1em; }
        th, td { padding: 0.5em; border: 1px solid #ccc; }
        .highlight { background-color: #e0f7ff; }
        .error { background: #ffe0e0; padding: 1em; color: darkred; }
    </style>
</head>
<body>

<h1><?= $t['title'] ?> (v<?= VERSION ?>)</h1>

<form method="POST">
    <label><?= $t['name'] ?>:<br><input type="text" name="name" value="<?= htmlspecialchars($name) ?>" required></label><br><br>
    <label><?= $t['language'] ?>:<br>
        <select name="language">
            <?php foreach (User::$supportedLanguages as $code): ?>
                <option value="<?= $code ?>" <?= $code === $language ? 'selected' : '' ?>><?= strtoupper($code) ?></option>
            <?php endforeach; ?>
        </select>
    </label><br><br>
    <button type="submit"><?= $t['submit'] ?></button>
</form>

<?php if ($error): ?>
    <div class="error"><?= $error ?></div>
<?php elseif ($greetingOutput): ?>
    <div class="output">
        <strong><?= $greetingOutput ?></strong><br>
        <?= $timeGreetingOutput ?>
    </div>
<?php endif; ?>

<div class="controls">
    <form method="GET" style="display: inline;">
        <input type="text" name="search" placeholder="<?= $t['search'] ?>" value="<?= htmlspecialchars($search) ?>">
        <button type="submit">🔍</button>
    </form>
    <a href="reset.php" onclick="return confirm('Daten wirklich löschen?')"><?= $t['reset'] ?></a> |
    <a href="export.php"><?= $t['export'] ?></a>
</div>

<?php if ($allUsers): ?>
    <table>
        <thead>
            <tr>
                <th><?= $t['name'] ?></th>
                <th><?= $t['language'] ?></th>
                <th>Begrüßung</th>
                <th>Zeit</th>
                <th>Datum</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($allUsers as $user): ?>
            <tr class="<?= ($_SESSION['last_user']['timestamp'] ?? '') === $user['timestamp'] ? 'highlight' : '' ?>">
                <td><?= htmlspecialchars($user['name']) ?></td>
                <td><?= htmlspecialchars($user['language']) ?></td>
                <td><?= htmlspecialchars($user['greeting']) ?></td>
                <td><?= htmlspecialchars($user['timeGreeting']) ?></td>
                <td><?= htmlspecialchars($user['timestamp']) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p><?= $t['no_users'] ?></p>
<?php endif; ?>

</body>
</html>
