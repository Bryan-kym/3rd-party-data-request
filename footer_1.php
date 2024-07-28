<div class="contain py-4">
    <div class="text-center">
        <p>&copy; Kenya Revenue Authority <span id="currentYear"></span> |
            <a href="assets/images/KRA_WEBSITE_PRIVACY_POLICY_2018.pdf" class="link-style">Privacy Policy</a> |
            <a href="assets/images/Corporate_Website_Terms_Conditions.pdf" class="link-style">Terms and Conditions</a>
        </p>
    </div>
</div>
<script>
    function displayCurrentYear() {
        let currentYear = new Date().getFullYear();
        document.getElementById('currentYear').textContent = currentYear;
    }

    window.onload = function() {
        displayCurrentYear();
    }
</script>
