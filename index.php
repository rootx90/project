<?php
$pageTitle = "Hospital Management System";
include 'includes/header.php';
?>
<div class="app-container">
    <!-- Sidebar -->
    <?php include 'includes/sidebar.php'; ?>
    
    <!-- Main Content -->
    <main class="main-content">
        <header class="main-header">
            <h1><?php echo $pageTitle; ?></h1>
            <div class="header-actions">
                <!-- Dark Mode Toggle Button -->
                <button id="darkModeToggle" class="btn-icon">
                    <i class="fas fa-moon"></i>
                </button>

                <!-- User Menu Toggle Button -->
                <button id="userMenuToggle" class="btn-icon">
                    <i class="fas fa-user"></i>
                </button>

                <!-- Sidebar Toggle Button -->
                <button id="sidebarToggle" class="btn-icon">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </header>
        
        <!-- Main Content Area -->
        <div class="content">
            <h2>مرحبا بكم في نظام إدارة المستشفى</h2>
            <p>اختر خيارًا من الشريط الجانبي للبدء.</p>
        </div>
    </main>

    <!-- Include Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Include Custom Styles -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Include JavaScript -->
    <script src="assets/js/main.js" type="text/javascript"></script>
</div>
<?php include 'includes/footer.php'; ?>