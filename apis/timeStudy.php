<!-- Departments API -->
<section class="docs-section" id="item-3-9">
    <h2 class="section-heading">Time Study API</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur animi repellat vero iure et quasi illum neque debitis nesciunt. Libero ex omnis quisquam autem facere quibusdam sapiente perspiciatis ad ipsum, ullam, itaque praesentium obcaecati, ducimus aliquam excepturi sunt. Adipisci magni iure tempore molestiae perferendis sed, quae ipsa? Nihil, dolorum pariatur.</p>

    <div class="request-title">
        <h3 class="">Time Study / Create </h3><button class="post">POST</button>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat consectetur alias blanditiis nihil reprehenderit suscipit perspiciatis deleniti illo earum natus et provident, quis ipsum culpa, nisi voluptatibus doloremque omnis necessitatibus. Voluptas amet inventore maxime quae. At commodi libero illo ad.</p>

    <div class="tab ">
        <button class="tablinks" onclick="openTab(event, 'endpoint208')">Endpoint</button>
        <button class="tablinks" onclick="openTab(event, 'header208')">Header</button>
        <button class="tablinks" onclick="openTab(event, 'request208')">Request</button>
        <button class="tablinks" onclick="openTab(event, 'response208')">Response</button>
    </div>


    <div id="endpoint208" class="tab-content  fade-in ">
        <div id="endpoint-info-208" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    http://{your_endpoint}api/timeStudy/create

</code></pre>
        </div>
    </div>

    <div id="header208" class="tab-content  fade-in ">
        <div id="header-info-208" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    'Authorization: Bearer 26|yNpSU1WBYNtOaQ6T7e7vveAYYCezoFEjuvkz4Mwg865f471b',
    'Accept: application/json',
    'Content-Type: application/json'

</code></pre>
        </div>
    </div>

    <div id="request208" class="tab-content  fade-in ">
        <div id="request-info-208" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
{
    "organCategoryName":"POST-trans",
    "description":"POST-trans",
    "organId":30,
    "status":1
}
</code></pre>
        </div>
    </div>
    <div id="response208" class="tab-content  fade-in ">
        <div id="response-info-208" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
{
    "status": "Success",
    "message": "Organ Category created successfully",
    "data": {
        "OrganCategory": {
            "organ_category_name": "POST-trans",
            "description": "POST-trans",
            "organ_id": 30,
            "status": 1,
            "updated_at": "2024-04-18T07:25:43.000000Z",
            "created_at": "2024-04-18T07:25:43.000000Z",
            "id": 18
        }
    },
    "meta": []
}
</code></pre>
        </div>
    </div>

    <div class="request-title">
        <h3 class="">Time Study / Update </h3><button class="put">PUT</button>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo illo iure temporibus doloremque dolores. Laborum sit nisi debitis incidunt, accusantium est repellendus quaerat necessitatibus minus culpa ipsum praesentium! Omnis voluptatibus sapiente alias hic quod soluta beatae debitis sit illum illo.
    </p>

    <div class="tab ">
        <button class="tablinks" onclick="openTab(event, 'endpoint209')">Endpoint</button>
        <button class="tablinks" onclick="openTab(event, 'header209')">Header</button>
        <button class="tablinks" onclick="openTab(event, 'request209')">Request</button>
        <button class="tablinks" onclick="openTab(event, 'response209')">Response</button>
    </div>


    <div id="endpoint209" class="tab-content  fade-in ">
        <div id="endpoint-info-209" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    http://{your_endpoint}api/organCategory/update/id

</code></pre>
        </div>
    </div>

    <div id="header209" class="tab-content  fade-in ">
        <div id="header-info-209" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    'Authorization: Bearer 26|yNpSU1WBYNtOaQ6T7e7vveAYYCezoFEjuvkz4Mwg865f471b',
    'Accept: application/json',
    'Content-Type: application/json'
    
