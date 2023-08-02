<div class="container w-100">

    <div class="contact-section-row">
        <div class="contact-section-left">
            <div class="contact-section-bar">
                <p class="contact-label">Address</p>
                <p class="contact-res">Bandhwa, Sant Kabir Nagar, Uttar Pradesh- 272175</p>
            </div>

            <div class="contact-section-bar">
                <p class="contact-label">Contact</p>
                <a href="+919151161619" class="contact-res-link">+91 9151161619 | </a>
                <a href="+918400275467" class="contact-res-link">+91 8400275467 | </a>
                <a href="+918382947373" class="contact-res-link">+91 8382947373 | </a>
                <a href="+917054937373" class="contact-res-link">+91 7054937373</a>
            </div>
        </div>
        <div class="w-100">
            <?php
            require('includes/connection.php');
            if (isset($_POST['submit'])) {
                $contact_name = $_POST['contact_name'];
                $contact_number = $_POST['contact_number'];
                $contact_email = $_POST['contact_email'];
                $contact_reason = $_POST['contact_reason'];
                $contact_details = $_POST['contact_details'];
                $contact_date = date('d-m-Y');

                if (empty($contact_reason) || $contact_reason == 'null') { ?>
            <div class="alert alert-info" role="alert">
                Please select the reason for contacting.
            </div>
            <?php
                } else {
                    $query = "INSERT INTO `contact`(
                `contact_name`,
                `contact_number`,
                `contact_email`,
                `contact_reason`,
                `contact_details`,
                `contact_date`
            )
            VALUES(
                '$contact_name',
                '$contact_number',
                '$contact_email',
                '$contact_reason',
                '$contact_details',
                '$contact_date'
            )";
                    $res = mysqli_query($connection, $query);
                    if ($res) {
                        $to = "snmnursingcollege@gmail.com, connectonlyn@onlynus.com";
                        $subject = "Shambhu Nath Memorial College | Contact";
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
                                    <th>REASON</th>
                                    <th>DETAILS</th>
                                    <th>DATE</th>
                                    </tr>
                                    <tr>
                                    <td>" . $contact_name . "</td>
                                    <td>" . $contact_number . "</td>
                                    <td>" . $contact_email . "</td>
                                    <td>" . $contact_reason . "</td>
                                    <td>" . $contact_details . "</td>
                                    <td>" . $contact_date . "</td>
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
                Thank you for connecting with us. We will connect with you shortly!
            </div>
            <?php
                    }
                }
            }
            ?>
            <form action="" method="POST" class="contact-section-right">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input name="contact_name" type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Full name" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Contact</label>
                    <input name="contact_number" type="number" class="form-control" id="exampleFormControlInput1"
                        placeholder="+91 XXXXX XXXXX" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input name="contact_email" type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Contacting For</label>
                    <select name="contact_reason" class="form-select" aria-label="Default select example">
                        <option value="null">Open this select menu</option>
                        <option value="Jobs">Jobs</option>
                        <option value="Admission Process">Admission Process</option>
                        <option value="Course">Course</option>
                        <option value="Fee">Fee</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Details</label>
                    <textarea name="contact_details" class="form-control" id="exampleFormControlTextarea1"
                        rows="3"></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-outline-primary w-100">Submit</button>
            </form>
        </div>
    </div>
</div>