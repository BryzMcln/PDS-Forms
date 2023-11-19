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
    // 40-REFERENCES
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
 