</code></pre>
        </div>
    </div>

    <div id="request209" class="tab-content  fade-in ">
        <div id="request-info-209" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
            {
    "organName":"Pancressss",
    "organDescription":"Brainsss",
    "departmentId":"6",
    "status":1
}
</code></pre>
        </div>
    </div>

    <div id="response209" class="tab-content  fade-in ">
        <div id="response-info-209" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
{
    "status": "Success",
    "message": "Organ updated successfully",
    "data": {
        "organ": {
            "id": 2,
            "organ_name": "Pancressss",
            "description": "Brainsss",
            "department_id": "6",
            "status": 1,
            "created_at": "2024-03-13T07:35:24.000000Z",
            "updated_at": "2024-04-18T06:16:52.000000Z"
        }
    },
    "meta": []
}
</code></pre>
        </div>
    </div>
    <div class="request-title">
        <h3 class="">Time Study / Delete </h3><button class="delete">DELETE</button>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae rerum inventore, laboriosam earum architecto totam autem illum voluptas numquam ut soluta consequuntur quisquam distinctio dolore error possimus qui harum consequatur. Inventore aut fugiat totam eligendi reiciendis libero asperiores obcaecati! Maxime!
    </p>

    <div class="tab ">
        <button class="tablinks" onclick="openTab(event, 'endpoint210')">Endpoint</button>
        <button class="tablinks" onclick="openTab(event, 'header210')">Header</button>
        <button class="tablinks" onclick="openTab(event, 'response210')">Response</button>
    </div>


    <div id="endpoint210" class="tab-content  fade-in ">
        <div id="endpoint-info-210" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    http://{your_endpoint}api/organCategory/delete/id

</code></pre>
        </div>
    </div>

    <div id="header210" class="tab-content  fade-in ">
        <div id="header-info-210" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    'Authorization: Bearer 26|yNpSU1WBYNtOaQ6T7e7vveAYYCezoFEjuvkz4Mwg865f471b',
    'Accept: application/json',
    'Content-Type: application/json'

</code></pre>
        </div>
    </div>
    <div id="response210" class="tab-content  fade-in ">
        <div id="response-info-210" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
{
    "status": "Success",
    "message": "Organ Category deleted successfully",
    "data": {
        "Organ Category": {
            "id": 9,
            "organ_category_name": "On Call",
            "description": "On Call",
            "organ_id": 2,
            "status": 1,
            "created_at": "2024-03-13T07:45:43.000000Z",
            "updated_at": "2024-03-13T07:45:43.000000Z"
        }
    },
    "meta": []
}
</code></pre>
        </div>
    </div>

    <div class="request-title">
        <h3 class="">Time Study / List Or Detail </h3><button class="get">GET</button>
    </div>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus, eveniet eligendi? Quas culpa sed temporibus debitis praesentium quidem doloremque at numquam, accusantium fugiat mollitia quos. Quae hic eveniet consequatur eligendi! Laudantium dignissimos repellat ea vero? Voluptatum quam et ea eveniet!
    </p>

    <div class="tab ">
        <button class="tablinks" onclick="openTab(event, 'endpoint211')">Endpoint</button>
        <button class="tablinks" onclick="openTab(event, 'header211')">Header</button>
        <button class="tablinks" onclick="openTab(event, 'response211')">Response</button>
    </div>


    <div id="endpoint211" class="tab-content  fade-in ">
        <div id="endpoint-info-211" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
	Get All User List

        http://{your_endpoint}api/organCategory/list/
    
	Get User Detail By Id

        http://{your_endpoint}api/organCategory/list/id

</code></pre>
        </div>
    </div>

    <div id="header211" class="tab-content  fade-in ">
        <div id="header-info-211" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    'Authorization: Bearer 26|yNpSU1WBYNtOaQ6T7e7vveAYYCezoFEjuvkz4Mwg865f471b',
    'Accept: application/json',
    'Content-Type: application/json'

</code></pre>
        </div>
    </div>




    <div id="response211" class="tab-content  fade-in ">
        <div id="response-info-211" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">

List Response

