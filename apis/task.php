<!-- Departments API -->
<section class="docs-section" id="item-3-5">
    <h2 class="section-heading">Task API</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur animi repellat vero iure et quasi illum neque debitis nesciunt. Libero ex omnis quisquam autem facere quibusdam sapiente perspiciatis ad ipsum, ullam, itaque praesentium obcaecati, ducimus aliquam excepturi sunt. Adipisci magni iure tempore molestiae perferendis sed, quae ipsa? Nihil, dolorum pariatur.</p>

    <div class="request-title">
        <h3 class="">Task / Create </h3><button class="post">POST</button>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat consectetur alias blanditiis nihil reprehenderit suscipit perspiciatis deleniti illo earum natus et provident, quis ipsum culpa, nisi voluptatibus doloremque omnis necessitatibus. Voluptas amet inventore maxime quae. At commodi libero illo ad.</p>

    <div class="tab ">
        <button class="tablinks" onclick="openTab(event, 'endpoint121')">Endpoint</button>
        <button class="tablinks" onclick="openTab(event, 'header121')">Header</button>
        <button class="tablinks" onclick="openTab(event, 'request121')">Request</button>
        <button class="tablinks" onclick="openTab(event, 'response121')">Response</button>
    </div>


    <div id="endpoint121" class="tab-content  fade-in ">
        <div id="endpoint-info-121" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    https://{your_endpoint}api/task/create

</code></pre>
        </div>
    </div>

    <div id="header121" class="tab-content  fade-in ">
        <div id="header-info-121" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    'Authorization: Bearer 26|yNpSU1WBYNtOaQ6T7e7vveAYYCezoFEjuvkz4Mwg865f471b',
    'Accept: application/json',
    'Content-Type: application/json'

</code></pre>
        </div>
    </div>

    <div id="request121" class="tab-content  fade-in ">
        <div id="request-info-121" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
{
    "title":"ORGAN PLACEMENT .",
    "description":"ORGAN PLACEMENT",
    "organCategoryId":2,
    "organId":2,
    "departmentId":"5",
    "organizationId":"2",
    "startDate":"2024/02/16",
    "endDate":"2024/02/17"
}
</code></pre>
        </div>
    </div>
    <div id="response121" class="tab-content  fade-in ">
        <div id="response-info-121" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
{
    "status": "Success",
    "message": "Task created successfully",
    "data": {
        "task": {
            "title": "ADMIN/CLERICAL/DATA COLLECTION",
            "description": "ADMIN/CLERICAL/DATA COLLECTION",
            "organ_category_id": 5,
            "organ_id": 2,
            "department_id": "1",
            "organization_id": "1",
            "updated_at": "2024-04-16T12:14:55.000000Z",
            "created_at": "2024-04-16T12:14:55.000000Z",
            "id": 21
        }
    },
    "meta": []
}
</code></pre>
        </div>
    </div>

    <div class="request-title">
        <h3 class="">Task / Update </h3><button class="put">PUT</button>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo illo iure temporibus doloremque dolores. Laborum sit nisi debitis incidunt, accusantium est repellendus quaerat necessitatibus minus culpa ipsum praesentium! Omnis voluptatibus sapiente alias hic quod soluta beatae debitis sit illum illo.
    </p>

    <div class="tab ">
        <button class="tablinks" onclick="openTab(event, 'endpoint122')">Endpoint</button>
        <button class="tablinks" onclick="openTab(event, 'header122')">Header</button>
        <button class="tablinks" onclick="openTab(event, 'request122')">Request</button>
        <button class="tablinks" onclick="openTab(event, 'response122')">Response</button>
    </div>


    <div id="endpoint122" class="tab-content  fade-in ">
        <div id="endpoint-info-122" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    http://{your_endpoint}api/task/update/id

</code></pre>
        </div>
    </div>

    <div id="header122" class="tab-content  fade-in ">
        <div id="header-info-122" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    'Authorization: Bearer 26|yNpSU1WBYNtOaQ6T7e7vveAYYCezoFEjuvkz4Mwg865f471b',
    'Accept: application/json',
    'Content-Type: application/json'
    
