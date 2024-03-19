<!-- Departments API -->
<section class="docs-section" id="item-3-4">
    <h2 class="section-heading">Departments API</h2>
    <p>Announcing our newest enhancement to the software project: the Department Module. This transformative addition revolutionizes administrative workflows by seamlessly integrating department creation alongside administrator setup. With this feature, administrators can effortlessly establish departmental structures within our system, fostering enhanced data management and organizational efficiency. Embrace this cutting-edge functionality to elevate project management capabilities, ensuring streamlined operations and heightened control. Explore this innovative module today to unlock the full potential of our software solution.</p>

    <div class="request-title">
        <h3 class="">Department / Create </h3><button class="post">POST</button>
    </div>
    <p>With our Department <b> Creation </b> API, effortlessly establish new Departmental entities within our platform, fostering streamlined management processes. Through straightforward API calls, developers can seamlessly integrate this functionality into their applications, enabling swift Department setup and management. Embrace this powerful tool to enhance administrative efficiency and facilitate seamless Department management within your system.</p>

    <div class="tab ">
        <button class="tablinks" onclick="openTab(event, 'endpoint11')">Endpoint</button>
        <button class="tablinks" onclick="openTab(event, 'header11')">Header</button>
        <button class="tablinks" onclick="openTab(event, 'request11')">Request</button>
        <button class="tablinks" onclick="openTab(event, 'response11')">Response</button>
    </div>


    <div id="endpoint11" class="tab-content  fade-in ">
        <div id="endpoint-info-11" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    https://{your_endpoint}api/department/create

</code></pre>
        </div>
    </div>

    <div id="header11" class="tab-content  fade-in ">
        <div id="header-info-11" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    'Authorization: Bearer 26|yNpSU1WBYNtOaQ6T7e7vveAYYCezoFEjuvkz4Mwg865f471b',
    'Accept: application/json',
    'Content-Type: application/json'

</code></pre>
        </div>
    </div>

    <div id="request11" class="tab-content  fade-in ">
        <div id="request-info-11" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
{
    "department_name":"Cardio",
    "description":"Cardio department description",
    "organization_id":1,
    "status":1
}
</code></pre>
        </div>
    </div>
    <div id="response11" class="tab-content  fade-in ">
        <div id="response-info-11" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
{
    "status": "Success",
    "message": "Department created successfully",
    "data": {
        "department": {
            "department_name": "Cardio",
            "description": "Cardio department description",
            "organization_id": 1,
            "status": true,
            "updated_at": "2024-02-29T11:58:54.000000Z",
            "created_at": "2024-02-29T11:58:54.000000Z",
            "id": 10
        }
    },
    "meta": []
}
</code></pre>
        </div>
    </div>

    <div class="request-title">
        <h3 class="">Department / Update </h3><button class="put">PUT</button>
    </div>
    <p>Our Department <b> Update </b>API, seamlessly modify existing department entities within our platform, enhancing management processes. Through simple API calls, developers can integrate this functionality into their applications, facilitating efficient department updates. Embrace this versatile tool to optimize administrative efficiency and ensure seamless department management within your system.
    </p>

    <div class="tab ">
        <button class="tablinks" onclick="openTab(event, 'endpoint10')">Endpoint</button>
        <button class="tablinks" onclick="openTab(event, 'header10')">Header</button>
        <button class="tablinks" onclick="openTab(event, 'request10')">Request</button>
        <button class="tablinks" onclick="openTab(event, 'response10')">Response</button>
    </div>


    <div id="endpoint10" class="tab-content  fade-in ">
        <div id="endpoint-info-10" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    https://{your_endpoint}api/department/update/id

</code></pre>
        </div>
    </div>

    <div id="header10" class="tab-content  fade-in ">
        <div id="header-info-10" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    'Authorization: Bearer 26|yNpSU1WBYNtOaQ6T7e7vveAYYCezoFEjuvkz4Mwg865f471b',
    'Accept: application/json',
    'Content-Type: application/json'

</code></pre>
        </div>
    </div>

    <div id="request10" class="tab-content  fade-in ">
        <div id="request-info-10" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
            {
    "department_name":"Cardio update",
    "description":"Cardio department description update",
    "organization_id":1,
    "status":1
}
</code></pre>
        </div>
    </div>

    <div id="response10" class="tab-content  fade-in ">
        <div id="response-info-10" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
{
    "status": "Success",
    "message": "Department updated successfully",
    "data": {
        "department": {
            "id": 10,
            "department_name": "Cardio update",
            "description": "Cardio department description update",
            "status": true,
            "created_at": "2024-02-29T11:58:54.000000Z",
            "updated_at": "2024-02-29T12:01:32.000000Z",
            "organization_id": 1
        }
    },
    "meta": []
}
</code></pre>
        </div>
    </div>
    <div class="request-title">
        <h3 class="">Department / Delete </h3><button class="delete">DELETE</button>
    </div>
    <p>Our Department <b> Deletion </b>API, effortlessly remove Departmental entities within our platform using the ID provided in the URL. Through straightforward API calls, developers can seamlessly integrate this functionality into their applications, enabling swift deletion of specific Departments. Embrace this robust tool to enhance administrative efficiency and facilitate seamless Department management within your system.
    </p>

    <div class="tab ">
        <button class="tablinks" onclick="openTab(event, 'endpoint12')">Endpoint</button>
        <button class="tablinks" onclick="openTab(event, 'header12')">Header</button>
        <button class="tablinks" onclick="openTab(event, 'response12')">Response</button>
    </div>


    <div id="endpoint12" class="tab-content  fade-in ">
        <div id="endpoint-info-12" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    https://{your_endpoint}api/department/delete/id

