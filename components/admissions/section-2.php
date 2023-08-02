<div class="container admission-section-2-container">
    <div class="admission-section-2-row">
        <div class="admission-section-2-img">
            <img src="assets/images/admissions-img.png" alt="">
        </div>
        <?php
        require('includes/connection.php');
        if (isset($_POST['submit'])) {
            $admission_name = $_POST['admission_name'];
            $admission_contact = $_POST['admission_contact'];
            $admission_email = $_POST['admission_email'];
            $admission_course = $_POST['admission_course'];
            $admission_date = date('d-m-Y');

            if (empty($admission_course) || $admission_course == 'null') { ?>
        <div class="alert alert-info w-100 mt-3 mb-3" role="alert">
            Please select course!
        </div>
        <?php
            } else {
                $query = "INSERT INTO `admissions`(
                `admission_name`,
                `admission_contact`,
                `admission_email`,
                `admission_course`,
                `admission_applied_date`
            )
            VALUES(
                '$admission_name',
                '$admission_contact',
                '$admission_email',
                '$admission_course',
                '$admission_date'
            )";
                $result = mysqli_query($connection, $query);
                if ($result) {
                    $to = "snmnursingcollege@gmail.com, connectonlyn@onlynus.com";
                    $subject = "Shambhu Nath Memorial College | Admissions";
                    $message = "
                            <html>
                            <head>
                            <title>HTML email</title>
                            </head>
                            <body>
                            <p>This email contains HTML Tags!</p>
                            <table>
                            <tr>
                            <th>NAME</th>
                            <th>CONTACT</th>
                            <th>EMAIL</th>
                            <th>COURSE</th>
                            <th>DATE</th>
                            </tr>
                            <tr>
                            <td>" . $admission_name . "</td>
                            <td>" . $admission_contact . "</td>
                            <td>" . $admission_email . "</td>
                            <td>" . $admission_course . "</td>
                            <td>" . $admission_date . "</td>
                            </tr>
                            </table>
                            </body>
                            </html>
                            ";
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    mail($to, $subject, $message, $headers);
                ?>
        <div class="alert alert-success w-100 mt-3 mb-3" role="alert">
            Thank you for applying. We will connect with you shortly!
        </div>
        <?php
                }
            }
        }

        ?>
        <form action="" method="POST" class="form-container">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" name="admission_name" class="form-control" id="exampleFormControlInput1"
                    placeholder="Enter your full name" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Contact Number</label>
                <input type="number" name="admission_contact" class="form-control" id="exampleFormControlInput1"
                    placeholder="+91 XXXXX XXXXX" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                <input type="email" name="admission_email" class="form-control" id="exampleFormControlInput1"
                    placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Select Course</label>
                <select name="admission_course" class="form-select" aria-label="Default select example">
                    <option value="null">Open this select menu</option>
                    <option value="B.Sc. Nursing">B.Sc. Nursing</option>
                    <option value="ANM (Diploma)">ANM (Diploma)</option>
                    <option value="OT Technician (Diploma)">OT Technician (Diploma)</option>
                    <option value="Diploma in Physiotherapy">Diploma in Physiotherapy</option>
                </select>
            </div>
            <button type="submit" name="submit" class="btn btn-warning w-100">Submit</button>
        </form>
    </div>
</div>