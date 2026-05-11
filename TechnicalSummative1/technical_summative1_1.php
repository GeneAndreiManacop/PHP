<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="technical_summative1_1_style.css">
</head>

<body>
    <?php
    // Personal Information
    $firstName = "Gene Andrei";
    $middleName = "Estrada";
    $lastName = "Manacop";
    $birthDate = "2005-11-18";
    $gender = "Male";
    $nationality = "Filipino";
    $address = "San Juan, Cainta, Rizal";
    $contactnumber = "09123456789";
    $email = "example@gmail.com";

    // Last School Information
    $last_school_name = "Cainta Catholic College";
    $last_year_attended = 2024;
    $last_school_address = "A. Bonifacio Avenue, Cainta, Rizal";
    ?>
    <main>
        <h2 class="main-title">Student Registration Form</h2>
        <form method="post">
            <section class="personal-information">
                <h2 class="personal-info-title">Personal Information</h2>
                <div class="inputs-container">
                    <div class="row-fields">
                        <div class="input-field">
                            <label for="firstname">First Name: </label>
                            <input type="text" name="firstname" id="firstname" value="<?= $firstName ?>" placeholder="First Name" required>
                        </div>
                        <div class="input-field">
                            <label for="middlename">Middle Name: </label>
                            <input type="text" name="middlename" id="middlename" value="<?= $middleName ?>" placeholder="Middle Name" required>
                        </div>
                        <div class="input-field">
                            <label for="lastname">Last Name: </label>
                            <input type="text" name="lastname" id="lastname" value="<?= $lastName ?>" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="row-fields gender-and-birthdate">
                        <div class="input-field">
                            <label for="gender">Gender: </label>
                            <div class="gender-options">
                                <input type="radio" name="gender" id="male" value="male" <?= $gender == "Male" ? "checked " : "" ?>>
                                <label for="male">Male</label>
                                <input type="radio" name="gender" id="female" value="female">
                                <label for="female">Female</label>
                            </div>
                        </div>
                        <div class="input-field">
                            <label for="birthdate">Birthday: </label>
                            <input type="date" name="birthdate" id="birthdate" value=<?= $birthDate ?>>
                        </div>
                    </div>
                    <div class="input-field">
                        <label for="address">Address: </label>
                        <input type="text" name="address" id="address" value="<?= $address ?>">
                    </div>
                    <div class="row-fields">
                        <div class="input-field">
                            <label for="contactnumber">Contact Number: </label>
                            <input type="tel" name="contactnumber" pattern="09[0-9]{9}" value="<?= $contactnumber ?>" placeholder="09123456789">
                        </div>
                        <div class="input-field">
                            <label for="email">Email Address: </label>
                            <input type="email" name="email" value="<?= $email ?>">
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <h2 class="previous-schhool-title">Previous School Information</h2>
                <div class="inputs-container">
                    <div class="row-fields">
                        <div class="input-field">
                            <label for="name_of_last_school_attended">Name of Last School Attended: </label>
                            <input type="text" name="name_of_last_school_attended" id="name_of_last_school_attended" value="<?= $last_school_name ?>">
                        </div>
                        <div class="input-field">
                            <label for="year_graduated">Last Year Attended: </label>
                            <input type="number" name="year_graduated" id="year_graduated" min="1900" step="1" value=<?= $last_year_attended ?>>
                        </div>
                    </div>
                    <div class="input-field">
                        <label for="last_school_address">Last School Address: </label>
                        <input type="text" name="last_school_address" id="last_school_address" value="<?= $last_school_address ?>">
                    </div>
                </div>

                <input class="submit-btn" type="submit" value="Submit Form">
                </div>
            </section>
        </form>
    </main>
</body>

</html>