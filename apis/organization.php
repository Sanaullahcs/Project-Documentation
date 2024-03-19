<!-- Organizations API -->
<section class="docs-section" id="item-3-3">
    <h2 class="section-heading">Organizations API</h2>
    <p>Introducing our latest enhancement to the software project: the Organization Module. This pivotal addition optimizes administrative workflows by seamlessly integrating organization creation alongside administrator setup. With this feature, administrators can effortlessly establish organizational structures within our system, fostering enhanced data management and organizational efficiency. Embrace this cutting-edge functionality to elevate project management capabilities, ensuring streamlined operations and heightened control. Explore this innovative module today to unlock the full potential of our software solution.</p>

    <div class="request-title">
        <h3 class="">Organization / Create </h3><button class="post">POST</button>
    </div>
    <p>With our Organization <b> Creation </b> API, effortlessly establish new organizational entities within our platform, fostering streamlined management processes. Through straightforward API calls, developers can seamlessly integrate this functionality into their applications, enabling swift organization setup and management. Embrace this powerful tool to enhance administrative efficiency and facilitate seamless organization management within your system.</p>

    <div class="tab ">
        <button class="tablinks" onclick="openTab(event, 'endpoint6')">Endpoint</button>
        <button class="tablinks" onclick="openTab(event, 'header6')">Header</button>
        <button class="tablinks" onclick="openTab(event, 'request6')">Request</button>
        <button class="tablinks" onclick="openTab(event, 'response6')">Response</button>
    </div>


    <div id="endpoint6" class="tab-content  fade-in ">
        <div id="endpoint-info-6" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    https://{your_endpoint}api/organization/create

</code></pre>
        </div>
    </div>

    <div id="header6" class="tab-content  fade-in ">
        <div id="header-info-6" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    'Authorization: Bearer 26|yNpSU1WBYNtOaQ6T7e7vveAYYCezoFEjuvkz4Mwg865f471b',
    'Accept: application/json',
    'Content-Type: application/json'

</code></pre>
        </div>
    </div>

    <div id="request6" class="tab-content  fade-in ">
        <div id="request-info-6" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
{
    "organizationName": "test case",
    "description": "test case",
    "status": 1
}
</code></pre>
        </div>
    </div>
    <div id="response6" class="tab-content  fade-in ">
        <div id="response-info-6" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
{
    "status": "Success",
    "message": "Organization created successfully",
    "data": {
        "organization": {
            "organization_name": "test case",
            "description": "test case",
            "status": 1,
            "updated_at": "2024-02-29T11:07:41.000000Z",
            "created_at": "2024-02-29T11:07:41.000000Z",
            "id": 7
        }
    },
    "meta": []
}
</code></pre>
        </div>
    </div>

    <div class="request-title">
        <h3 class="">Organization / Update </h3><button class="put">PUT</button>
    </div>
    <p>Our Organization <b> Update </b>API, seamlessly modify existing organizational entities within our platform, enhancing management processes. Through simple API calls, developers can integrate this functionality into their applications, facilitating efficient organization updates. Embrace this versatile tool to optimize administrative efficiency and ensure seamless organization management within your system.
    </p>

    <div class="tab ">
        <button class="tablinks" onclick="openTab(event, 'endpoint9')">Endpoint</button>
        <button class="tablinks" onclick="openTab(event, 'header9')">Header</button>
        <button class="tablinks" onclick="openTab(event, 'request9')">Request</button>
        <button class="tablinks" onclick="openTab(event, 'response9')">Response</button>
    </div>


    <div id="endpoint9" class="tab-content  fade-in ">
        <div id="endpoint-info-9" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    https://{your_endpoint}api/organization/update/id

</code></pre>
        </div>
    </div>

    <div id="header9" class="tab-content  fade-in ">
        <div id="header-info-9" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    'Authorization: Bearer 26|yNpSU1WBYNtOaQ6T7e7vveAYYCezoFEjuvkz4Mwg865f471b',
    'Accept: application/json',
    'Content-Type: application/json'

</code></pre>
        </div>
    </div>

    <div id="request9" class="tab-content  fade-in ">
        <div id="request-info-9" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
{
    "organizationName":"task case done",
    "description":"task case done",
    "status":1
}
</code></pre>
        </div>
    </div>

    <div id="response9" class="tab-content  fade-in ">
        <div id="response-info-9" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
{
    "status": "Success",
    "message": "Organization updated successfully",
    "data": {
        "organization": {
            "id": 7,
            "organization_name": "task case done",
            "description": "test case",
            "status": 1,
            "created_at": "2024-02-29T11:07:41.000000Z",
            "updated_at": "2024-02-29T11:09:59.000000Z"
        }
    },
    "meta": []
}
</code></pre>
        </div>
    </div>
    <div class="request-title">
        <h3 class="">Organization / Delete </h3><button class="delete">DELETE</button>
    </div>
    <p>Our Organization <b> Deletion </b>API, effortlessly remove organizational entities within our platform using the ID provided in the URL. Through straightforward API calls, developers can seamlessly integrate this functionality into their applications, enabling swift deletion of specific organizations. Embrace this robust tool to enhance administrative efficiency and facilitate seamless organization management within your system.
    </p>

    <div class="tab ">
        <button class="tablinks" onclick="openTab(event, 'endpoint7')">Endpoint</button>
        <button class="tablinks" onclick="openTab(event, 'header7')">Header</button>
        <button class="tablinks" onclick="openTab(event, 'response7')">Response</button>
    </div>


    <div id="endpoint7" class="tab-content  fade-in ">
        <div id="endpoint-info-7" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    https://{your_endpoint}api/organization/delete/id

