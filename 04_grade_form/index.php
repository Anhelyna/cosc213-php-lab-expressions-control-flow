
<?php
$score = filter_input(INPUT_GET, 'score', FILTER_VALIDATE_INT);
$score = $score ?? null;
function letter_grade(?int $s): ?string {
if ($s === null || $s < 0 || $s > 100) return null;
if ($s >= 90) return 'A';
    if ($s >= 85) return 'A-';
    if ($s >= 80) return 'B+';
    if ($s >= 75) return 'B';
    if ($s >= 70) return 'B-';
    if ($s >= 65) return 'C+';
    if ($s >= 60) return 'C';
    if ($s >= 55) return 'C-';
    if ($s >= 50) return 'D+';
    if ($s >= 45) return 'D';
    return 'F';
}

function remarks(string $grade): string {
    switch ($grade) {
        case 'A':
            return "Excellent work!";
        case 'A-':
            return "Great job! Just a tad more effort next time.";
        case 'B+':
            return "Good job! Keep it up.";
        case 'B':
            return "Well done, but there's room for improvement.";
        case 'B-':
            return "Not bad, but try to focus more.";
        case 'C+':
            return "Decent, but you could do better.";
        case 'C':
            return "You passed, but consider working harder.";
        case 'C-':
            return "You can do better. Please put in more effort.";
        case 'D+':
            return "You barely passed. Please review the material.";
        case 'D':
            return "You passed, but just barely.";
        case 'F':
            return "Failure. Please seek help and review the material.";
        default:
            return "";
    }
}

$grade = letter_grade($score);
?>

<!doctype html>
<html>
<head><meta charset="utf-8"><title>Grade Calculator</title></head>
<body>
<h1>Grade Calculator</h1>
<form>
    <label>Score (0–100):
        <input name="score" type="number" min="0" max="100"
        value="<?= htmlspecialchars($score !== null ? (string)$score : '') ?>">
    </label>
    <button>Compute</button>
</form>

<?php if ($score === null): ?>
    <p>Enter a score to see the letter grade.</p>
<?php elseif ($grade === null): ?>
    <p>Invalid score. Please enter 0–100.</p>
<?php else: ?>
    <p>Your grade is <strong><?= $grade ?></strong>.</p>
    <p><?= remarks($grade) ?></p>
    <?php if ($grade === 'F'): ?>
        <p>Consider office hours for support.</p>
    <?php endif; ?>
<?php endif; ?>
</body>
</html>

