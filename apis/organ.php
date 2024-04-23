<!-- Departments API -->
<section class="docs-section" id="item-3-5">
    <h2 class="section-heading">Organ API</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur animi repellat vero iure et quasi illum neque debitis nesciunt. Libero ex omnis quisquam autem facere quibusdam sapiente perspiciatis ad ipsum, ullam, itaque praesentium obcaecati, ducimus aliquam excepturi sunt. Adipisci magni iure tempore molestiae perferendis sed, quae ipsa? Nihil, dolorum pariatur.</p>

    <div class="request-title">
        <h3 class="">Organ / Create </h3><button class="post">POST</button>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat consectetur alias blanditiis nihil reprehenderit suscipit perspiciatis deleniti illo earum natus et provident, quis ipsum culpa, nisi voluptatibus doloremque omnis necessitatibus. Voluptas amet inventore maxime quae. At commodi libero illo ad.</p>

    <div class="tab ">
        <button class="tablinks" onclick="openTab(event, 'endpoint162')">Endpoint</button>
        <button class="tablinks" onclick="openTab(event, 'header162')">Header</button>
        <button class="tablinks" onclick="openTab(event, 'request131')">Request</button>
        <button class="tablinks" onclick="openTab(event, 'response131')">Response</button>
    </div>


    <div id="endpoint162" class="tab-content  fade-in ">
        <div id="endpoint-info-162" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    http://{your_endpoint}api/organ/create

</code></pre>
        </div>
    </div>

    <div id="header162" class="tab-content  fade-in ">
        <div id="header-info-162" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    'Authorization: Bearer 26|yNpSU1WBYNtOaQ6T7e7vveAYYCezoFEjuvkz4Mwg865f471b',
    'Accept: application/json',
    'Content-Type: application/json'

</code></pre>
        </div>
    </div>

    <div id="request131" class="tab-content  fade-in ">
        <div id="request-info-131" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
{
    "organName":"Pancrxsdsdses",
    "departmentId":5,
    "organDescription":"",
    "status":1
}
</code></pre>
        </div>
    </div>
    <div id="response131" class="tab-content  fade-in ">
        <div id="response-info-131" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
 {
    "status": "Success",
    "message": "organ created successfully",
    "data": {
        "organ": {
            "organ_name": "Pancrxsdsdses",
            "department_id": 5,
            "description": null,
            "status": 1,
            "updated_at": "2024-04-18T06:09:18.000000Z",
            "created_at": "2024-04-18T06:09:18.000000Z",
            "id": 19
        }
    },
    "meta": []
}
</code></pre>
        </div>
    </div>

    <div class="request-title">
        <h3 class="">Organ / Update </h3><button class="put">PUT</button>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo illo iure temporibus doloremque dolores. Laborum sit nisi debitis incidunt, accusantium est repellendus quaerat necessitatibus minus culpa ipsum praesentium! Omnis voluptatibus sapiente alias hic quod soluta beatae debitis sit illum illo.
    </p>

    <div class="tab ">
        <button class="tablinks" onclick="openTab(event, 'endpoint161')">Endpoint</button>
        <button class="tablinks" onclick="openTab(event, 'header161')">Header</button>
        <button class="tablinks" onclick="openTab(event, 'request161')">Request</button>
        <button class="tablinks" onclick="openTab(event, 'response161')">Response</button>
    </div>


    <div id="endpoint161" class="tab-content  fade-in ">
        <div id="endpoint-info-161" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    http://{your_endpoint}api/organ/update/id

</code></pre>
        </div>
    </div>

    <div id="header161" class="tab-content  fade-in ">
        <div id="header-info-161" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    'Authorization: Bearer 26|yNpSU1WBYNtOaQ6T7e7vveAYYCezoFEjuvkz4Mwg865f471b',
    'Accept: application/json',
    'Content-Type: application/json'
    