</code></pre>
        </div>
    </div>

    <div id="header12" class="tab-content  fade-in ">
        <div id="header-info-12" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    'Authorization: Bearer 26|yNpSU1WBYNtOaQ6T7e7vveAYYCezoFEjuvkz4Mwg865f471b',
    'Accept: application/json',
    'Content-Type: application/json'

</code></pre>
        </div>
    </div>
    <div id="response12" class="tab-content  fade-in ">
        <div id="response-info-12" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
{
    "status": "Success",
    "message": "Department deleted successfully",
    "data": {
        "department": {
            "id": 10,
            "department_name": "Cardio update",
            "description": "Cardio department description update",
            "status": true,
            "created_at": "2024-02-29T11:58:54.000000Z",
            "updated_at": "2024-02-29T12:01:32.000000Z",
            "organization_id": 1
        }
    },
    "meta": []
}
</code></pre>
        </div>
    </div>

    <div class="request-title">
        <h3 class="">Department / List Or Detail </h3><button class="get">GET</button>
    </div>
    <p>Our Department <b> List Or Detail </b>API provides a comprehensive overview of all Department accounts within our system, offering developers a convenient method to retrieve multiple Department records. Additionally, by appending the user ID to the endpoint URL, developers can access detailed information for a specific user, facilitating efficient retrieval of individual Department detail. This functionality ensures flexibility in managing Department data and facilitates streamlined access control processes.
    </p>

    <div class="tab ">
        <button class="tablinks" onclick="openTab(event, 'endpoint13')">Endpoint</button>
        <button class="tablinks" onclick="openTab(event, 'header13')">Header</button>
        <button class="tablinks" onclick="openTab(event, 'response13')">Response</button>
    </div>


    <div id="endpoint13" class="tab-content  fade-in ">
        <div id="endpoint-info-13" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
	Get All User List

    https://{your_endpoint}api/department/list/

	Get User Detail By Id

	https://{your_endpoint}api/department/list/id

</code></pre>
        </div>
    </div>

    <div id="header13" class="tab-content  fade-in ">
        <div id="header-info-13" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    'Authorization: Bearer 26|yNpSU1WBYNtOaQ6T7e7vveAYYCezoFEjuvkz4Mwg865f471b',
    'Accept: application/json',
    'Content-Type: application/json'

</code></pre>
        </div>
    </div>




    <div id="response13" class="tab-content  fade-in ">
        <div id="response-info-13" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">

	List Response

{
    "status": "Success",
    "message": "Department list",
    "data": {
        "department": [
            {
                "id": 6,
                "department_name": "liver department",
                "description": null,
                "status": true,
                "created_at": "2024-02-13T13:58:17.000000Z",
                "updated_at": "2024-02-13T13:58:17.000000Z",
                "organization_id": 1,
                "organization_name": "TGI"
            },
            {
                "id": 7,
                "department_name": "pancres department",
                "description": null,
                "status": true,
                "created_at": "2024-02-15T12:10:06.000000Z",
                "updated_at": "2024-02-15T12:12:53.000000Z",
                "organization_id": 1,
                "organization_name": "TGI"
            },
            {
                "id": 10,
                "department_name": "Cardio update",
                "description": "Cardio department description update",
                "status": true,
                "created_at": "2024-02-29T11:58:54.000000Z",
                "updated_at": "2024-02-29T12:01:32.000000Z",
                "organization_id": 1,
                "organization_name": "TGI"
            }
        ]
    },
    "meta": []
}

	Detail Response

{
    "status": "Success",
    "message": "Department detail",
    "data": {
        "department": [
            {
                "id": 10,
                "department_name": "Cardio update",
                "description": "Cardio department description update",
                "status": true,
                "created_at": "2024-02-29T11:58:54.000000Z",
                "updated_at": "2024-02-29T12:01:32.000000Z",
                "organization_id": 1,
                "organization_name": "TGI"
            }
        ]
    },
    "meta": []
}
</code></pre>
        </div>
    </div>
</section>
