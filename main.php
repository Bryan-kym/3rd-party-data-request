<?php
include 'head.php';
?>
<body class="bg-custom">
<div class="navbar">
    <div class="icon mr-4"><img src="assets/images/red.png" alt="logo" class="icon-image"></div>
</div>

<div class="cards">
    <form id="Form" class="">
        <div class="card">
            <div class="card-header" onclick="hideFunction()">
                <h5>Personal information</h5>
            </div>
            <div class="card-body" id="persInfo"
            ">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="firstName">First Name </label>
                        <input type="text" class="form-control" id="firstName" placeholder="First name" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="middleName">Middle Name</label>
                        <input type="text" class="form-control" id="middleName" placeholder="Middle name" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Last name" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="staffID">ID Number</label>
                        <input type="text" class="form-control" id="staffID" placeholder="ID" required>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="card">
    <div class="card-header" onclick="hideFunctionAdd()">
        <h5>Address </h5>
    </div>
    <div class="card-body" id="addCard">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="staffEmail">Email Address</label>
                    <input type="email" class="form-control" id="staffEmail" placeholder="abc@gmail.com" required>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="nonStaffPhone">Phone Number</label>
                    <input type="text" class="form-control" id="nonStaffPhone" placeholder="254712345678">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header" onclick="hideFunctionOrg()">
        <h5>Organization details</h5>
    </div>
    <div class="card-body" id="orgCard">
        <div class="row">
            <div class="col-4 radio">
                <div class="form-group">
                    <input type="radio" class="" id="companyOption" name="groupOptions">
                    <label for="companyOption">Private/Public companies</label>
                </div>
            </div>
            <div class="col-4 radio">
                <div class="form-group">
                    <input type="radio" class="" id="studentOption" name="groupOptions">
                    <label for="studentOption">Students</label>
                </div>
            </div>
            <div class="col-4 radio">
                <div class="form-group">
                    <input type="radio" class="" id="taxAgentOption" name="groupOptions">
                    <label for="taxAgentOption">Tax agents</label>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="nonStaffOrg">Institution Name</label>
                    <input type="text" class="form-control" id="nonStaffOrg" placeholder="Name of your institution">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="nonStaffOrgPhone">Institution Phone Number</label>
                    <input type="text" class="form-control" id="nonStaffOrgPhone" placeholder="Phone number">
                </div>
            </div>

        </div>
    </div>
</div>

<div class="card">
    <div class="card-header" onclick="hideFunctionDrf()">
        <h5>Data request details</h5>
    </div>
    <div class="card-body" id="drf">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="additionalInfo">Data source/ Data sets</label>
                    <textarea type="text" class="form-control" id="additionalInfo"
                              placeholder="Enter additional information"></textarea>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="additionalInfo">Specific data fields</label>
                    <input type="text" class="form-control" id="additionalInfo" placeholder="Station, period, amount..">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label class="form-label">From</label>
                    <input type="date" name="start_date" id="start_date" class="form-control input-box-custom"
                           placeholder="dd/mm/yyyy">
                </div>
            </div><!-- Col -->
            <div class="col-6">
                <div class="mb-3">
                    <label class="form-label">To</label>
                    <input type="date" name="end_date" id="end_date" class="form-control input-box-custom"
                           placeholder="dd/mm/yyyy">
                </div>
            </div><!-- Col-->
            <div class="col-12">
                <div class="form-group">
                    <label for="additionalInfo">Purpose/expected outcome of the data required</label>
                    <textarea type="text" class="form-control" id="additionalInfo"
                              placeholder="Give reasons for the data request"></textarea>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header" onclick="hideFunctionAtt()">
        <h5>Attachments </h5>
    </div>
    <div class="card-body" id="attCard">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="attachment1">Attachment 1</label>
                    <input type="file" class="form-control" id="attachment1">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="attachment2">Attachment 2</label>
                    <input type="file" class="form-control" id="attachment2">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="attachment3">Attachment 3</label>
                    <input type="file" class="form-control" id="attachment3">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="attachment3">Attachment 4</label>
                    <input type="file" class="form-control" id="attachment3">
                </div>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <button type="button" id="nextButtonStaff" class="btn btn-primary btn-block">Submit</button>
    </div>
    <div class="col-4"></div>
</div>
</form>
</div>


<footer class="footer bg-dark text-white foot" id="foot">
    <?php include 'footer_1.php'; ?>
</footer>

<script>
    const persInfo = document.getElementById('persInfo');
    const address = document.getElementById('addCard');
    const orgD = document.getElementById('orgCard');
    const drf = document.getElementById('drf');
    const att = document.getElementById('attCard');
    const foot = document.getElementById('foot');


    function hideFunction() {
        if (persInfo.style.display === "none") {
            persInfo.style.display = "block";
        } else if (persInfo.style.display === "block") {
            persInfo.style.display = "none";

        }
    }

    function hideFunctionAdd() {
        if (address.style.display === "none") {
            address.style.display = "block";
        } else if (address.style.display === "block") {
            address.style.display = "none";

        }
    }

    function hideFunctionOrg() {
        if (orgD.style.display === "none") {
            orgD.style.display = "block";
        } else if (orgD.style.display === "block") {
            orgD.style.display = "none";

        }
    }

    function hideFunctionDrf() {
        if (drf.style.display === "none") {
            drf.style.display = "block";
        } else if (drf.style.display === "block") {
            drf.style.display = "none";

        }
    }

    function hideFunctionAtt() {
        if (att.style.display === "none") {
            att.style.display = "block";
        } else if (att.style.display === "block") {
            att.style.display = "none";

        }
    }

    persInfo.style.display = "block";
    address.style.display = "none";
    orgD.style.display = "none";
    drf.style.display = "none";
    att.style.display = "none";
    // foot.style.position = "absolute";
    // foot.style.bottom = 0;
    // foot.style.left = 0;
</script>
</body>
</html>