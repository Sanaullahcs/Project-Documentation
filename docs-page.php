<?php include 'includes/header.php'?>

<body class="docs-page">
    <div class="docs-wrapper ">
        <?php include 'includes/navigation.php'?>
        <div class="docs-content">
            <div class="container">
                <article class="docs-article" id="section-1">
                    <header class="docs-header">
                        <h1 class="docs-heading" id="item-1-1">Introduction <span class="docs-time">Last updated: 2019-06-01</span></h1>
                        <section class="docs-intro">
                            <p> We are excited to introduce you to the goChronos timesheet project, a powerful tool designed to revolutionize time management for doctors and practitioners.

                                In the fast-paced world of healthcare, every minute counts. That's why we've implemented goChronos to help us meticulously track and manage our time spent on various tasks related to patient care. Whether it's consultations, procedures, or administrative duties, goChronos enables us to stay organized and efficient, ensuring that our focus remains where it matters most: on our patients.</p>
                        </section>
                        <div class="callout-block callout-block-postman">
                            <div class="content">
                                <h4 class="callout-title">
                                    <span class="callout-icon-holder me-1">
                                        <i class="fas fa-thumbs-up"></i>
                                    </span>
                                    Tip
                                </h4>
                                <p>Upon successfully accessing the sign-in API, you receive a token in the
                                    format: "token": "40|7xUK3bEyGSkXvgvQjGmXzCFnOy30J8QLct<br>T469bZecd956b0". This token is utilized by including it in the header to execute subsequent APIs.</p>
                            </div>
                        </div>
                    </header>
                </article>

                <article class="docs-article" id="section-3">
                    <header class="docs-header">
                        <h1 class="docs-heading">APIs</h1>
                        <section class="docs-intro">
                            <p>The GoChronos Project API facilitates the management of time tracking activities within an organization. It provides endpoints for administrators, supporters, and reporters to interact with the system efficiently. This overview highlights the key functionalities and endpoints available in the API.</p>
                        </section>
                    </header>
                    <!-- Authentication API -->
                    <section class="docs-section" id="item-3-1">
                        <h2 class="section-heading">Authentication API:</h2>
                        <p>This API endpoint handles user authentication and authorization. It ensures secure access to the system's resources based on user roles and permissions.
                            <br>
                            <br>
                        <div class="request-title">
                            <h3 class="">SignIn </h3><button class="post">POST</button>
                        </div>
                        The <b> SignIn </b> API allows users to securely log in based on their roles as administrators, supporters, or reporters. By submitting credentials, users gain access to their respective functionalities within the GoChronos Project platform. This POST API ensures role-based authentication, maintaining data security and user accountability throughout the system.
                        </p>
                        <div class="callout-block callout-block-success">
                            <div class="content">
                                <h4 class="callout-title">
                                    <span class="callout-icon-holder me-1">
                                        <i class="fas fa-thumbs-up"></i>
                                    </span>
                                    Tip
                                </h4>
                                <p>Upon successfully accessing the sign-in API, you receive a token in the
                                    format: "token": "40|7xUK3bEyGSkXvgvQjGmXzCFnOy30J8QLct<br>T469bZecd956b0". This token is utilized by including it in the header to execute subsequent APIs.</p>
                            </div>
                        </div>
                        <div class="tab">
                            <button class="tablinks" onclick="openTab(event, 'endpoint1')">Endpoint</button>
                            <button class="tablinks" onclick="openTab(event, 'request1')">Request</button>
                            <button class="tablinks" onclick="openTab(event, 'response1')">Response</button>
                        </div>


                        <div id="endpoint1" class="tab-content fade-in  fade-in">
                            <div id="endpoint-info-1" class="docs-code-block">
                                <pre class="shadow-lg rounded"><code class="json hljs">
	https://{your_endpoint}api/auth/signin