</code></pre>
        </div>
    </div>

    <div id="request122" class="tab-content  fade-in ">
        <div id="request-info-122" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
{
    "title":"ORGAN PLACEMENT .",
    "description":"ORGAN PLACEMENT",
    "organCategoryId":2,
    "organId":2,
    "departmentId":"5",
    "organizationId":"2",
    "startDate":"2024/02/16",
    "endDate":"2024/02/17"
}
</code></pre>
        </div>
    </div>

    <div id="response122" class="tab-content  fade-in ">
        <div id="response-info-122" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
{
    "status": "Success",
    "message": "Task updated successfully",
    "data": {
        "task": {
            "id": 20,
            "title": "ORGAN PLACEMENT .",
            "description": "ORGAN PLACEMENT",
            "organ_category_id": 2,
            "organ_id": 2,
            "department_id": "5",
            "organization_id": "2",
            "created_at": "2024-03-27T05:15:10.000000Z",
            "updated_at": "2024-04-17T05:07:06.000000Z"
        }
    },
    "meta": []
}
</code></pre>
        </div>
    </div>
    <div class="request-title">
        <h3 class="">Task / Delete </h3><button class="delete">DELETE</button>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae rerum inventore, laboriosam earum architecto totam autem illum voluptas numquam ut soluta consequuntur quisquam distinctio dolore error possimus qui harum consequatur. Inventore aut fugiat totam eligendi reiciendis libero asperiores obcaecati! Maxime!
    </p>

    <div class="tab ">
        <button class="tablinks" onclick="openTab(event, 'endpoint123')">Endpoint</button>
        <button class="tablinks" onclick="openTab(event, 'header123')">Header</button>
        <button class="tablinks" onclick="openTab(event, 'response123')">Response</button>
    </div>


    <div id="endpoint123" class="tab-content  fade-in ">
        <div id="endpoint-info-123" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    http://{your_endpoint}api/task/delete/id

</code></pre>
        </div>
    </div>

    <div id="header123" class="tab-content  fade-in ">
        <div id="header-info-123" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    'Authorization: Bearer 26|yNpSU1WBYNtOaQ6T7e7vveAYYCezoFEjuvkz4Mwg865f471b',
    'Accept: application/json',
    'Content-Type: application/json'

</code></pre>
        </div>
    </div>
    <div id="response123" class="tab-content  fade-in ">
        <div id="response-info-123" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
{
    "status": "Success",
    "message": "Task deleted successfully",
    "data": {
        "task": {
            "id": 10,
            "title": "ORGAN PLACEMENT .",
            "description": "ORGAN PLACEMENT",
            "organ_category_id": 2,
            "organ_id": 2,
            "department_id": 5,
            "organization_id": 2,
            "created_at": "2024-03-13T09:08:31.000000Z",
            "updated_at": "2024-04-17T05:46:28.000000Z"
        }
    },
    "meta": []
}
</code></pre>
        </div>
    </div>

    <div class="request-title">
        <h3 class="">Task / List Or Detail </h3><button class="get">GET</button>
    </div>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus, eveniet eligendi? Quas culpa sed temporibus debitis praesentium quidem doloremque at numquam, accusantium fugiat mollitia quos. Quae hic eveniet consequatur eligendi! Laudantium dignissimos repellat ea vero? Voluptatum quam et ea eveniet!
    </p>

    <div class="tab ">
        <button class="tablinks" onclick="openTab(event, 'endpoint131')">Endpoint</button>
        <button class="tablinks" onclick="openTab(event, 'header131')">Header</button>
        <button class="tablinks" onclick="openTab(event, 'response131')">Response</button>
    </div>


    <div id="endpoint131" class="tab-content  fade-in ">
        <div id="endpoint-info-131" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
	Get All User List

        http://{your_endpoint}api/task/list/
    
	Get User Detail By Id

	https://{your_endpoint}api/task/list/id

</code></pre>
        </div>
    </div>

    <div id="header131" class="tab-content  fade-in ">
        <div id="header-info-131" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    'Authorization: Bearer 26|yNpSU1WBYNtOaQ6T7e7vveAYYCezoFEjuvkz4Mwg865f471b',
    'Accept: application/json',
    'Content-Type: application/json'

</code></pre>
        </div>
    </div>




    <div id="response131" class="tab-content  fade-in ">
        <div id="response-info-131" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">

	List Response

