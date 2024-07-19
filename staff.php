<div id="staff" class="content mx-10 bg-white mt-3 rounded-div" style="display:none;">
    <h1 class="headsss">KRA Staff Form</h1>
    <form id="staffForm" class="">
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="First name" required>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="middleName">Middle Name</label>
                    <input type="text" class="form-control" id="middleName" placeholder="Middle name" required>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Last name" required>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="staffID">ID Number</label>
                    <input type="text" class="form-control" id="staffID" placeholder="ID" required>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="staffNumber">Staff Number</label>
                    <input type="text" class="form-control" id="staffNumber" placeholder="K000.../T..." required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="staffEmail">Email Address</label>
                    <input type="email" class="form-control" id="staffEmail" placeholder="...@kra.go.ke" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="staffDepartment">Department</label>
                    <input type="text" class="form-control" id="staffDepartment" placeholder="Enter your department" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="staffDivision">Division</label>
                    <input type="text" class="form-control" id="staffDivision" placeholder="Enter your division" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <button type="button" id="nextButtonStaff" class="btn btn-primary btn-block">Next</button>
            </div>
            <div class="col-4"></div>
        </div>
    </form>

</div>

<?php
include 'data-request.php'
?>

