<?php
$pageTitle = "بيانات المستشفى";
include '../includes/header.php';
?>

<div class="app-container">
    <?php include '../includes/sidebar.php'; ?>
    
    <main class="main-content">
        <header class="main-header">
            <button id="sidebarToggle" class="sidebar-toggle">
                <i class="fas fa-bars"></i>
            </button>
            <h1><?php echo $pageTitle; ?></h1>
            <div class="header-actions">
                <button id="darkModeToggle" class="btn-icon">
                    <i class="fas fa-moon"></i>
                </button>
                <button id="userMenuToggle" class="btn-icon">
                    <i class="fas fa-user"></i>
                </button>
            </div>
            <link rel="stylesheet" href="../assets/css/style.css">
        </header>
        
        <div class="content">
            <h2>بيانات المستشفى</h2>
            <p>هنا يمكنك عرض وتحديث معلومات المستشفى.</p>
            <!-- Add your hospital info content here -->
        </div>
    </main>
</div>

<?php include '../includes/footer.php'; ?>