{
    "status": "Success",
    "message": "Task List",
    "data": {
        "taskArray": [
            {
                "organ_id": 2,
                "organ_name": "Heart",
                "tasks": [
                    {
                        "id": 11,
                        "title": "MEDICAL MGMT/ CLINIC TIME",
                        "description": "Overseeing medical management tasks while organizing clinic schedules effectively.",
                        "organ_category_id": 1,
                        "organ_id": 2,
                        "department_id": 1,
                        "organization_id": 1,
                        "created_at": "2024-03-13T09:48:16.000000Z",
                        "updated_at": "2024-03-20T05:03:00.000000Z",
                        "organ_name": "Heart",
                        "organ_category_name": "Pre-Transplant",
                        "department_name": "Cardiology",
                        "organization_name": "TGI"
                    },
                    {
                        "id": 12,
                        "title": "ADMIN/CLERICAL/DATA COLLECTION",
                        "description": "Handling administrative duties, clerical tasks, and collecting data proficiently.",
                        "organ_category_id": 5,
                        "organ_id": 2,
                        "department_id": 1,
                        "organization_id": 1,
                        "created_at": "2024-03-13T09:52:24.000000Z",
                        "updated_at": "2024-03-20T05:03:23.000000Z",
                        "organ_name": "Heart",
                        "organ_category_name": "Post-Transplant",
                        "department_name": "Cardiology",
                        "organization_name": "TGI"
                    },
                    {
                        "id": 14,
                        "title": "DISCHARGE PLANNING",
                        "description": "Coordinating discharge plans effectively within the medical context.",
                        "organ_category_id": 9,
                        "organ_id": 2,
                        "department_id": 1,
                        "organization_id": 1,
                        "created_at": "2024-03-15T05:56:41.000000Z",
                        "updated_at": "2024-03-20T05:06:58.000000Z",
                        "organ_name": "Heart",
                        "organ_category_name": "On Call",
                        "department_name": "Cardiology",
                        "organization_name": "TGI"
                    },
                    {
                        "id": 15,
                        "title": "ORGAN PLACEMENT",
                        "description": "Pre-medication to placement of the organ",
                        "organ_category_id": 1,
                        "organ_id": 2,
                        "department_id": 1,
                        "organization_id": 1,
                        "created_at": "2024-03-20T05:08:03.000000Z",
                        "updated_at": "2024-03-20T05:08:03.000000Z",
                        "organ_name": "Heart",
                        "organ_category_name": "Pre-Transplant",
                        "department_name": "Cardiology",
                        "organization_name": "TGI"
                    },
                    {
                        "id": 16,
                        "title": "DICTATION",
                        "description": "Deduction of current chargers",
                        "organ_category_id": 9,
                        "organ_id": 2,
                        "department_id": 1,
                        "organization_id": 1,
                        "created_at": "2024-03-20T06:44:56.000000Z",
                        "updated_at": "2024-03-20T06:44:56.000000Z",
                        "organ_name": "Heart",
                        "organ_category_name": "On Call",
                        "department_name": "Cardiology",
                        "organization_name": "TGI"
                    }
                ]
            },
            {
                "organ_id": 3,
                "organ_name": "Bones Joints",
                "tasks": [
                    {
                        "id": 13,
                        "title": "FINANCIAL AUTH./APPT SCHEDULING",
                        "description": "FINANCIAL AUTH./APPT SCHEDULING",
                        "organ_category_id": 2,
                        "organ_id": 3,
                        "department_id": 2,
                        "organization_id": 1,
                        "created_at": "2024-03-15T05:53:34.000000Z",
                        "updated_at": "2024-03-15T05:53:34.000000Z",
                        "organ_name": "Bones Joints",
                        "organ_category_name": "Pre-Transplant",
                        "department_name": "Orthopedics",
                        "organization_name": "TGI"
                    }
                ]
            },
            {
                "organ_id": 14,
                "organ_name": "Kidney",
                "tasks": [
                    {
                        "id": 19,
                        "title": "Remove Kidney Stones",
                        "description": "Remove Kidney Stones",
                        "organ_category_id": 16,
                        "organ_id": 14,
                        "department_id": 1,
                        "organization_id": 1,
                        "created_at": "2024-03-27T05:14:03.000000Z",
                        "updated_at": "2024-03-27T05:14:03.000000Z",
                        "organ_name": "Kidney",
                        "organ_category_name": "Pre-Transplant",
                        "department_name": "Cardiology",
                        "organization_name": "TGI"
                    }
                ]
            }
        ]
    },
    "meta": []
}

Detail Response

{
    "status": "Success",
    "message": "Task Detail",
    "data": {
        "taskArray": [
            {
                "organ_id": 2,
                "organ_name": "Heart",
                "tasks": [
                    {
                        "id": 12,
                        "title": "ADMIN/CLERICAL/DATA COLLECTION",
                        "description": "Handling administrative duties, clerical tasks, and collecting data proficiently.",
                        "organ_category_id": 5,
                        "organ_id": 2,
                        "department_id": 1,
                        "organization_id": 1,
                        "created_at": "2024-03-13T09:52:24.000000Z",
                        "updated_at": "2024-03-20T05:03:23.000000Z",
                        "organ_name": "Heart",
                        "organ_category_name": "Post-Transplant",
                        "department_name": "Cardiology",
                        "organization_name": "TGI"
                    }
                ]
            }
        ]
    },
    "meta": []
}
</code></pre>
        </div>
    </div>
</section>