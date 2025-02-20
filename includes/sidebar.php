<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<aside id="sidebar" class="sidebar">
    <div class="sidebar-header">
        <h2>Hospital Management</h2>
    </div>
    <nav class="sidebar-nav">
        <ul>
            <!-- Hospital Info Section -->
            <li class="<?php echo (in_array($current_page, ['hospital-info.php', 'service1.php', 'service2.php', 'service3.php'])) ? 'active' : ''; ?>">
                <a href="hospital-info.php" class="sidebar-link">
                    <i class="fas fa-hospital"></i>
                    <span>عن المستشفى</span>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="../pages/hospital-info.php">بيانات المستشفى</a></li>
                    <li><a href="#">الخدمات العلاجية</a></li>
                    <li><a href="#">الخدمات الادارية</a></li>
                    <li><a href="#">الاقسام الخدمية</a></li>
                </ul>
            </li>

            <!-- Daily Data -->
            <li class="<?php echo ($current_page == 'daily-data.php') ? 'active' : ''; ?>">
                <a href="daily-data.php" class="sidebar-link">
                    <i class="fas fa-calendar-day"></i>
                    <span>البيانات اليومية</span>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="../pages/daily-data.php">العيادات</a></li>
                    <li><a href="#">القسم الداخلي</a></li>
                    <li><a href="#">الرعايات</a></li>
                    <li><a href="#">الحضانات</a></li>
                </ul>
            </li>

            <!-- Monthly Data -->
            <li class="<?php echo (in_array($current_page, ['monthly-data.php', 'page2.php', 'page3.php', 'page4.php'])) ? 'active' : ''; ?>">
                <a href="monthly-data.php" class="sidebar-link">
                    <i class="fas fa-calendar-alt"></i>
                    <span>البيانات الشهرية</span>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="../pages/monthly-data.php">العيادات</a></li>
                    <li><a href="#">القسم الداخلي</a></li>
                    <li><a href="#">الرعايات</a></li>
                    <li><a href="#">الحضانات</a></li>
                </ul>
            </li>

            <!-- Dashboard -->
            <li class="<?php echo (in_array($current_page, ['dashboard.php', 'dashboard-month.php'])) ? 'active' : ''; ?>">
                <a href="../pages/dashboard.php" class="sidebar-link">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="../pages/dashboard.php">لوحة الادارة</a></li>
                    <li><a href="#">dashboard month</a></li>
                </ul>
            </li>

            <!-- Tables -->
            <li class="<?php echo (in_array($current_page, ['basic-table.php', 'data-table.php'])) ? 'active' : ''; ?>">
                <a href="#" class="sidebar-link">
                    <i class="fas fa-table"></i>
                    <span>Tables</span>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="#">Basic Table</a></li>
                    <li><a href="#">Data Table</a></li>
                </ul>
            </li>

            <!-- Forms -->
            <li class="<?php echo (in_array($current_page, ['basic-form.php', 'advanced-form.php'])) ? 'active' : ''; ?>">
                <a href="#" class="sidebar-link">
                    <i class="fas fa-edit"></i>
                    <span>Forms</span>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="#">Basic Form</a></li>
                    <li><a href="#">Advanced Form</a></li>
                </ul>
            </li>

            <!-- Charts -->
            <li class="<?php echo (in_array($current_page, ['chartjs.php', 'flot-chart.php', 'peity-chart.php'])) ? 'active' : ''; ?>">
                <a href="#" class="sidebar-link">
                    <i class="fas fa-chart-bar"></i>
                    <span>Charts</span>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="#">Chart JS</a></li>
                    <li><a href="#">Flot Chart</a></li>
                    <li><a href="#">Peity Chart</a></li>
                </ul>
            </li>

            <!-- Extras -->
            <li class="<?php echo (in_array($current_page, ['login.php', 'register.php', 'forget-pass.php'])) ? 'active' : ''; ?>">
                <a href="#" class="sidebar-link">
                <i class="fa-solid fa-file-alt"></i>                    <span>التقارير</span>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="#">البيانات اليومية</a></li>
                    <li><a href="#">البيانات الشهرية</a></li>
                    <li><a href="#">  </a></li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>
