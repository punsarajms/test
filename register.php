<?php
$pageTitle = 'Patient Registration | Seneha Home Nursing Care';
$pageDescription = 'Register your patient for home nursing services with Seneha Home Nursing Care.';
$activePage = 'register';
require_once __DIR__ . '/includes/data_store.php';

$success = false;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $form = [
        'first_name' => trim((string)($_POST['first_name'] ?? '')),
        'last_name' => trim((string)($_POST['last_name'] ?? '')),
        'phone_1' => trim((string)($_POST['phone_1'] ?? '')),
        'phone_2' => trim((string)($_POST['phone_2'] ?? '')),
        'emergency_contact' => trim((string)($_POST['emergency_contact'] ?? '')),
        'relationship' => trim((string)($_POST['relationship'] ?? '')),
        'patient_name' => trim((string)($_POST['patient_name'] ?? '')),
        'patient_age' => trim((string)($_POST['patient_age'] ?? '')),
        'patient_gender' => trim((string)($_POST['patient_gender'] ?? '')),
        'date_of_birth' => trim((string)($_POST['date_of_birth'] ?? '')),
        'patient_address' => trim((string)($_POST['patient_address'] ?? '')),
        'nic_no' => trim((string)($_POST['nic_no'] ?? '')),
        'present_complaints' => trim((string)($_POST['present_complaints'] ?? '')),
        'past_medical_history' => trim((string)($_POST['past_medical_history'] ?? '')),
        'past_surgical_history' => trim((string)($_POST['past_surgical_history'] ?? '')),
        'allergies_history' => trim((string)($_POST['allergies_history'] ?? '')),
        'recent_hospital' => trim((string)($_POST['recent_hospital'] ?? '')),
        'guardian_full_name' => trim((string)($_POST['guardian_full_name'] ?? '')),
        'guardian_relationship' => trim((string)($_POST['guardian_relationship'] ?? '')),
        'guardian_nic_no' => trim((string)($_POST['guardian_nic_no'] ?? '')),
        'guardian_address' => trim((string)($_POST['guardian_address'] ?? '')),
        'guardian_phone_number' => trim((string)($_POST['guardian_phone_number'] ?? '')),
        'deposit_amount' => trim((string)($_POST['deposit_amount'] ?? '')),
        'per_day_charges' => trim((string)($_POST['per_day_charges'] ?? '')),
        'declaration_name' => trim((string)($_POST['declaration_name'] ?? '')),
        'declaration_nic' => trim((string)($_POST['declaration_nic'] ?? '')),
        'starting_date' => trim((string)($_POST['starting_date'] ?? '')),
        'contract_end_date' => trim((string)($_POST['contract_end_date'] ?? '')),
        'client_monthly_total_expenses' => trim((string)($_POST['client_monthly_total_expenses'] ?? '')),
        'membership_type' => trim((string)($_POST['membership_type'] ?? '')),
    ];

    if ($form['first_name'] === '' || $form['last_name'] === '' || $form['phone_1'] === '' || $form['emergency_contact'] === '' || $form['relationship'] === '' || $form['patient_name'] === '' || $form['patient_gender'] === '') {
        $error = 'Please fill in all required fields.';
    } elseif ($form['deposit_amount'] !== '' && !is_numeric($form['deposit_amount'])) {
        $error = 'Deposit amount must be a valid number.';
    } elseif ($form['per_day_charges'] !== '' && !is_numeric($form['per_day_charges'])) {
        $error = 'Per day charges must be a valid number.';
    } elseif ($form['client_monthly_total_expenses'] !== '' && !is_numeric($form['client_monthly_total_expenses'])) {
        $error = 'Monthly total expenses must be a valid number.';
    } else {
        if (add_patient_registration($form)) {
            $success = true;
        } else {
            $error = 'Could not process registration. Please try again later.';
        }
    }
}

include __DIR__ . '/includes/header.php';
?>
<section class="page-hero">
    <div class="container">
        <span class="eyebrow">Registration</span>
        <h1>Register Your Patient</h1>
        <p>Complete the form below to request home nursing services.</p>
    </div>
</section>