</code></pre>
        </div>
    </div>

    <div id="header7" class="tab-content  fade-in ">
        <div id="header-info-7" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    'Authorization: Bearer 26|yNpSU1WBYNtOaQ6T7e7vveAYYCezoFEjuvkz4Mwg865f471b',
    'Accept: application/json',
    'Content-Type: application/json'

</code></pre>
        </div>
    </div>
    <div id="response7" class="tab-content  fade-in ">
        <div id="response-info-7" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
{
    "status": "Success",
    "message": "Organization deleted successfully",
    "data": {
        "organization": {
            "id": 7,
            "organization_name": "task case done",
            "description": "test case",
            "status": 1,
            "created_at": "2024-02-29T11:07:41.000000Z",
            "updated_at": "2024-02-29T11:09:59.000000Z"
        }
    },
    "meta": []
}
</code></pre>
        </div>
    </div>

    <div class="request-title">
        <h3 class="">Organization / List Or Detail </h3><button class="get">GET</button>
    </div>
    <p>Our Organization <b> List Or Detail </b>API provides a comprehensive overview of all organization accounts within our system, offering developers a convenient method to retrieve multiple organization records. Additionally, by appending the user ID to the endpoint URL, developers can access detailed information for a specific user, facilitating efficient retrieval of individual organization detail. This functionality ensures flexibility in managing organization data and facilitates streamlined access control processes.
    </p>

    <div class="tab ">
        <button class="tablinks" onclick="openTab(event, 'endpoint8')">Endpoint</button>
        <button class="tablinks" onclick="openTab(event, 'header8')">Header</button>
        <button class="tablinks" onclick="openTab(event, 'response8')">Response</button>
    </div>


    <div id="endpoint8" class="tab-content  fade-in ">
        <div id="endpoint-info-8" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
	Get All User List

    https://{your_endpoint}api/organization/list/

	Get User Detail By Id

	https://{your_endpoint}api/organization/list/id

</code></pre>
        </div>
    </div>

    <div id="header8" class="tab-content  fade-in ">
        <div id="header-info-8" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    'Authorization: Bearer 26|yNpSU1WBYNtOaQ6T7e7vveAYYCezoFEjuvkz4Mwg865f471b',
    'Accept: application/json',
    'Content-Type: application/json'

</code></pre>
        </div>
    </div>




    <div id="response8" class="tab-content  fade-in ">
        <div id="response-info-8" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">

	List Response

{
    "status": "Success",
    "message": "Organization list",
    "data": {
        "organizations": [
            {
                "id": 1,
                "organization_name": "TGI",
                "description": null,
                "status": 1,
                "created_at": "2024-02-14T11:21:20.000000Z",
                "updated_at": "2024-02-14T11:21:20.000000Z"
            },
            {
                "id": 2,
                "organization_name": "devhouse",
                "description": null,
                "status": 1,
                "created_at": "2024-02-14T11:21:39.000000Z",
                "updated_at": "2024-02-14T11:21:39.000000Z"
            },
            {
                "id": 3,
                "organization_name": "align one",
                "description": "AMG",
                "status": 1,
                "created_at": "2024-02-14T11:21:51.000000Z",
                "updated_at": "2024-02-21T11:54:47.000000Z"
            },
            {
                "id": 4,
                "organization_name": "next bridge 1",
                "description": "abc",
                "status": 1,
                "created_at": "2024-02-14T11:22:01.000000Z",
                "updated_at": "2024-02-21T11:54:18.000000Z"
            },
            {
                "id": 6,
                "organization_name": "G CLASS",
                "description": "AMG",
                "status": 1,
                "created_at": "2024-02-21T11:55:47.000000Z",
                "updated_at": "2024-02-21T11:55:47.000000Z"
            },
            {
                "id": 7,
                "organization_name": "task case done",
                "description": "test case",
                "status": 1,
                "created_at": "2024-02-29T11:07:41.000000Z",
                "updated_at": "2024-02-29T11:09:59.000000Z"
            }
        ]
    },
    "meta": []
}

	Detail Response

{
    "status": "Success",
    "message": "Organization detail",
    "data": {
        "organization": {
            "id": 7,
            "organization_name": "task case done",
            "description": "test case",
            "status": 1,
            "created_at": "2024-02-29T11:07:41.000000Z",
            "updated_at": "2024-02-29T11:09:59.000000Z"
        }
    },
    "meta": []
}
</code></pre>
        </div>
    </div>
</section>
