<?php
include 'head.php';
?>
<body class="bg-custom">
<div class="navbar">
    <div class="icon mr-4"><img src="assets/images/kralogo1.png" alt="logo" class="icon-image"></div>
    <a href="javascript:void(0)" onclick="navigateTo('home')">Home</a>
    <a href="javascript:void(0)" onclick="navigateTo('student')">Student</a>
    <a href="javascript:void(0)" onclick="navigateTo('institutions')">Institutions</a>
    <a href="javascript:void(0)" onclick="navigateTo('staff')">Staff</a>
</div>

<div id="home" class="content">
    <h1>Select a category from the below options</h1>
    <div class="home-cards">
        <div class="card" onclick="navigateTo('student')">
<!--            <img src="student-image.jpg" alt="Student">-->
            <h2>Students</h2>
        </div>
        <div class="card" onclick="navigateTo('institutions')">
<!--            <img src="institutions-image.jpg" alt="Institutions">-->
            <h2>Institutions</h2>
        </div>
        <div class="card" onclick="navigateTo('staff')">
<!--            <img src="staff-image.jpg" alt="Staff">-->
            <h2>Staff</h2>
        </div>
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

<footer class="footer bg-dark text-white mt-5">
    <?php include 'footer.php'; ?>
</footer>

<script>
    function navigateTo(sectionId) {
        const sections = document.querySelectorAll('.content');
        sections.forEach(section => section.style.display = 'none');

        document.getElementById(sectionId).style.display = 'block';
    }



</script>
</body>
</html>