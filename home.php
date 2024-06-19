<?php
include 'head.php';
?>
<body>
<div class="container mt-5">
    <div class="selection mx-auto half card" id="selection">
        <h2>Registration Form</h2>
        <div class="form-group">
            <label for="userType">Please select am option from below</label>
            <select class="form-control mx-auto" id="userType" onchange="toggleForms()">
                <option value="">Select</option>
                <option value="staff">Staff</option>
                <option value="nonstaff">Non-Staff</option>
            </select>
        </div>
    </div>


    <!-- Staff Form -->
    <form id="staffForm" class="hidden">
        <div class="card mt-10 bg-inverse-dark">
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="staffName" placeholder="Enter your full names">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="middleName">Middle Name</label>
                        <input type="text" class="form-control" id="staffName" placeholder="Enter your full names">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="staffName" placeholder="Enter your full names">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="staffID">ID Number</label>
                <input type="text" class="form-control" id="staffID" placeholder="Enter your ID number">
            </div>
            <div class="form-group">
                <label for="staffNumber">Staff Number</label>
                <input type="text" class="form-control" id="staffNumber" placeholder="Enter your staff number">
            </div>
            <div class="form-group">
                <label for="staffEmail">Email Address</label>
                <input type="email" class="form-control" id="staffEmail" placeholder="Enter your email address">
            </div>
            <div class="form-group">
                <label for="staffDepartment">Department</label>
                <input type="text" class="form-control" id="staffDepartment" placeholder="Enter your department">
            </div>
            <div class="form-group">
                <label for="staffDivision">Division</label>
                <input type="text" class="form-control" id="staffDivision" placeholder="Enter your division">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

    <!-- Non-Staff Form -->
    <form id="nonStaffForm" class="hidden">
        <div class="form-group">
            <label for="nonStaffName">Full Names</label>
            <input type="text" class="form-control" id="nonStaffName" placeholder="Enter your full names">
        </div>
        <div class="form-group">
            <label for="nonStaffID">ID/Passport/Student Registration Number</label>
            <input type="text" class="form-control" id="nonStaffID" placeholder="Enter your ID/Passport/Student registration number">
        </div>
        <div class="form-group">
            <label for="nonStaffEmail">Email Address</label>
            <input type="email" class="form-control" id="nonStaffEmail" placeholder="Enter your email address">
        </div>
        <div class="form-group">
            <label for="nonStaffPhone">Phone Number</label>
            <input type="text" class="form-control" id="nonStaffPhone" placeholder="Enter your phone number">
        </div>
        <div class="form-group">
            <label for="nonStaffOrg">Name of Organisation/Institution</label>
            <input type="text" class="form-control" id="nonStaffOrg" placeholder="Enter the name of your organisation/institution">
        </div>
        <div class="form-group">
            <label for="nonStaffOrgPhone">Organisation/Institution Phone Number</label>
            <input type="text" class="form-control" id="nonStaffOrgPhone" placeholder="Enter the phone number of your organisation/institution">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- Bootstrap and jQuery JS -->
<script>
    function toggleForms() {
        var userType = document.getElementById('userType').value;
        var staffForm = document.getElementById('staffForm');
        var nonStaffForm = document.getElementById('nonStaffForm');
        var selection = document.getElementById('selection');

        // selection.style.width = '50%';

        if (userType === 'staff') {
            staffForm.classList.remove('hidden');
            nonStaffForm.classList.add('hidden');
            selection.classList.remove('half');
            selection.classList.add('full');

        } else if (userType === 'nonstaff') {

            staffForm.classList.add('hidden');
            nonStaffForm.classList.remove('hidden');
            selection.classList.remove('half');
            selection.classList.add('full');
        } else {
            staffForm.classList.add('hidden');
            nonStaffForm.classList.add('hidden');
            selection.classList.remove('full');
            selection.classList.add('half');
            selection.classList.add('mx-auto');
            selection.classList.add('align-middle');
        }
    }
</script>
</body>
