<?php include("../includes/header.php"); ?>
<link rel="stylesheet" type="text/css" href="../assets/css/projets.css">
<?php     
include("../config.php");
$sql = "SELECT * FROM projets";
$result = $conn->query($sql);
?>

<div class="projets-container">
<h2>My Projets</h2>

    <?php while ($row = $result->fetch_assoc()): ?>
        <div class="projet-card">
            <h3><?php echo htmlspecialchars($row['titre']); ?></h3>
            <p><?php echo nl2br(htmlspecialchars($row['description'])); ?></p>
            <img src="../assets/images/<?php echo htmlspecialchars($row['image']); ?>" alt="Projet">
            <a href="<?php echo htmlspecialchars($row['lien']); ?>" target="_blank">See more</a>
        </div>
    <?php endwhile; ?>
</div>

<?php include("../includes/footer.php"); ?>