</code></pre>
                            </div>
                        </div>

                        <div id="request1" class="tab-content fade-in  fade-in ">
                            <div id="endpoint-info-1" class="docs-code-block">
                                <pre class="shadow-lg rounded"><code class="json hljs">
{
    "email":"XYZ@gmail.com",
    "password":"abc123xyz#$%^"
}
</code></pre>
                            </div>
                        </div>

                        <div id="response1" class="tab-content fade-in ">
                            <div id="endpoint-info-1" class="docs-code-block">
                                <pre class="shadow-lg rounded"><code class="json hljs">
{
    "status": "Success",
    "message": "Login successful",
    "data": {
        "user": {
            "id": 3,
            "first_name": "xyz",
            "last_name": "abc",
            "primary_address": "USA",
            "department": "5",
            "facility": null,
            "sso_identity": null,
            "business_unit": null,
            "submission_schedule": null,
            "speciality": null,
            "phone": "00000000000",
            "email": "xyz@gmail.com",
            "organization_id": 1,
            "status": 1,
            "image": "abc",
            "role": "2",
            "created_at": "2024-02-15T08:08:34.000000Z",
            "updated_at": "2024-02-20T12:00:11.000000Z",
            "hire_date": null,
            "terminate_date": null
        },
        "token": "40|7xUK3bEyGSkXvgvQjGmXzCFnOy30J8QLctT469bZecd956b0"
    },
    "meta": []
}
</code></pre>
                            </div>
                        </div>

                    </section>
                    <!-- Users API -->
                    <section class="docs-section" id="item-3-2">
                        <h2 class="section-heading">Users API</h2>
                        <p>Within our software project, we've implemented a user management system encompassing creation, updating, listing, and deletion functionalities. Our system caters to three distinct user roles: GoChronos Administrator, Supporter, and Reporter, each delineated by unique permissions and responsibilities. Administrators wield the authority to oversee user creation and removal, aligning with project protocols. End-users possess the capability to autonomously update their personal details, while role modifications necessitate administrator intervention. Access to user directories is governed by predefined permission structures</p>

                        <div class="request-title">
                            <h3 class="">User / Create </h3><button class="post">POST</button>
                        </div>
                        <p>Our User <b> Create </b> API enables seamless creation of new user accounts within our system, facilitating rapid onboarding. Through simple API calls, developers can efficiently integrate this functionality into their applications, ensuring swift user registration and access management
                        </p>

                        <div class="tab ">
                            <button class="tablinks" onclick="openTab(event, 'endpoint2')">Endpoint</button>
                            <button class="tablinks" onclick="openTab(event, 'header2')">Header</button>
                            <button class="tablinks" onclick="openTab(event, 'request2')">Request</button>
                            <button class="tablinks" onclick="openTab(event, 'response2')">Response</button>
                        </div>


                        <div id="endpoint2" class="tab-content  fade-in ">
                            <div id="endpoint-info-2" class="docs-code-block">
                                <pre class="shadow-lg rounded"><code class="json hljs">
    https://{your_endpoint}api/user/create

</code></pre>
                            </div>
                        </div>

                        <div id="header2" class="tab-content  fade-in ">
                            <div id="header-info-2" class="docs-code-block">
                                <pre class="shadow-lg rounded"><code class="json hljs">
    'Authorization: Bearer 26|yNpSU1WBYNtOaQ6T7e7vveAYYCezoFEjuvkz4Mwg865f471b',
    'Accept: application/json',
    'Content-Type: application/json'

