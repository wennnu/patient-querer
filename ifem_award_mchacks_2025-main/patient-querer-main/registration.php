<!DOCTYPE html>
<!--HTML Section-->
<html>
    <head>
        <title>Medical Registration</title>
        <link rel="stylesheet" href="style.css">
        <script src="interactive.js"></script>
    </head>

    <body>

<!-- Code modified from W3schools: https://www.w3schools.com/howto/howto_css_register_form.asp-->
<!--Form Title -->
        <h1>Medical Registration Form</h1>
<!--Form -->
        <div class="container">
            <form action="connect.php" method="post">

    <!--Form Description--> 
                <p>Please fill out this form in order to make an appointment with a doctor.</p>
                <hr>

    <!--From Details-->
        <!--Patient Name-->
                <label for="name"><b>Name</b></label>
                <input type="text" placeholder="Enter your name" name="name" id="name">

        <!--Patient Triage-->
                <label for="triage"><b>Triage</b></label>
                <select id="triage" name="triage" size = "4" multiple>
                        <option value="RESUSCITATION">RESUSCITATION</option>
                        <option value="EMERGENT">EMERGENT</option>
                        <option value="URGENT">URGENT</option>
                        <option value="LESS_URGENT">LESS_URGENT</option>
                        <option value="NON-URGENT">NON-URGENT</option>
                </select>
                <hr>

        <!--Patient Age-->
                <label for="age"><b>Age</b></label>
                <input type="text" placeholder="age" name="age" id="age">
                <hr>

        <!--Patient Phases-->
                <label for="phase"><b>Phase</b></label>
                <select id="phase" name="phase" size = "4" multiple>
                        <option value="Registered">Registered</option>
                        <option value="Triage Assessment Complete">Triaged</option>
                        <option value="Tests/imaging Ordered">Investigation Pending</option>
                        <option value="Receiving Treatment">Treatment</option>
                        <option value="Admitted to Hospital">Admitted</option>
                        <option value="Discharge Process Complete">Discharged</option>
                </select>
                <hr>
        
        <!--Patient Investigation States-->
                <label for="state"><b>state</b></label>
                <select id="state" name="state" size = "4" multiple>
                        <option value="Test/imaging Ordered">Ordered</option>
                        <option value="In Progress">Pending</option>
                        <option value="Results Available">Reported</option>
                </select>
                <hr>

        <!--Submit Form Button-->
                <button type="submit" class="registerbtn">Submit</button>
            </form>
        </div>

        <!--API Request Form-->
        <h2>Patient Data Base Search</h2>
        <p>You can look up patient data currently in the hospital.</p>
        <form>
                <input type="text" id="query" name="api_request_box">
                <button>Search</button>
        </form>
    </body>
</html>
