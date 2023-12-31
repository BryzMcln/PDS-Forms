<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $middle_name = $_POST["middle_name"];
    $last_name = $_POST["last_name"];
    $address = $_POST["address"];
    $place_of_birth = $_POST["place_of_birth"];
    $date_of_birth = $_POST["date_of_birth"];
    $citizenship = $_POST["citizenship"];
    $civil_status = $_POST["civil_status"];
    $height = $_POST["height"];
    $weight = $_POST["weight"];
    $gender = $_POST["gender"];
    $blood = $_POST["blood"];
    $gsis_id_no = $_POST["gsis_id_no"];
    $pagibig_id_no = $_POST["pagibig_id_no"];
    $philhealth_no = $_POST["philhealth_no"];
    $sss_no = $_POST["sss_no"];
    $tin_no = $_POST["tin_no"];
    $agency_employee_no = $_POST["agency_employee_no"];
    $telephone_no = $_POST["telephone_no"];
    $mobile_no = $_POST["mobile_no"];
    $email_address = $_POST["email_address"];

    echo "<h2>Submitted Data:</h2>";
    echo "<p>Name: $first_name $middle_name $last_name</p>";
    echo "<p>Address: $address</p>";
    echo "<p>Place of Birth: $place_of_birth</p>";
    echo "<p>Date of Birth: $date_of_birth</p>";
    echo "<p>Citizenship: $citizenship</p>";
    echo "<p>Civil Status: $civil_status</p>";
    echo "<p>Height: $height ft.</p>";
    echo "<p>Weight: $weight kg.</p>";
    echo "<p>Gender: $gender</p>";
    echo "<p>Blood Type: $blood</p>";
    echo "<p>GSIS ID No.: $gsis_id_no</p>";
    echo "<p>PAG-IBIG No.: $pagibig_id_no</p>";
    echo "<p>PHILHEALTH No.: $philhealth_no</p>";
    echo "<p>SSS No.: $sss_no</p>";
    echo "<p>TIN No.: $tin_no</p>";
    echo "<p>Agency Employee No.: $agency_employee_no</p>";
    echo "<p>Telephone No.: $telephone_no</p>";
    echo "<p>Mobile No.: $mobile_no</p>";
    echo "<p>Email Address: $email_address</p>";
} else {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Personal Data Sheet</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    table {
      background-color: rgb(194, 190, 190);
    }
    .btm {
        background-color: white;
    }
    input,
    select,
    textarea {
      width: 100%;
      box-sizing: border-box;
    }
    p {
        font-size: 13px;
    }
  </style>
  <script>
    function addChildInput() {
      var container = document.getElementById('children-container');

      // Create an input for child name
      var nameInput = document.createElement('input');
      nameInput.type = 'text';
      nameInput.name = 'children_names[]';
      nameInput.placeholder = 'Child Name';

      // Create an input for child birth date
      var birthDateInput = document.createElement('input');
      birthDateInput.type = 'date';
      birthDateInput.name = 'children_birth_dates[]';

      container.appendChild(nameInput);
      container.appendChild(document.createElement('br')); 
      container.appendChild(birthDateInput);
      container.appendChild(document.createElement('br'));
    }
    // CIVIL SERVICE ROW
    function addCivilServiceRow() {
      var container = document.getElementById('civil-service-container');

      // Create a new table row
      var newRow = document.createElement('tr');

      // Create an input for Civil Service name
      var nameInput = createInputElement('text', 'civil_service_names[]', 'Name of Elegibility');

      // Create an input for Civil Service rating
      var ratingInput = createInputElement('text', 'civil_service_rating', 'Rating (If applicable)');

      // Create an input for Civil Service examination date
      var examDateInput = createInputElement('date', 'civil_service_examination_dates[]', '');

      // Create an input for Civil Service place of examination
      var placeExamInput = createInputElement('text', 'civil_service_place_of_examination', 'Place of Examination');

      // Create an input for Civil Service license number
      var licenseNumInput = createInputElement('number', 'civil_service_license_num', 'License Number');

      // Create an input for Civil Service date of validity
      var dateValidityInput = createInputElement('date', 'civil_service_date_of_validity', '');

      // Append inputs to the new row
      newRow.appendChild(createTableCell(nameInput));
      newRow.appendChild(createTableCell(ratingInput));
      newRow.appendChild(createTableCell(examDateInput));
      newRow.appendChild(createTableCell(placeExamInput));
      newRow.appendChild(createTableCell(licenseNumInput));
      newRow.appendChild(createTableCell(dateValidityInput));

      // Append the new row to the container
      container.parentNode.insertBefore(newRow, container.nextSibling);
    }
    function createInputElement(type, name, placeholder) {
      var input = document.createElement('input');
      input.type = type;
      input.name = name;
      input.placeholder = placeholder;
      return input;
    }
    function createTableCell(element) {
      var cell = document.createElement('td');
      cell.appendChild(element);
      return cell;
    }
    // WORK EXPERIENCE 
    function addExperienceRow() {
      var container = document.getElementById('experience-container');

      // Create a new table row
      var newRow = document.createElement('tr');

      // Create input fields and textarea
      var datesFromInput = createInputElement('date', 'dates_from[]', 'From');
      var datesToInput = createInputElement('date', 'dates_to[]', 'To');
      var jobTitleTextarea = createTextareaElement('job_titles[]', 'Job Title');
      var companyNameInput = createInputElement('text', 'company_names[]', 'Company Name');
      var monthlySalaryInput = createInputElement('number', 'monthly_salaries[]', 'Monthly Salary');
      var salaryGradeInput = createInputElement('text', 'salary_grades[]', 'Salary Grade');
      var statusAppointmentInput = createInputElement('radio', 'status_appointments[]', '');
      statusAppointmentInput.value = 'Y';
      statusAppointmentInput.setAttribute('class', 'status-appointment-radio');
      var statusAppointmentLabel = document.createElement('label');
      statusAppointmentLabel.innerHTML = 'Yes';
      statusAppointmentLabel.setAttribute('for', 'status_appointments_Y');

      // Append input fields and textarea to the new row
      newRow.appendChild(createTableCell(datesFromInput));
      newRow.appendChild(createTableCell(datesToInput));
      newRow.appendChild(createTableCell(jobTitleTextarea));
      newRow.appendChild(createTableCell(companyNameInput));
      newRow.appendChild(createTableCell(monthlySalaryInput));
      newRow.appendChild(createTableCell(salaryGradeInput));
      newRow.appendChild(createTableCell(statusAppointmentInput));
      newRow.appendChild(createTableCell(statusAppointmentLabel));

      // Append the new row to the container
      container.parentNode.insertBefore(newRow, container.nextSibling);
    }
    function createTextareaElement(name, placeholder) {
      var textarea = document.createElement('textarea');
      textarea.name = name;
      textarea.placeholder = placeholder;
      return textarea;
    }
    function createInputElement(type, name, placeholder) {
      var input = document.createElement(type === 'textarea' ? 'textarea' : 'input');
      input.type = type;
      input.name = name;
      input.placeholder = placeholder;
      return input;
    }
    function createTableCell(element) {
      var cell = document.createElement('td');
      cell.appendChild(element);
      return cell;
    }
    // VOLUNTARY WORK OR CIVIC
    function addMoreWorkExperienceRow() {
      var container = document.getElementById('work-experience-container');

      // Create a new table row
      var newRow = document.createElement('tr');

      // Create input fields and textarea
      var organizationNameTextarea = createTextareaElement('organization_names[]', 'Name of Organization');
      var organizationAddressTextarea = createTextareaElement('organization_addresses[]', 'Address of Organization');
      var fromDateInput = createInputElement('date', 'from_dates[]', 'From');
      var toDateInput = createInputElement('date', 'to_dates[]', 'To');
      var hoursInput = createInputElement('number', 'number_of_hours[]', 'Number of Hours');
      var positionInput = createInputElement('text', 'positions[]', 'Position/Nature of Work');

      // Append input fields and textarea to the new row
      newRow.appendChild(createTableCell(organizationNameTextarea));
      newRow.appendChild(createTableCell(organizationAddressTextarea));
      newRow.appendChild(createTableCell(fromDateInput));
      newRow.appendChild(createTableCell(toDateInput));
      newRow.appendChild(createTableCell(hoursInput));
      newRow.appendChild(createTableCell(positionInput));

      // Append the new row to the container
      container.parentNode.insertBefore(newRow, container.nextSibling);
    }
    function createTextareaElement(name, placeholder) {
      var textarea = document.createElement('textarea');
      textarea.name = name;
      textarea.placeholder = placeholder;
      return textarea;
    }
    function createInputElement(type, name, placeholder) {
      var input = document.createElement('input');
      input.type = type;
      input.name = name;
      input.placeholder = placeholder;
      return input;
    }
    function createTableCell(element) {
      var cell = document.createElement('td');
      cell.appendChild(element);
      return cell;
    }
    // LEARNING & DEVELOPMENT
    function addMoreLearningDevelopmentRow() {
      var container = document.getElementById('learning-development-container');

      // Create a new table row
      var newRow = document.createElement('tr');

      // Create textarea and input fields
      var titleTextarea = createTextareaElement('learning_titles[]', 'Title of Learning & Development');
      var fromDateInput = createInputElement('date', 'ld_from_dates[]', 'From');
      var toDateInput = createInputElement('date', 'ld_to_dates[]', 'To');
      var hoursInput = createInputElement('number', 'ld_number_of_hours[]', 'Number of Hours');
      var typeTextarea = createTextareaElement('ld_types[]', 'Type of LD');
      var conductedByTextarea = createTextareaElement('ld_conducted_by[]', 'Conducted / Sponsored by');

      // Append textarea and input fields to the new row
      newRow.appendChild(createTableCell(titleTextarea));
      newRow.appendChild(createTableCell(fromDateInput));
      newRow.appendChild(createTableCell(toDateInput));
      newRow.appendChild(createTableCell(hoursInput));
      newRow.appendChild(createTableCell(typeTextarea));
      newRow.appendChild(createTableCell(conductedByTextarea));

      // Append the new row to the container
      container.parentNode.insertBefore(newRow, container.nextSibling);
    }
    function createTextareaElement(name, placeholder) {
      var textarea = document.createElement('textarea');
      textarea.name = name;
      textarea.placeholder = placeholder;
      return textarea;
    }
    function createInputElement(type, name, placeholder) {
      var input = document.createElement('input');
      input.type = type;
      input.name = name;
      input.placeholder = placeholder;
      return input;
    }
    function createTableCell(element) {
      var cell = document.createElement('td');
      cell.appendChild(element);
      return cell;
    }
    // OTHER INFORMATION
    function addOtherInformationRow() {
      var container = document.getElementById('other-information-container');

      // Create a new table row
      var newRow = document.createElement('tr');

      // Create textarea
      var specialSkillsTextarea = createTextareaElement('special_skills', 'Special Skills and Hobbies');
      var nonAcademicDistractionTextarea = createTextareaElement('non_academic_distraction', 'Non-Academic Distraction / Recognition');
      var associationTextarea = createTextareaElement('association_organization', 'In Association / Organization');

      // Append textarea to the new row
      newRow.appendChild(createTableCell(specialSkillsTextarea));
      newRow.appendChild(createTableCell(nonAcademicDistractionTextarea));
      newRow.appendChild(createTableCell(associationTextarea));

      // Append the new row to the container
      container.parentNode.insertBefore(newRow, container.nextSibling);
    }
    function createTextareaElement(name, placeholder) {
      var textarea = document.createElement('textarea');
      textarea.name = name;
      textarea.placeholder = placeholder;
      return textarea;
    }
    function createTableCell(element) {
      var cell = document.createElement('td');
      cell.appendChild(element);
      return cell;
    }
    // REFERENCES
    function addInformationRow() {
      var container = document.getElementById('information-container');

      // Create a new table row
      var newRow = document.createElement('tr');

      // Create textarea
      var nameTextarea = createTextareaElement('information_names[]', 'Name');
      var addressTextarea = createTextareaElement('information_addresses[]', 'Address');
      var telNoTextarea = createTextareaElement('information_tel_nos[]', 'Tel. No.');

      // Append input fields to the new row
      newRow.appendChild(createTableCell(nameTextarea));
      newRow.appendChild(createTableCell(addressTextarea));
      newRow.appendChild(createTableCell(telNoTextarea));

      // Append the new row to the container
      container.appendChild(newRow);
    }
    function createTextareaElement(name, placeholder) {
      var textarea = document.createElement('textarea');
      textarea.name = name;
      textarea.placeholder = placeholder;
      return textarea;
    }
    function createTableCell(element) {
      var cell = document.createElement('td');
      cell.appendChild(element);
      return cell;
    }
  </script>
</head>
    <body>
        <h1 style="text-align: center; font-family:fantasy;">Personal Data Sheet</h1>
        <form action="sv_pds.php" method="post" class="d-flex justify-content-center align-items-center" >
            <table border="" cellpadding="5" cellspacing="0" class="">
                <form action="sv_pds.php" method="post" class="d-flex">
                    <table border="" cellpadding="5" cellspacing="0"style="width: 100%;">
                        <tr>
                            <th colspan="2" style="text-align: center;
                            color: rgb(233, 233, 233); 
                            background-color: rgb(71, 68, 68);
                            ">I. PERSONAL INFORMATION</th> <!-- PART 1 -->
                        </tr>
                        <tr class="">
                            <th>Name</th>  <!-- 2 -->
                                <td colspan="4">
                                    <input type="text" name="first_name" placeholder="Firstname">
                                    <input type="text" name="middle_name" placeholder="Middlename">
                                    <input type="text" name="last_name" placeholder="Surname">
                                    <input type="text" name="suffix" placeholder="Suffix: Jr./Sr./II or type N/A if none"> 
                                </td>
                        </tr>
                        <tr>
                            <th>Date of Birth</th> <!-- 3 -->
                                <td><input type="date" name="date_of_birth" class="text-center"></td>
                        </tr>
                        <tr>
                            <th>Place of Birth</th> <!-- 4 -->
                                <td><input type="text" name="place_of_birth"></td>
                        </tr>
                        <tr>
                            <th>Sex</th> <!-- 5 -->
                                <td class="text-center" style="background-color: white;">
                                    <label for="male">Male</label>
                                    <input type="radio" id="male" name="gender" value="male" style="width: 10%">
                                    <label for="female">Female</label>
                                    <input type="radio" id="female" name="gender" value="female" style="width:10%">
                                </td>
                        </tr>
                        <tr>
                            <th>Civil Status</th> <!-- 6 -->
                                <td>
                                    <select name="civil_status" class="text-center">
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Widowed">Widowed</option>
                                        <option value="Separate">Separate</option>
                                    </select>
                                </td>
                        </tr>
                        <tr>
                                <td colspan="4" class="text-center">
                                    <label><b>Height</b></label>
                                    <input type="number" name="height" placeholder="(m)" style="width: 43%;">
                                    <label><b>Weight</b></label>
                                    <input type="number" name="weight"placeholder="(kg.)" style="width: 43%;">
                                </td>
                        </tr>
                        </tr>
                        <tr>
                            <th>Blood Type</th>
                                <td>
                                    <select name="blood" class="text-center">
                                        <option value="A">+A</option>
                                        <option value="B">+B</option>
                                        <option value="AB">+AB</option>
                                        <option value="O">+O</option>
                                        <option value="-A">-A</option>
                                        <option value="-B">-B</option>
                                        <option value="-AB">-AB</option>
                                        <option value="-O">-O</option>
                                    </select>
                                </td>
                        </tr>
                        <tr>
                            <th>GSIS ID No.</th>
                                <td>
                                    <input type="text" name="gsis_id_no">
                                </td>
                        </tr>
                        <tr>
                            <th>PAG-IBIG No.</th>
                                <td><input type="text" name="pagibig_id_no"></td>
                        </tr>
                        <tr>
                            <th>PHILHEALTH No.</th>
                                <td><input type="text" name="philhealth_no"></td>
                        </tr>
                        <tr>
                            <th>SSS No.</th>
                                <td><input type="text" name="sss_no"></td>
                        </tr>
                        <tr>
                            <th>TIN No.</th>
                                <td><input type="text" name="tin_no"></td>
                        </tr>
                        <tr>
                            <th>Agency Employee No.</th>
                                <td><input type="text" name="agency_employee_no"></td>
                        </tr>
                        <tr>
                            <th>Citizenship</th>
                                <td colspan="2">
                                    <select name="citizenship" class="text-center">
                                        <option value="Filipino">Filipino</option>
                                        <option value="Foreigner">Foreigner</option>
                                        <option value="Dual Citizen">Dual Citizen</option>
                                    </select>
                                    <textarea id="exampleFormControlTextarea1" rows="3" placeholder="Pls. Indicate Country"></textarea>
                                </td>
                        </tr>
                        <tr>
                            <th>Residential Address</th>
                                <td colspan="4">
                                    <input type="text" name="Block" placeholder="Hosuse/Block of No.">
                                    <input type="text" name="Street" placeholder="Street">
                                    <input type="text" name="Subville"placeholder="Subdivision/Village">
                                    <input type="text" name="address" placeholder="Barangay">
                                    <input type="text" name="address"placeholder="City/Municipality">
                                    <input type="text" name="address" placeholder="Province">
                                    
                                </td>
                        </tr>
                        <tr>
                            <th>Permanent Address</th>
                                <td colspan="4">
                                    <input type="text" name="Block" placeholder="Hosuse/Block of No.">
                                    <input type="text" name="Street" placeholder="Street">
                                    <input type="text" name="Subville"placeholder="Subdivision/Village">
                                    <input type="text" name="address" placeholder="Barangay">
                                    <input type="text" name="address"placeholder="City/Municipality">
                                    <input type="text" name="address" placeholder="Province">
                                    
                                </td>
                        </tr>
                        <tr>
                            <th>Telephone No.</th>
                                <td><input type="tel" name="telephone_no" class=""></td>
                        </tr>
                        <tr>
                            <th>Mobile No.</th>
                                <td><input type="text" name="mobile_no" class=""></td>
                        </tr>
                        <tr>    
                            <th>E-mail Address</th>
                                <td><input type="email" name="email_address" class="" placeholder="johnny@example.com"></td>
                        </tr>
                  </table>
              </form>            
                <!--================================================= PART 2 ============================================================-->
                <div><h1><br></h1></div>  
                <form action="sv_pds.php" method="post" class="d-flex" >
                    <table border="" cellpadding="5" cellspacing="0" style="width: 100%;">
                        <tr>
                            <th colspan="2" style="text-align: center;
                            color: rgb(233, 233, 233); 
                            background-color: rgb(71, 68, 68);
                            ">II. FAMILY BACKGROUND</th> <!-- PART 2 -->
                        </tr>
                        <tr class="">
                            <th>Spouse Name</th>  
                                <td colspan="4">
                                    <input type="text" name="sp_first_name" placeholder="Firstname">
                                    <input type="text" name="sp_middle_name" placeholder="Middlename">
                                    <input type="text" name="sp_last_name" placeholder="Surname">
                                    <input type="text" name="sp_suffix" placeholder="Suffix: Jr./Sr./II or type N/A if none"> 
                                </td>
                        </tr>
                        <tr>
                            <th>Occupation</th>
                            <td><input type="text" name="occupation"></td>
                        </tr>
                        <tr>
                            <th>Employer/Business Name</th>
                            <td><input type="text" name="emp_business_name"></td>
                        </tr>
                        <tr>
                            <th>Business Address</th>
                            <td><input type="text" name="business_address"></td>
                        </tr>
                        <tr>
                            <th>Telephone No.</th>
                                <td><input type="tel" name="sp_telephone_no" class=""></td>
                        </tr>
                        <tr>
                            <th>Name of CHILDREN <p style="font-size: 10px;">(Write the full name and list all)</p></th>
                            <td colspan="4">
                              <div id="children-container">
                                <div>
                                  <input type="text" name="children_names[]" placeholder="Child Name">
                                  <input type="date" name="children_birth_dates[]">
                                </div>
                              </div>
                              <button type="button" class="form-control btn btn-success" onclick="addChildInput()">Add More</button>
                            </td>
                        </tr>
                        <tr class="">
                            <th>Father Name</th>  <!-- 2 -->
                                <td colspan="4">
                                    <input type="text" name="father_first_name" placeholder="Firstname">
                                    <input type="text" name="father_middle_name" placeholder="Middlename">
                                    <input type="text" name="father_last_name" placeholder="Surname">
                                    <input type="text" name="father_suffix" placeholder="Suffix: Jr./Sr./II or type N/A if none"> 
                                </td>
                        </tr>
                        <tr class="">
                            <th>Mother Name</th>  <!-- 2 -->
                                <td colspan="4">
                                    <input type="text" name="mother_first_name" placeholder="Firstname">
                                    <input type="text" name="mother_middle_name" placeholder="Middlename">
                                    <input type="text" name="mother_last_name" placeholder="Surname">
                                    <input type="text" name="mother_suffix" placeholder="Suffix: Jr./Sr./II or type N/A if none"> 
                                </td>
                        </tr>
                  </table>
              </form>          
                <!--================================================= PART 3 ============================================================-->
                <div><h1><br></h1></div>
                <form action="sv_pds.php" method="post" class="d-flex">
                  <table border="" cellpadding="5" cellspacing="0" style="width: 100%;">
                        <tr>
                            <th colspan="2" style="text-align: center;
                            color: rgb(233, 233, 233); 
                            background-color: rgb(71, 68, 68);
                            ">III. EDUCATIONAL BACKGROUND</th> <!-- PART 3 -->
                        </tr>
        
                        <tr>
                            <th>Elementary</th>
                            <td>
                                <label for="elem_name">School Name</label>
                                <input type="text" name="elem_name" id="elem_name">
                                <label for="yearInput">Period of Attendance (Year)</label>
                                <input type="number" id="yearInput" name="yearInput" min="1000" max="9999" required placeholder="From eg. 2017">
                                <input type="number" id="yearInput" name="yearInput" min="1000" max="9999" required placeholder="To eg. 2023">
                                <label>Highest Level/Units Earned (if not Graduate)</label>
                                <input type="text" name="hl_ue">
                                <label for="grad">Year Graduated</label>
                                <input type="number" id="grad" name="grad" min="1000" max="9999" required placeholder="eg. 2023">
                                <label>Scholarship Academic Honors Recieved</label>
                                <textarea id="exampleFormControlTextarea1" rows="3"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>Secondary</th>
                            <td>
                                <label for="sec_name">School Name</label>
                                <input type="text" name="sec_name" id="sec_name">
                                <label for="yearInput">Period of Attendance (Year)</label>
                                <input type="number" id="yearInput" name="yearInput" min="1000" max="9999" required placeholder="From eg. 2017">
                                <input type="number" id="yearInput" name="yearInput" min="1000" max="9999" required placeholder="To eg. 2023">
                                <label>Highest Level/Units Earned (if not Graduate)</label>
                                <input type="text" name="hl_ue">
                                <label for="grad">Year Graduated</label>
                                <input type="number" id="grad" name="grad" min="1000" max="9999" required placeholder="eg. 2023">
                                <label>Scholarship Academic Honors Recieved</label>
                                <textarea id="exampleFormControlTextarea1" rows="3"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>Vocational/Trade Course</th>
                            <td>
                                <label for="tertiary_name">School Name</label>
                                <input type="text" name="tertiary_name" id="tertiary_name">
                                <label for="ed_deg_cor">Education/Degree/Course (Write in full)</label>
                                <input type="text" name="ed_deg_cor" id="ed_deg_cor">
                                <label for="yearInput">Period of Attendance (Year)</label>
                                <input type="number" id="yearInput" name="yearInput" min="1000" max="9999" required placeholder="From eg. 2017">
                                <input type="number" id="yearInput" name="yearInput" min="1000" max="9999" required placeholder="To eg. 2023">
                                <label>Highest Level/Units Earned (if not Graduate)</label>
                                <input type="text" name="hl_ue">
                                <label for="grad">Year Graduated</label>
                                <input type="number" id="grad" name="grad" min="1000" max="9999" required placeholder="eg. 2023">
                                <label>Scholarship Academic Honors Recieved</label>
                                <textarea id="exampleFormControlTextarea1" rows="3"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>Tertiary</th>
                            <td>
                                <label for="tertiary_name">School Name</label>
                                <input type="text" name="tertiary_name" id="tertiary_name">
                                <label for="ed_deg_cor">Education/Degree/Course (Write in full)</label>
                                <input type="text" name="ed_deg_cor" id="ed_deg_cor">
                                <label for="yearInput">Period of Attendance (Year)</label>
                                <input type="number" id="yearInput" name="yearInput" min="1000" max="9999" required placeholder="From eg. 2017">
                                <input type="number" id="yearInput" name="yearInput" min="1000" max="9999" required placeholder="To eg. 2023">
                                <label>Highest Level/Units Earned (if not Graduate)</label>
                                <input type="text" name="hl_ue">
                                <label for="grad">Year Graduated</label>
                                <input type="number" id="grad" name="grad" min="1000" max="9999" required placeholder="eg. 2023">
                                <label>Scholarship Academic Honors Recieved</label>
                                <textarea id="exampleFormControlTextarea1" rows="3"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>Graduate Studies</th>
                            <td>
                                <label for="tertiary_name">School Name</label>
                                <input type="text" name="tertiary_name" id="tertiary_name">
                                <label for="ed_deg_cor">Education/Degree/Course (Write in full)</label>
                                <input type="text" name="ed_deg_cor" id="ed_deg_cor">
                                <label for="yearInput">Period of Attendance (Year)</label>
                                <input type="number" id="yearInput" name="yearInput" min="1000" max="9999" required placeholder="From eg. 2017">
                                <input type="number" id="yearInput" name="yearInput" min="1000" max="9999" required placeholder="To eg. 2023">
                                <label>Highest Level/Units Earned (if not Graduate)</label>
                                <input type="text" name="hl_ue">
                                <label for="grad">Year Graduated</label>
                                <input type="number" id="grad" name="grad" min="1000" max="9999" required placeholder="eg. 2023">
                                <label>Scholarship Academic Honors Recieved</label>
                                <textarea id="exampleFormControlTextarea1" rows="3"></textarea>
                            </td>
                        </tr>
        
                        <tr>
                            <th>Signature</th>
                            <td>
                                <label for="sign">Insert image of your signature</label>
                                <input type="file" name="sign" id="sign">
                            </td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td>
                                <input type="date" name="date_rn" id="date_rn" class="text-center">
                            </td>
                        </tr>
                </table>
              </form>
                <!--================================================= PART 4 ============================================================-->
                <div><h1><br></h1></div>
                <form action="sv_pds.php" method="post" class="d-flex">
                    <table border="" cellpadding="5" cellspacing="0" style="width: 100%;">
                        <tr>
                            <th colspan="6" style="text-align: center;
                            color: rgb(233, 233, 233); 
                            background-color: rgb(71, 68, 68);
                            ">IV. CIVIL SERVICE ELEGIBILITY</th>
                        </tr>
                        <tr>
                            <th style="text-align: center;">Civil Service</th>
                            <th style="text-align: center;">Rating<p>(If applicable)</p></th>
                            <th style="text-align: center;">Date of Examination</th>
                            <th style="text-align: center;">Place of Examination</th>
                            <th style="text-align: center;">License</th>
                            <th style="text-align: center;">Date of Validity</th>
                        </tr>
                        <tr id="civil-service-container">
                            <td>
                                <input type="text" name="civil_service_names[]" placeholder="Name of Elegibility">
                            </td>
                            <td>
                                <input type="text" name="civil_service_rating" placeholder="Rating (If applicable)">
                            </td>
                            <td>
                                <input type="date" name="civil_service_examination_dates[]">
                            </td>
                            <td>
                                <input type="text" name="civil_service_place_of_examination" placeholder="Place of Examination">
                            </td>
                            <td>
                                <input type="number" name="civil_service_license_num" placeholder="License Number">
                            </td>
                            <td>
                                <input type="date" name="civil_service_date_of_validity">
                            </td>
                        </tr>
                    </table>
                </form> 
                <!--================================================= PART 5 ============================================================-->
                <button type="button" class="form-control btn btn-success" onclick="addCivilServiceRow()">Add More</button>
                <div><h1><br></h1></div>
                <form action="sv_pds.php" method="post" class="d-flex"> 
                    <table border="" cellpadding="5" cellspacing="0" style="width: 100%;">
                        <tr>
                            <th colspan="8" style="text-align: center;
                            color: rgb(233, 233, 233); 
                            background-color: rgb(71, 68, 68);
                            ">V. WORK EXPERIENCE
                            <p>(Include provate employment. Start from your recent work) Description of duties should be indicated in the attached Work Expererience sheet.</p>
                            </th>
                            
                        </tr>
                        <tr>
                            <th style="text-align: center;">Inclusive Dates (From)</th>
                            <th style="text-align: center;">Inclusive Dates (To)</th>
                            <th style="text-align: center;">Job Title <p>(Write In full/Do not abbreviate)</p></th>
                            <th style="text-align: center;">Agency/Office/Company <p>(Write In full/Do not abbreviate)</p></th>
                            <th style="text-align: center;">Monthly Salary</th>
                            <th style="text-align: center;">Salary Grade</th>
                            <th style="text-align: center;">Status Appointment</th>
                            <th style="text-align: center;">&nbsp;</th>
                        </tr>
                        <tr id="experience-container">
                            <td>
                                <input type="date" name="dates_from[]" placeholder="From">
                            </td>
                            <td>
                                <input type="date" name="dates_to[]" placeholder="To">
                            </td>
                            <td>
                                <textarea name="job_titles[]" placeholder="Job Title"></textarea>
                            </td>
                            <td>
                                <input type="text" name="company_names[]" placeholder="Company Name">
                            </td>
                            <td>
                                <input type="number" name="monthly_salaries[]" placeholder="Monthly Salary">
                            </td>
                            <td>
                                <input type="text" name="salary_grades[]" placeholder="Salary Grade">
                            </td>
                            <td>
                                <input type="radio" name="status_appointments[]" value="Y" class="status-appointment-radio" id="status_appointments_Y" style="margin-right: 5px;">
                                <label for="status_appointments_Y">Yes</label>
                                <input type="radio" name="status_appointments[]" value="N" class="status-appointment-radio" id="status_appointments_N" style="margin-right: 5px;">
                                <label for="status_appointments_N">No</label>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                </form> 
                <!--================================================= PART 6 ============================================================-->
                <button type="button" class="form-control btn btn-success" onclick="addExperienceRow()">Add More</button>
                <div><h1><br></h1></div>
                <form action="sv_pds.php" method="post" class="d-flex">
                    <table border="" cellpadding="5" cellspacing="0" style="width: 100%;">
                        <tr>
                            <th colspan="8" style="text-align: center;
                            color: rgb(233, 233, 233); 
                            background-color: rgb(71, 68, 68);
                            ">VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERMENT / PEOPLE / VOLUNTARY ORGANIZATION/S</th>
                        </tr>
                        <tr>
                            <th style="text-align: center;">Name of Organization</th>
                            <th style="text-align: center;">Address of Organization</th>
                            <th style="text-align: center;">Attendance (From)</th>
                            <th style="text-align: center;">Attendance (To)</th>
                            <th style="text-align: center;">Number of Hours</th>
                            <th style="text-align: center;">Position/Nature of Work</th>
                        </tr>
                        <tr id="work-experience-container">
                            <td>
                                <textarea name="organization_names[]" placeholder="Name of Organization"></textarea>
                            </td>
                            <td>
                                <textarea name="organization_addresses[]" placeholder="Address of Organization"></textarea>
                            </td>
                            <td>
                                <input type="date" name="from_dates[]" placeholder="From">
                            </td>
                            <td>
                                <input type="date" name="to_dates[]" placeholder="To">
                            </td>
                            <td>
                                <input type="number" name="number_of_hours[]" placeholder="Number of Hours">
                            </td>
                            <td>
                                <input type="text" name="positions[]" placeholder="Position/Nature of Work">
                            </td>
                        </tr>
                    </table>
                </form>
                <!--================================================= PART 7 ============================================================-->
                <button type="button" class="form-control btn btn-success" onclick="addMoreWorkExperienceRow()">Add More</button>
                <div><h1><br></h1></div>
                <form action="sv_pds.php" method="post" class="d-flex">
                    <table border="" cellpadding="5" cellspacing="0" style="width: 100%;">
                        <tr>
                            <th colspan="8" style="text-align: center;
                            color: rgb(233, 233, 233); 
                            background-color: rgb(71, 68,  68);
                            ">VII. LEARNING AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING PROGRAMS ATTENDED
                            <p>(Start from the mostrecent L&D/training program and include only the revelant L&D/training taken for the last five (5) years for Division Chief/Executive/Managerial positions)</p>
                            </th>
                        </tr>
                        <tr>
                            <th style="text-align: center;">Title of Learning & Development</th>
                            <th style="text-align: center;">Attendance (From)</th>
                            <th style="text-align: center;">Attendance (To)</th>
                            <th style="text-align: center;">Number of Hours</th>
                            <th style="text-align: center;">Type of LD</th>
                            <th style="text-align: center;">Conducted / Sponsored by</th>
                        </tr>
                        <tr id="learning-development-container">
                            <td>
                                <textarea name="learning_titles[]" placeholder="Title of Learning & Development"></textarea>
                            </td>
                            <td>
                                <input type="date" name="ld_from_dates[]" placeholder="From">
                            </td>
                            <td>
                                <input type="date" name="ld_to_dates[]" placeholder="To">
                            </td>
                            <td>
                                <input type="number" name="ld_number_of_hours[]" placeholder="Number of Hours">
                            </td>
                            <td>
                                <textarea name="ld_types[]" placeholder="Type of LD"></textarea>
                            </td>
                            <td>
                                <textarea name="ld_conducted_by[]" placeholder="Conducted / Sponsored by"></textarea>
                            </td>
                        </tr>
                    </table>
                </form>
                <!--================================================= PART 8 ============================================================-->
                <button type="button" class="form-control btn btn-success" onclick="addMoreLearningDevelopmentRow()">Add More</button>
                <div><h1><br></h1></div>
                <form action="sv_pds.php" method="post" class="d-flex">
                    <table border="" cellpadding="5" cellspacing="0" style="width: 100%;">
                        <tr>
                            <th colspan="8" style="text-align: center;
                            color: rgb(233, 233, 233); 
                            background-color: rgb(71, 68,  68);
                            ">VII. OTHER INFORMATION
                            </th>
                        </tr>
                        <tr>
                            <th style="text-align: center;">SPECIAL SKILLS and HOBBIES</th>
                            <th style="text-align: center;">NON-ACADEMIC DISTRACTION / RECOGNITION</th>
                            <th style="text-align: center;">IN ASSOCIATION / ORGANIZATION</th>
                        </tr>
                        <tr id="other-information-container">
                            <td>
                                <textarea name="special_skills" placeholder="Special Skills and Hobbies"></textarea>
                            </td>
                            <td>
                                <textarea name="non_academic_distraction" placeholder="Non-Academic Distraction / Recognition"></textarea>
                            </td>
                            <td>
                                <textarea name="association_organization" placeholder="In Association / Organization"></textarea>
                            </td>
                        </tr>
                    </table>
                </form>
                <!--================================================= PART 9 ============================================================-->
                <button type="button" class="form-control btn btn-success" onclick="addOtherInformationRow()">Add More</button>               
                <div><h1><br></h1></div>
                <form action="sv_pds.php" method="post" class="d-flex justify-content-center align-items-center">
                    <table border="" cellpadding="5" cellspacing="0" style="width: 100%;">
                        <tr>
                            <th>34.</th>
                            <th colspan="4" class="text-center">
                                Are you related by consanguinity or affinity to the appointing or recommending authority,
                                or to the chief of bureau or office or to the person who has immediate supervision over you in the Office,
                                Bureau or Department where you will be appointed?
                            </th>
                        </tr>
                        <tr>
                            <td style="width: 10%;">a.</td>
                            <td style="width: 30%; text-align: justify;" colspan="2">Within the third degree?</td>
                            <td style="width: 60%;" colspan="2">
                                <textarea name="a_3rd_deg" style="width: 100%;" placeholder="If YES, give details:"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 10%;">b.</td>
                            <td style="width: 30%; text-align: justify;" colspan="2">Within the fourth degree (for Local Government Unit - Career Employees)?</td>
                            <td style="width: 60%;" colspan="2">
                                <textarea name="a_4th_deg" style="width: 100%;" placeholder="If YES, give details:"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>35.</th>
                        </tr>
                        <tr>
                            <td style="width: 10%;">a.</td>
                            <td style="width: 30%; text-align: justify;" colspan="2">Have you ever been found guilty of any administrative offense?</td>
                            <td style="width: 60%;" colspan="2">
                                <textarea name="a_3rd_deg" style="width: 100%;" placeholder="If YES, give details:"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 10%;">b.</td>
                            <td style="width: 30%; text-align: justify;" colspan="2">Have you been criminally charged before any court</td>
                            <td style="width: 60%;" colspan="2">
                                <textarea name="a_4th_deg" style="width: 100%;" placeholder="If YES, give details:"></textarea>
                                <input name="a_date_filed" type="date" class="text-center">
                                <textarea name="a_stat_case" placeholder="Status of Case/s:"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th style="width: 10%;">36.</t>
                            <td style="width: 30%; text-align: justify;" colspan="2">Have you been convicted of any crime or violation of any law,
                                decree, ordinance, or regulation by any court or tribunal</td>
                            <td style="width: 60%;" colspan="2">
                                <textarea name="a_36" placeholder="If YES, give details:"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th style="width: 10%;">37.</th>
                            <td style="width: 30%; text-align: justify;" colspan="2">Have you been separated from the service in any of the following modes:
                                resignation, retirement, dropped from the rolls, dismissal, termination, end of term, finished contract
                                or phased out (abolition) in the public or private sector?</td>
                            <td style="width: 60%;" colspan="2">
                                <textarea name="a_37" placeholder="If YES, give details:"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th style="width: 10%;">38.</t>
                            <td style="width: 30%; text-align: justify;" colspan="2">Have you acquired the status of an immigrant or permanent resident of another country?</td>
                            <td style="width: 60%;" colspan="2">
                                <textarea name="a_37" placeholder="If YES, give details (country):"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>40.</th>
                            <th colspan="4" class="text-center">
                                Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled Persons (RA 7277); and (c) 
                                Solo Parents Welfare Act of 2000 (RA 8972), please answer the following items:			
                            </th>
                        </tr>
                        <tr>
                            <td style="width: 10%;">a.</td>
                            <td style="width: 30%; text-align: justify;" colspan="2">Are you a member of any indigenous group?</td>
                            <td style="width: 60%;" colspan="2">
                                <label for="yes">Yes</label>
                                <input type="radio" id="yes" name="yn_40_a" value="yes" style="width: 10%">
                                <label for="no">No</label>
                                <input type="radio" id="no" name="yn_40_a" value="no" style="width:10%">
                                <textarea name="indigenous_people" style="width: 100%;" placeholder="If YES, specify:"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 10%;">b.</td>
                            <td style="width: 30%; text-align: justify;" colspan="2">Are you a person with disability?</td>
                            <td style="width: 60%;" colspan="2">
                                <label for="yes">Yes</label>
                                <input type="radio" id="yes" name="yn_40_b" value="yes" style="width: 10%">
                                <label for="no">No</label>
                                <input type="radio" id="no" name="yn_40_b" value="no" style="width:10%">
                                <textarea name="disabled_person" placeholder="If YES, specify ID No:"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 10%;">c.</td>
                            <td style="width: 30%; text-align: justify;" colspan="2">Are you a solo parent?</td>
                            <td style="width: 60%;" colspan="2">
                                <label for="yes">Yes</label>
                                <input type="radio" id="yes" name="yn_40_c" value="yes" style="width: 10%">
                                <label for="no">No</label>
                                <input type="radio" id="no" name="yn_40_c" value="no" style="width:10%">
                                <textarea name="solo_parent" style="width: 100%;" placeholder="If YES, specify ID No:"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>41.</th>
                            <td colspan="4" class="text-center">
                                <b>REFERENCES</b> <em>(Person not related by congsaguinity or affinity to applicant/appointee)</em>			
                            </td>
                        </tr>
                    </table>
                </form>
                <!--================================================= PART 10 ============================================================-->
                <form action="sv_pds.php" method="post" class="d-flex justify-content-center align-items-center">
                    <table border="" cellpadding="5" cellspacing="0" style="width: 100%;">
                      <tr>
                        <td style="width: 30%;">Name</td>
                        <td style="width: 50%;">Address</td>
                        <td style="width: 20%;">Tel. No.</td>
                      </tr>
                      <tbody id="information-container">
                        <tr>
                          <td>
                            <textarea name="information_names[]" placeholder="Name"></textarea>
                          </td>
                          <td>
                            <textarea name="information_addresses[]" placeholder="Address"></textarea>
                          </td>
                          <td>
                            <textarea name="information_tel_nos[]" placeholder="Tel. No."></textarea>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </form>
                  <button type="button" class="form-control btn btn-success" onclick="addInformationRow()">Add More</button>
                <form action="sv_pds.php" method="post" class="d-flex">
                    <table border="" cellpadding="5" cellspacing="0" style="width: 100%;">
                        <tr>
                            <td colspan="8" style="text-align: justify;"><b>42.</b> <em>I declare under oath that I have personally accomplished this Personal Data Sheet 
                                which is a true, correct and complete statement pursuant to the provisions of pertinent laws, rules and regulations of the Republic of the Philippines.
                                I authorize the agency head/authorized representative to verify/validate the contents stated herein.
                                I  agree that any misrepresentation made in this document and its attachments shall cause the filing of administrative/criminal case/s against me.</em>					
                            </td>
                        </tr>
                        <tr>
                            <td> SUBSCRIBED AND SWORN to before me this, <input name="oath" placeholder="Write here...">
                            affiant exhibiting his/her validly issued government ID as indicated above.
                            </td>
                        </tr>
                    </table>
                </form>
                <form action="sv_pds.php" method="post" class="d-flex">
                    <table border="" cellpadding="5" cellspacing="0" style="width: 100%;">
                        <tr>
                            <th>Person Administering Oath</th>
                            <td>
                                <label for="sign"><em>Insert image of your signature:</em></label>
                                <input type="file" name="sign" id="sign">
                            </td>
                            
                        </tr>
                    </table>
                </form>
                <div><h1><br></h1></div>
                <form action="sv_pds.php" method="post" class="d-flex">
                    <table border="" cellpadding="5" cellspacing="0" style="width: 100%;">
                        <tr>
                            <th colspan="2" style="text-align: center;
                            color: rgb(233, 233, 233); 
                            background-color: rgb(71, 68, 68);
                            ">
                                Government Issued ID (i.e.Passport, GSIS, SSS, PRC, Driver's License, etc.) PLEASE INDICATE ID Number and Date of Issuance		
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="" placeholder="Government Issued ID:">
                                <input type="text" name="" placeholder="ID/License/Passport No.:">
                                <input type="text" name="" placeholder="Date/Place of Issuance">

                            </td>
                        </tr>
                    </table>
                </form>
                <form action="sv_pds.php" method="post" class="d-flex">
                    <table border="" cellpadding="5" cellspacing="0" style="width: 100%;">
                        <tr>
                            <th class="text-center" style="width: 23%;">ID picture taken within the last 6 months 3.4cm X 3.4cm (Passport Size)</th>
                            <td>
                                <label for="id_pic"><em>Computerized generated or photocopied picture is not acceptable</em></label>
                                <input type="file" name="id_pic" id="id_pic">
                            </td>
                        </tr>
                        <tr>
                            <th class="text-center" style="width: 23%;">Right Thumbmark</th>
                            <td>
                                <label for="id_pic"><em>Please insert the photo of your thumbmark</em></label>
                                <input type="file" name="id_pic" id="id_pic">
                            </td>
                        </tr>
                    </table>
                </form>
                <form action="sv_pds.php" method="post" class="d-flex">
                    <table border="" cellpadding="5" cellspacing="0" style="width: 100%;">
                        <tr>
                            <th>Signature</th>
                            <td>
                                <label for="sign">Insert image of your signature</label>
                                <input type="file" name="sign" id="sign">
                            </td>
                        </tr>
                        <tr>
                            <th>Date Accomplished</th>
                            <td>
                                <input type="date" name="date_rn" id="date_rn" class="text-center">
                            </td>
                        </tr>
                    </table>
                </form>
                <!--===SIGNATURE====-->
                  <form action="sv_pds.php" method="post" class="d-flex justify-content-center align-items-center">
                    <table border="" cellpadding="5" cellspacing="0" width="100%">
                        <tr>
                            <td colspan="2" class="text-center btm">
                                <button type="submit" value="Submit" class="form-control btn btn-primary" 
                                style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ; font-weight: bold;">SUBMIT</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </table>
        </form>
    </body>
</html>
