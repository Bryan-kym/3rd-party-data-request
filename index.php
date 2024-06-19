<?php
include 'head.php';
?>
<body class="bg-custom">
<div class="navbar">
    <a href="javascript:void(0)" onclick="navigateTo('home')">Home Page</a>
    <a href="javascript:void(0)" onclick="navigateTo('student')">Student</a>
    <a href="javascript:void(0)" onclick="navigateTo('institutions')">Institutions</a>
    <a href="javascript:void(0)" onclick="navigateTo('staff')">Staff</a>
</div>

<div id="home" class="content">
    <h1>Welcome to the Home Page</h1>
    <div class="home-buttons">
        <button onclick="navigateTo('student')">Student</button>
        <button onclick="navigateTo('institutions')">Institutions</button>
        <button onclick="navigateTo('staff')">Staff</button>
    </div>
</div>

<?php
include 'students.php';
?>


<?php
include 'instituitions.php';
?>


<?php
include 'staff.php';
?>

<script>
    function navigateTo(sectionId) {
        const sections = document.querySelectorAll('.content');
        sections.forEach(section => section.style.display = 'none');

        document.getElementById(sectionId).style.display = 'block';
    }
</script>
</body>
</html>