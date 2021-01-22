<?php
require "db_connect.php";

$statement = $pdo->prepare('SELECT * FROM admin ORDER BY adminId DESC');

$statement->execute();
$admin = $statement->fetchAll(PDO::FETCH_ASSOC);


include_once 'includes/admin_header.php';

?>

<!-- ADMIN-CONTENT -->

<div class="admin-content">

    <h1>MIN-BMS | ADMIN</h1>

    <?php foreach ($admin as $i => $admin) : ?>
        <h3>Admin Name : <?php echo $admin['admin_name']; ?></h3>
        <h3>Admin ID : <a href="#"><?php echo $admin['user_id']; ?></a> </h3>


        <p>This website is build and designed by the
            admin and can only person to control the website. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem id quae, voluptate architecto obcaecati esse nesciunt! Voluptates rerum et, ducimus, veniam architecto itaque ipsam unde molestias, sit cum vero nobis.</p>

    <?php endforeach; ?>

    <button class="cancel">Log out</button>



</div>

<?php include_once 'includes/admin_footer.php'; ?>