</code></pre>
                            </div>
                        </div>

                        <div id="request2" class="tab-content  fade-in ">
                            <div id="request-info-2" class="docs-code-block">
                                <pre class="shadow-lg rounded"><code class="json hljs">
{
    "firstName":"test",
    "lastName":"ahmad",
    "email":"test@gmail.com",
    "phone":"00000000000",
    "password":"abc@7860",
    "primaryAddress":"USA",
    "department":"6",
    "role":"3", role
    "organizationId":"2",
    "status":"1",
    "image":"abc",
    "facility":"111",
    "ssoIdentity":"11111111",
    "businessUnit":"1111111",
    "submissionSchedule":"1111",
    "speciality":"11111",
    "hireDate":"27-02-2024",
    "terminateDate":"",
    "assignOrgan":[1,2]
}
</code></pre>
                            </div>
                        </div>

                        <div id="response2" class="tab-content  fade-in ">
                            <div id="response-info-2" class="docs-code-block">
                                <pre class="shadow-lg rounded"><code class="json hljs">
{
    "status": "Success",
    "message": "User created successfully",
    "data": {
        "user": {
            "first_name": "test",
            "last_name": "ahmad",
            "primary_address": "lahore",
            "department": "6",
            "phone": "03054587996",
            "email": "texast@gmail.com",
            "organization_id": "2",
            "status": "1",
            "image": "abc",
            "role": "3",
            "facility": "111",
            "sso_identity": "11111111",
            "business_unit": "1111111",
            "submission_schedule": "1111",
            "speciality": "11111",
            "hire_date": "2024-02-27",
            "terminate_date": null,
            "updated_at": "2024-02-29T06:52:58.000000Z",
            "created_at": "2024-02-29T06:52:58.000000Z",
            "id": 32
        }
    },
    "meta": []
}
</code></pre>
                            </div>
                        </div>

                        <div class="request-title">
                            <h3 class="">User / Update </h3><button class="put">PUT</button>
                        </div>
                        <p>Our User <b> Update </b>API facilitates the seamless updating of existing user accounts within our system, streamlining the process of modifying user information. With straightforward API calls, developers can efficiently integrate this functionality into their applications, ensuring swift user profile management and access control.
                        </p>

                        <div class="tab ">
                            <button class="tablinks" onclick="openTab(event, 'endpoint3')">Endpoint</button>
                            <button class="tablinks" onclick="openTab(event, 'header3')">Header</button>
                            <button class="tablinks" onclick="openTab(event, 'request3')">Request</button>
                            <button class="tablinks" onclick="openTab(event, 'response3')">Response</button>
                        </div>


                        <div id="endpoint3" class="tab-content  fade-in ">
                            <div id="endpoint-info-3" class="docs-code-block">
                                <pre class="shadow-lg rounded"><code class="json hljs">
    https://{your_endpoint}api/user/update/id

</code></pre>
                            </div>
                        </div>

                        <div id="header3" class="tab-content  fade-in ">
                            <div id="header-info-3" class="docs-code-block">
                                <pre class="shadow-lg rounded"><code class="json hljs">
    'Authorization: Bearer 26|yNpSU1WBYNtOaQ6T7e7vveAYYCezoFEjuvkz4Mwg865f471b',
    'Accept: application/json',
    'Content-Type: application/json'

</code></pre>
                            </div>
                        </div>

                        <div id="request3" class="tab-content  fade-in ">
                            <div id="request-info-3" class="docs-code-block">
                                <pre class="shadow-lg rounded"><code class="json hljs">
{
    "firstName":"test",
    "lastName":"ahmad",
    "phone":"03054587996",
    "primaryAddress":"lahore",
    "department":"6",
    "role":"3",
    "organizationId":"2",
    "status":"1",
    "image":"abc",
    "facility":"111",
    "ssoIdentity":"11111111",
    "businessUnit":"1111111",
    "submissionSchedule":"1111",
    "speciality":"11111",
    "hireDate":"27-02-2024",
    "terminateDate":"",
    "assignOrgan":[1,2,3]
}
</code></pre>
                            </div>
                        </div>

                        <div id="response3" class="tab-content  fade-in ">
                            <div id="response-info-3" class="docs-code-block">
                                <pre class="shadow-lg rounded"><code class="json hljs">
{
    "status": "Success",
    "message": "User updated successfully",
    "data": {
        "user": {
            "id": 31,
            "first_name": "test",
            "last_name": "ahmad",
            "primary_address": "lahore",
            "department": "6",
            "facility": "111",
            "sso_identity": "11111111",
            "business_unit": "1111111",
            "submission_schedule": "1111",
            "speciality": "11111",
            "phone": "03054587996",
            "email": "test@gmail.com",
            "organization_id": 2,
            "status": "1",
            "image": "abc",
            "role": "3",
            "created_at": "2024-02-27T07:53:58.000000Z",
            "updated_at": "2024-02-27T07:53:58.000000Z",
            "hire_date": "2024-02-27",
            "terminate_date": null
        }
    },
    "meta": []
}
</code></pre>
                            </div>
                        </div>
                        <div class="request-title">
                            <h3 class="">User / Delete </h3><button class="delete">DELETE</button>
                        </div>
                        <p>Our User <b> Deletion </b>API allows for the seamless removal of existing user accounts within our system, simplifying the process of eliminating specific user records. By providing the user ID within the endpoint URL, developers can efficiently integrate this functionality into their applications, ensuring straightforward deletion of user profiles and access control.
                        </p>

                        <div class="tab ">
                            <button class="tablinks" onclick="openTab(event, 'endpoint4')">Endpoint</button>
                            <button class="tablinks" onclick="openTab(event, 'header4')">Header</button>
                            <button class="tablinks" onclick="openTab(event, 'response4')">Response</button>
                        </div>


                        <div id="endpoint4" class="tab-content  fade-in ">
                            <div id="endpoint-info-4" class="docs-code-block">
                                <pre class="shadow-lg rounded"><code class="json hljs">
    https://{your_endpoint}api/user/delete/id

