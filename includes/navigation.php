<div id="docs-sidebar" class="docs-sidebar">
    <div class="top-search-box d-lg-none p-3">
        <form class="search-form">
            <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
            <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <nav id="docs-nav" class="docs-nav navbar">
        <ul class="section-items list-unstyled nav flex-column pb-3">
            <li class="nav-item section-title"><a class="nav-link scrollto" ><span class="theme-icon-holder me-2"><i class="fas fa-map-signs"></i></span>Introduction</a></li>
			<li class="nav-item"><a class="nav-link" href="#item-1-1" onclick="scrollToSection('item-1-1')">Overview</a></li>

            <li class="nav-item section-title mt-3">
                <a class="nav-link" >
                    <span class="theme-icon-holder me-2">
                        <i class="fas fa-box"></i></span>APIs</a></li>
            <li class="nav-item"><a class="nav-link" href="#item-3-1" onclick="scrollToSection('item-3-1')">Authentication</a></li>

            <li class="nav-item"><a class="nav-link" href="#item-3-2" onclick="scrollToSection('item-3-2')">Users</a></li>
            <li class="nav-item"><a class="nav-link" href="#item-3-3" onclick="scrollToSection('item-3-3')">Organizations</a></li>
            <li class="nav-item"><a class="nav-link" href="#item-3-4" onclick="scrollToSection('item-3-4')">Departments</a></li>
            <li class="nav-item"><a class="nav-link" href="#item-3-6" onclick="scrollToSection('item-3-6')">Organ</a></li>
            <li class="nav-item"><a class="nav-link" href="#item-3-6" onclick="scrollToSection('item-3-6')">Organ Category </a></li>
            <li class="nav-item"><a class="nav-link" href="#item-3-5" onclick="scrollToSection('item-3-5')">Task</a></li>
            <li class="nav-item"><a class="nav-link" href="#item-3-5" onclick="scrollToSection('item-3-5')">Assign Task</a></li>
            <li class="nav-item"><a class="nav-link" href="#item-3-5" onclick="scrollToSection('item-3-5')">Time Study</a></li>
        </ul>
    </nav>
</div>






<script>
    function scrollToSection(sectionId) {
        var section = document.getElementById(sectionId);
        if (section) {
            section.scrollIntoView({ behavior: 'smooth', block: 'start' });
            updateActiveClass(sectionId);
        }
    }

    function updateActiveClass(sectionId) {
        // Remove active class from all menu items
        document.querySelectorAll('.nav-link').forEach(function(link) {
            link.classList.remove('active');
        });
        // Add active class to the clicked menu item
        var currentLink = document.querySelector('a[href="#' + sectionId + '"]');
        if (currentLink) {
            if (currentLink.parentElement.classList.contains('nav-item')) {
                // If it's a parent menu item, only activate it
                currentLink.classList.add('active');
            } else {
                // If it's a submenu item, activate both the parent menu item and the submenu item
                var parentMenuItem = currentLink.closest('.nav-item');
                if (parentMenuItem) {
                    parentMenuItem.querySelector('.nav-link').classList.add('active');
                }
                currentLink.classList.add('active');
            }
        }
    }
</script>