</code></pre>
        </div>
    </div>

    <div id="request161" class="tab-content  fade-in ">
        <div id="request-info-161" class="docs-code-block">
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

    <div id="response161" class="tab-content  fade-in ">
        <div id="response-info-161" class="docs-code-block">
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
        <h3 class="">Organ / Delete </h3><button class="delete">DELETE</button>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae rerum inventore, laboriosam earum architecto totam autem illum voluptas numquam ut soluta consequuntur quisquam distinctio dolore error possimus qui harum consequatur. Inventore aut fugiat totam eligendi reiciendis libero asperiores obcaecati! Maxime!
    </p>

    <div class="tab ">
        <button class="tablinks" onclick="openTab(event, 'endpoint143')">Endpoint</button>
        <button class="tablinks" onclick="openTab(event, 'header143')">Header</button>
        <button class="tablinks" onclick="openTab(event, 'response143')">Response</button>
    </div>


    <div id="endpoint143" class="tab-content  fade-in ">
        <div id="endpoint-info-123" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    http://{your_endpoint}api/organ/delete/id

</code></pre>
        </div>
    </div>

    <div id="header143" class="tab-content  fade-in ">
        <div id="header-info-143" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    'Authorization: Bearer 26|yNpSU1WBYNtOaQ6T7e7vveAYYCezoFEjuvkz4Mwg865f471b',
    'Accept: application/json',
    'Content-Type: application/json'

</code></pre>
        </div>
    </div>
    <div id="response143" class="tab-content  fade-in ">
        <div id="response-info-143" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
 {
    "status": "Success",
    "message": "Organ deleted successfully",
    "data": {
        "Organ": {
            "id": 14,
            "organ_name": "Kidney",
            "description": "Kidney",
            "department_id": 1,
            "status": 1,
            "created_at": "2024-03-27T05:12:15.000000Z",
            "updated_at": "2024-03-27T05:12:15.000000Z"
        }
    },
    "meta": []
}
</code></pre>
        </div>
    </div>

    <div class="request-title">
        <h3 class="">Organ / List Or Detail </h3><button class="get">GET</button>
    </div>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus, eveniet eligendi? Quas culpa sed temporibus debitis praesentium quidem doloremque at numquam, accusantium fugiat mollitia quos. Quae hic eveniet consequatur eligendi! Laudantium dignissimos repellat ea vero? Voluptatum quam et ea eveniet!
    </p>

    <div class="tab ">
        <button class="tablinks" onclick="openTab(event, 'endpoint151')">Endpoint</button>
        <button class="tablinks" onclick="openTab(event, 'header151')">Header</button>
        <button class="tablinks" onclick="openTab(event, 'response151')">Response</button>
    </div>


    <div id="endpoint151" class="tab-content  fade-in ">
        <div id="endpoint-info-151" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
	Get All User List

        http://{your_endpoint}api/organ/list/
    
	Get User Detail By Id

	https://{your_endpoint}api/organ/list/id

</code></pre>
        </div>
    </div>

    <div id="header151" class="tab-content  fade-in ">
        <div id="header-info-151" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">
    'Authorization: Bearer 26|yNpSU1WBYNtOaQ6T7e7vveAYYCezoFEjuvkz4Mwg865f471b',
    'Accept: application/json',
    'Content-Type: application/json'

</code></pre>
        </div>
    </div>




    <div id="response151" class="tab-content  fade-in ">
        <div id="response-info-151" class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">

	List Response

{
    "status": "Success",
    "message": "Organ List",
    "data": {
        "organs": [
            {
                "id": 2,
                "organ_name": "Heart",
                "description": "Heart",
                "department_id": 1,
                "status": 1,
                "created_at": "2024-03-13T07:35:24.000000Z",
                "updated_at": "2024-03-13T07:35:24.000000Z",
                "department_name": "Cardiology"
            },
            {
                "id": 14,
                "organ_name": "Kidney",
                "description": "Kidney",
                "department_id": 1,
                "status": 1,
                "created_at": "2024-03-27T05:12:15.000000Z",
                "updated_at": "2024-03-27T05:12:15.000000Z",
                "department_name": "Cardiology"
            }
        ]
    },
    "meta": []
}

Detail Response

{
    "status": "Success",
    "message": "Organ Detail",
    "data": {
        "organs": [
            {
                "id": 2,
                "organ_name": "Heart",
                "description": "Heart",
                "department_id": 1,
                "status": 1,
                "created_at": "2024-03-13T07:35:24.000000Z",
                "updated_at": "2024-03-13T07:35:24.000000Z",
                "department_name": "Cardiology"
            }
        ]
    },
    "meta": []
}
</code></pre>
        </div>
    </div>
</section>