</code></pre>
                            </div>
                        </div>

                        <div id="header4" class="tab-content  fade-in ">
                            <div id="header-info-4" class="docs-code-block">
                                <pre class="shadow-lg rounded"><code class="json hljs">
    'Authorization: Bearer 26|yNpSU1WBYNtOaQ6T7e7vveAYYCezoFEjuvkz4Mwg865f471b',
    'Accept: application/json',
    'Content-Type: application/json'

</code></pre>
                            </div>
                        </div>




                        <div id="response4" class="tab-content  fade-in ">
                            <div id="response-info-4" class="docs-code-block">
                                <pre class="shadow-lg rounded"><code class="json hljs">
{
    "status": "Success",
    "message": "User deleted successfully",
    "data": {
        "user": {
            "id": 31,
            "first_name": "test",
            "last_name": "ahmad",
            "primary_address": "lahore",
            "department": "6",
            "facility": "111",
            "sso_identity": "11111111",
            "business_unit": "1111111",
            "submission_schedule": "1111",
            "speciality": "11111",
            "phone": "03054587996",
            "email": "test@gmail.com",
            "organization_id": 2,
            "status": 1,
            "image": "abc",
            "role": "3",
            "created_at": "2024-02-27T07:53:58.000000Z",
            "updated_at": "2024-02-27T07:53:58.000000Z",
            "hire_date": "2024-02-27",
            "terminate_date": null
        }
    },
    "meta": []
}
</code></pre>
                            </div>
                        </div>

                        <div class="request-title">
                            <h3 class="">User / List Or Detail </h3><button class="get">GET</button>
                        </div>
                        <p>Our User <b> List Or Detail </b>API provides a comprehensive overview of all user accounts within our system, offering developers a convenient method to retrieve multiple user records. Additionally, by appending the user ID to the endpoint URL, developers can access detailed information for a specific user, facilitating efficient retrieval of individual user profiles. This functionality ensures flexibility in managing user data and facilitates streamlined access control processes.
                        </p>

                        <div class="tab ">
                            <button class="tablinks" onclick="openTab(event, 'endpoint5')">Endpoint</button>
                            <button class="tablinks" onclick="openTab(event, 'header5')">Header</button>
                            <button class="tablinks" onclick="openTab(event, 'response5')">Response</button>
                        </div>


                        <div id="endpoint5" class="tab-content  fade-in ">
                            <div id="endpoint-info-5" class="docs-code-block">
                                <pre class="shadow-lg rounded"><code class="json hljs">
	Get All User List

    https://{your_endpoint}api/user/list/

	Get User Detail By Id

	https://{your_endpoint}api/user/list/id

</code></pre>
                            </div>
                        </div>

                        <div id="header5" class="tab-content  fade-in ">
                            <div id="header-info-5" class="docs-code-block">
                                <pre class="shadow-lg rounded"><code class="json hljs">
    'Authorization: Bearer 26|yNpSU1WBYNtOaQ6T7e7vveAYYCezoFEjuvkz4Mwg865f471b',
    'Accept: application/json',
    'Content-Type: application/json'