<?php if ($success): ?>
<section class="section">
    <div class="container">
        <div style="background: #d4edda; border: 1px solid #c3e6cb; border-radius: 4px; padding: 20px; margin-bottom: 30px;">
            <h3 style="color: #155724; margin-top: 0;">Registration Submitted Successfully!</h3>
            <p style="color: #155724; margin-bottom: 0;">Thank you for registering with Seneha Home Nursing Care. We will contact you shortly.</p>
        </div>
    </div>
</section>
<?php endif; ?>

<section class="section">
    <div class="container">
        <?php if ($error !== ''): ?>
            <div style="background: #f8d7da; border: 1px solid #f5c6cb; border-radius: 4px; padding: 15px; margin-bottom: 30px; color: #721c24;">
                <?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?>
            </div>
        <?php endif; ?>

        <form method="post" action="register.php" style="max-width: 980px; margin: 0 auto; background: #f9f9f9; padding: 30px; border-radius: 10px; border: 1px solid #e0e0e0;">
            <h2 style="text-align: center; margin-top: 0; color: #0066cc;">Patient Registration Form</h2>

            <h3 style="margin-top: 25px; color: #0f4d5a;">1. Applicant Information</h3>
            <div style="display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 15px;">
                <label style="display: flex; flex-direction: column;">
                    <span>First Name *</span>
                    <input type="text" name="first_name" required style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </label>
                <label style="display: flex; flex-direction: column;">
                    <span>Last Name *</span>
                    <input type="text" name="last_name" required style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </label>
                <label style="display: flex; flex-direction: column;">
                    <span>Contact Number *</span>
                    <input type="tel" name="phone_1" required style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </label>
                <label style="display: flex; flex-direction: column;">
                    <span>2nd Contact Details</span>
                    <input type="tel" name="phone_2" style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </label>
                <label style="display: flex; flex-direction: column;">
                    <span>Emergency Contact Details *</span>
                    <input type="tel" name="emergency_contact" required style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </label>
                <label style="display: flex; flex-direction: column;">
                    <span>Relationship with Patient *</span>
                    <select name="relationship" required style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                        <option value="">Select</option>
                        <option value="Spouse">Spouse</option>
                        <option value="Child">Child</option>
                        <option value="Parent">Parent</option>
                        <option value="Sibling">Sibling</option>
                        <option value="Other">Other</option>
                    </select>
                </label>
            </div>

            <h3 style="margin-top: 30px; color: #0f4d5a;">2. Patient Information</h3>
            <div style="display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 15px;">
                <label style="display: flex; flex-direction: column;">
                    <span>Patient's Full Name *</span>
                    <input type="text" name="patient_name" required style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </label>
                <label style="display: flex; flex-direction: column;">
                    <span>Date of Birth</span>
                    <input type="date" name="date_of_birth" style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </label>
                <label style="display: flex; flex-direction: column;">
                    <span>Age</span>
                    <input type="number" name="patient_age" min="0" max="150" style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </label>
                <label style="display: flex; flex-direction: column;">
                    <span>Gender *</span>
                    <select name="patient_gender" required style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </label>
                <label style="display: flex; flex-direction: column; grid-column: 1 / -1;">
                    <span>Permanent Address</span>
                    <textarea name="patient_address" rows="3" style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;"></textarea>
                </label>
                <label style="display: flex; flex-direction: column;">
                    <span>NIC No.</span>
                    <input type="text" name="nic_no" style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </label>
                <label style="display: flex; flex-direction: column;">
                    <span>Recent Hospital</span>
                    <input type="text" name="recent_hospital" style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </label>
            </div>

            <h3 style="margin-top: 30px; color: #0f4d5a;">3. Medical History</h3>
            <label style="display: flex; flex-direction: column; margin-bottom: 15px;">
                <span>Present Complaints</span>
                <textarea name="present_complaints" rows="3" style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;"></textarea>
            </label>
            <label style="display: flex; flex-direction: column; margin-bottom: 15px;">
                <span>Past Medical History</span>
                <textarea name="past_medical_history" rows="3" style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;"></textarea>
            </label>
            <label style="display: flex; flex-direction: column; margin-bottom: 15px;">
                <span>Past Surgical History</span>
                <textarea name="past_surgical_history" rows="3" style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;"></textarea>
            </label>
            <label style="display: flex; flex-direction: column; margin-bottom: 15px;">
                <span>Allergies History</span>
                <textarea name="allergies_history" rows="3" style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;"></textarea>
            </label>

            <h3 style="margin-top: 30px; color: #0f4d5a;">4. Guardian Information</h3>
            <div style="display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 15px;">
                <label style="display: flex; flex-direction: column;">
                    <span>Guardian's Full Name</span>
                    <input type="text" name="guardian_full_name" style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </label>
                <label style="display: flex; flex-direction: column;">
                    <span>Relationship to Patient</span>
                    <input type="text" name="guardian_relationship" style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </label>
                <label style="display: flex; flex-direction: column;">
                    <span>NIC No.</span>
                    <input type="text" name="guardian_nic_no" style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </label>
                <label style="display: flex; flex-direction: column;">
                    <span>Phone Number</span>
                    <input type="tel" name="guardian_phone_number" style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </label>
                <label style="display: flex; flex-direction: column; grid-column: 1 / -1;">
                    <span>Permanent Address</span>
                    <textarea name="guardian_address" rows="3" style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;"></textarea>
                </label>
            </div>

            <h3 style="margin-top: 30px; color: #0f4d5a;">5. Payment Details</h3>
            <div style="display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 15px;">
                <label style="display: flex; flex-direction: column;">
                    <span>Contract Start Date & Time</span>
                    <input type="datetime-local" name="starting_date" style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </label>
                <label style="display: flex; flex-direction: column;">
                    <span>Contract End Date & Time</span>
                    <input type="datetime-local" name="contract_end_date" style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </label>
                <label style="display: flex; flex-direction: column;">
                    <span>Service Type</span>
                    <select name="membership_type" style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                        <option value="">Select</option>
                        <option value="Caregiver">Caregiver</option>
                        <option value="Long Term (Monthly) Care">Long Term (Monthly) Care</option>
                        <option value="Nursing Assistant">Nursing Assistant</option>
                        <option value="Professional Nurse">Professional Nurse</option>
                        <option value="Living Assistant / Shift Care">Living Assistant / Shift Care</option>
                    </select>
                </label>
            </div>

            <h3 style="margin-top: 30px; color: #0f4d5a;">6. Declaration</h3>
            <div style="display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 15px;">
                <label style="display: flex; flex-direction: column;">
                    <span>Name</span>
                    <input type="text" name="declaration_name" style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </label>
                <label style="display: flex; flex-direction: column;">
                    <span>NIC</span>
                    <input type="text" name="declaration_nic" style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </label>
            </div>

            <div style="margin-top: 20px; padding: 20px; background: #eef8fb; border-left: 4px solid #0099cc; border-radius: 4px;">
                <strong>Service Rates</strong>
                <ul style="margin: 10px 0 0 20px;">
                    <li>Caregiver: Rs. 4,500/day</li>
                    <li>Long term (monthly) care: Rs. 4,000</li>
                    <li>Nursing assistant: Rs. 5,700/day</li>
                    <li>Professional nurse: Rs. 8,500/day</li>
                    <li>Service type: Living assistant / shift care</li>
                </ul>
            </div>

            <button type="submit" style="margin-top: 25px; width: 100%; padding: 12px; background: #0066cc; color: white; border: none; border-radius: 4px; font-size: 16px; font-weight: 600;">Register Now</button>
        </form>
    </div>
</section>

<section class="section soft-panel">
    <div class="container">
        <h2 style="text-align: center; margin-bottom: 30px;">Seneha Priority Membership Benefits</h2>
        <div style="background: white; padding: 30px; border-radius: 8px; border: 1px solid #e6eef1;">
            <p style="font-size: 16px; line-height: 1.7;">Thank you for considering Seneha Nursing for home nursing services. We understand your request for a caregiver or nurse to manage the condition. Our well-trained and experienced caregivers specialize in personal care, providing personalized support.</p>
            <ul style="list-style: none; padding: 0; margin-top: 20px;">
                <li style="padding: 8px 0;">✓ Priority access to experienced caregivers and nurses</li>
                <li style="padding: 8px 0;">✓ Discounted rates on long-term care services</li>
                <li style="padding: 8px 0;">✓ Flexible scheduling and service customization</li>
                <li style="padding: 8px 0;">✓ 24/7 support and emergency care coordination</li>
                <li style="padding: 8px 0;">✓ Regular health check-ins and care plan reviews</li>
            </ul>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>