{
    "status": "Success",
    "message": "201",
    "data": {
        "organsCategory": [
            {
                "id": 1,
                "organ_category_name": "Pre-Transplant",
                "description": "Pre-Transplant",
                "organ_id": 2,
                "status": 1,
                "created_at": "2024-03-13T07:41:30.000000Z",
                "updated_at": "2024-03-13T07:41:30.000000Z",
                "organ_name": "Pancressss"
            },
            {
                "id": 2,
                "organ_category_name": "Pre-Transplant",
                "description": "Pre-Transplant",
                "organ_id": 3,
                "status": 1,
                "created_at": "2024-03-13T07:43:37.000000Z",
                "updated_at": "2024-03-13T07:43:37.000000Z",
                "organ_name": "Bones Joints"
            },
            {
                "id": 3,
                "organ_category_name": "Pre-Transplant",
                "description": "Pre-Transplant",
                "organ_id": 4,
                "status": 1,
                "created_at": "2024-03-13T07:43:46.000000Z",
                "updated_at": "2024-03-13T07:43:46.000000Z",
                "organ_name": "Brain Spinal Cord"
            },
            {
                "id": 4,
                "organ_category_name": "Pre-Transplant",
                "description": "Pre-Transplant",
                "organ_id": 5,
                "status": 1,
                "created_at": "2024-03-13T07:43:59.000000Z",
                "updated_at": "2024-03-13T07:43:59.000000Z",
                "organ_name": "Lungs"
            },
            {
                "id": 5,
                "organ_category_name": "Post-Transplant",
                "description": "Post-Transplant",
                "organ_id": 2,
                "status": 1,
                "created_at": "2024-03-13T07:44:50.000000Z",
                "updated_at": "2024-03-13T07:44:50.000000Z",
                "organ_name": "Pancressss"
            },
            {
                "id": 6,
                "organ_category_name": "Post-Transplant",
                "description": "Post-Transplant",
                "organ_id": 3,
                "status": 1,
                "created_at": "2024-03-13T07:44:58.000000Z",
                "updated_at": "2024-03-13T07:44:58.000000Z",
                "organ_name": "Bones Joints"
            },
            {
                "id": 7,
                "organ_category_name": "Post-Transplant",
                "description": "Post-Transplant",
                "organ_id": 4,
                "status": 1,
                "created_at": "2024-03-13T07:45:06.000000Z",
                "updated_at": "2024-03-13T07:45:06.000000Z",
                "organ_name": "Brain Spinal Cord"
            },
            {
                "id": 8,
                "organ_category_name": "Post-Transplant",
                "description": "Post-Transplant",
                "organ_id": 5,
                "status": 1,
                "created_at": "2024-03-13T07:45:12.000000Z",
                "updated_at": "2024-03-13T07:45:12.000000Z",
                "organ_name": "Lungs"
            },
            {
                "id": 9,
                "organ_category_name": "On Call",
                "description": "On Call",
                "organ_id": 2,
                "status": 1,
                "created_at": "2024-03-13T07:45:43.000000Z",
                "updated_at": "2024-03-13T07:45:43.000000Z",
                "organ_name": "Pancressss"
            },
            {
                "id": 11,
                "organ_category_name": "On Call",
                "description": "On Call",
                "organ_id": 3,
                "status": 1,
                "created_at": "2024-03-13T07:46:34.000000Z",
                "updated_at": "2024-03-21T05:05:26.000000Z",
                "organ_name": "Bones Joints"
            },
            {
                "id": 12,
                "organ_category_name": "On Call",
                "description": "On Call",
                "organ_id": 4,
                "status": 1,
                "created_at": "2024-03-13T07:46:43.000000Z",
                "updated_at": "2024-03-13T07:46:43.000000Z",
                "organ_name": "Brain Spinal Cord"
            },
            {
                "id": 13,
                "organ_category_name": "On Call",
                "description": "On Call",
                "organ_id": 5,
                "status": 1,
                "created_at": "2024-03-13T07:46:50.000000Z",
                "updated_at": "2024-03-13T07:46:50.000000Z",
                "organ_name": "Lungs"
            },
            {
                "id": 16,
                "organ_category_name": "Pre-Transplant",
                "description": "Pre Transplant",
                "organ_id": 14,
                "status": 1,
                "created_at": "2024-03-27T05:13:06.000000Z",
                "updated_at": "2024-03-27T05:13:06.000000Z",
                "organ_name": "Kidney"
            },
            {
                "id": 17,
                "organ_category_name": "Post-Transplant",
                "description": null,
                "organ_id": 14,
                "status": 1,
                "created_at": "2024-03-27T05:14:43.000000Z",
                "updated_at": "2024-03-27T05:14:43.000000Z",
                "organ_name": "Kidney"
            },
            {
                "id": 18,
                "organ_category_name": "POST-trans",
                "description": "POST-trans",
                "organ_id": 30,
                "status": 1,
                "created_at": "2024-04-18T07:25:43.000000Z",
                "updated_at": "2024-04-18T07:25:43.000000Z",
                "organ_name": null
            }
        ]
    },
    "meta": []
}

Detail Response

{
    "status": "Success",
    "message": "201",
    "data": {
        "organsCategory": [
            {
                "id": 2,
                "organ_category_name": "Pre-Transplant",
                "description": "Pre-Transplant",
                "organ_id": 3,
                "status": 1,
                "created_at": "2024-03-13T07:43:37.000000Z",
                "updated_at": "2024-03-13T07:43:37.000000Z",
                "organ_name": "Bones Joints"
            }
        ]
    },
    "meta": []
}
</code></pre>
        </div>
    </div>
</section>