</code></pre>
                            </div>
                        </div>




                        <div id="response5" class="tab-content  fade-in ">
                            <div id="response-info-5" class="docs-code-block">
                                <pre class="shadow-lg rounded"><code class="json hljs">

	List Response

{
    "status": "Success",
    "message": "User List",
    "data": {
        "user": [
            {
                "id": 14,
                "first_name": "musa",
                "last_name": "ahmad",
                "primary_address": "lahore",
                "department": "6",
                "facility": null,
                "sso_identity": null,
                "business_unit": null,
                "submission_schedule": null,
                "speciality": null,
                "phone": "03054587996",
                "email": "musa@gmail.com",
                "organization_id": 2,
                "status": 1,
                "image": "abc",
                "role": "3",
                "created_at": "2024-02-15T09:01:10.000000Z",
                "updated_at": "2024-02-15T09:01:10.000000Z",
                "hire_date": null,
                "terminate_date": null,
                "organization_name": "devhouse",
                "department_name": "liver department",
                "name": "Reporter"
            },
            {
                "id": 32,
                "first_name": "test",
                "last_name": "ahmad",
                "primary_address": "lahore",
                "department": "6",
                "facility": "111",
                "sso_identity": "11111111",
                "business_unit": "1111111",
                "submission_schedule": "1111",
                "speciality": "11111",
                "phone": "03054587996",
                "email": "texast@gmail.com",
                "organization_id": 2,
                "status": 1,
                "image": "abc",
                "role": "3",
                "created_at": "2024-02-29T06:52:58.000000Z",
                "updated_at": "2024-02-29T06:52:58.000000Z",
                "hire_date": "2024-02-27",
                "terminate_date": null,
                "organization_name": "devhouse",
                "department_name": "liver department",
                "name": "Reporter"
            }
        ]
    },
    "meta": []
}

	Detail Response

{
    "status": "Success",
    "message": "User detail",
    "data": {
        "user": [
            {
                "id": 14,
                "first_name": "musa",
                "last_name": "ahmad",
                "primary_address": "lahore",
                "department": "6",
                "facility": null,
                "sso_identity": null,
                "business_unit": null,
                "submission_schedule": null,
                "speciality": null,
                "phone": "03054587996",
                "email": "musa@gmail.com",
                "organization_id": 2,
                "status": 1,
                "image": "abc",
                "role": "3",
                "created_at": "2024-02-15T09:01:10.000000Z",
                "updated_at": "2024-02-15T09:01:10.000000Z",
                "hire_date": null,
                "terminate_date": null,
                "organization_name": "devhouse",
                "department_name": "liver department",
                "name": "Reporter"
            }
        ]
    },
    "meta": []
}
</code></pre>
                            </div>
                        </div>
                    </section>
                    <?php include 'apis/organization.php'?>
                    <?php include 'apis/department.php'?>


                    <footer class="footer">
                        <div class="container text-center py-5">
                            <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
                            <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="theme-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
                            <ul class="social-list list-unstyled pt-4 mb-0">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-github fa-fw"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-slack fa-fw"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-product-hunt fa-fw"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f fa-fw"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram fa-fw"></i></a></li>
                            </ul><!--//social-list-->
                        </div>
                    </footer>
            </div>
        </div>
    </div><!--//docs-wrapper-->


    <!-- Javascript -->
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Page Specific JS -->
    <script src="assets/plugins/smoothscroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
    <script src="assets/js/highlight-custom.js"></script>
    <script src="assets/plugins/simplelightbox/simple-lightbox.min.js"></script>
    <script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script>
    <script src="assets/js/docs.js"></script>
    <script src="assets/js/tab.js"></script>
    <script>
        // Function to open the selected tab content
        function openTab(event, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tab-content fade-in ");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].classList.remove("active");
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).classList.add("active");
            event.currentTarget.className += " active";
        }
    </script>
</body>

</html>