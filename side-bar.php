<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>side-bar</title>
    <style>
    /* body {
    display: flex;
    margin: 0;
    font-family: Arial, sans-serif;
} */

.sidebar {
    width: 250px;
    height: 100vh;
    background-color: #202124;
    color: #fff;
    position: fixed;
    top: 0;
    left: 0;
    overflow-y: auto;
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
}

.sidebar-header {
    padding: 20px;
    background-color: #1a1a1a;
    text-align: center;
    border-bottom: 1px solid #333;
}

.sidebar-header h2 {
    margin: 0;
    font-size: 1.2em;
}

.sidebar-menu {
    list-style: none;
    padding: 0;
    margin: 0;
}

.sidebar-menu li {
    width: 100%;
}

.sidebar-menu li a {
    display: flex;
    align-items: center;
    padding: 15px 20px;
    color: #fff;
    text-decoration: none;
    transition: background-color 0.3s;
}

.sidebar-menu li a .icon {
    margin-right: 10px;
}

.sidebar-menu li a:hover,
.sidebar-menu li a.active {
    background-color: #3c4043;
}

.main-content {
    margin-left: 250px;
    padding: 20px;
    width: calc(100% - 250px);
}

@media (max-width: 768px) {
    .sidebar {
        width: 200px;
    }

    .main-content {
        margin-left: 200px;
        width: calc(100% - 200px);
    }
}

.toggle-button {
    position: absolute;
    top: 15px;
    left: 260px;
    padding: 10px 20px;
    background-color: #202124;
    color: #fff;
    border: none;
    cursor: pointer;
    transition: left 0.3s;
}

.sidebar.active + .main-content {
    margin-left: 0;
    width: 100%;
}

.sidebar.active {
    width: 0;
    overflow: hidden;
}

.nested-menu {
    display: none;
    padding-left: 20px;
    list-style: none;
}

.menu-item.nested.active .nested-menu {
    display: block;
}

    </style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <h2>Indian National Transport</h2>
        </div>
        <ul class="sidebar-menu">
            <li><a href="#overview" class="menu-item" data-id="overview"><span class="icon">🏠</span> Overview</a></li>
            <li class="menu-item nested">
                <a href="#performance" data-id="performance"><span class="icon">📈</span> Performance</a>
                <ul class="nested-menu">
                    <li><a href="#performance-search">Search</a></li>
                    <li><a href="#performance-discover">Discover</a></li>
                    <li><a href="#performance-news">News</a></li>
                </ul>
            </li>
            <li><a href="#url-inspection" class="menu-item" data-id="url-inspection"><span class="icon">🔍</span> URL Inspection</a></li>
            <li><a href="#index" class="menu-item" data-id="index"><span class="icon">📄</span> Index</a></li>
            <li><a href="#coverage" class="menu-item" data-id="coverage"><span class="icon">🛡️</span> Coverage</a></li>
            <li><a href="#sitemaps" class="menu-item" data-id="sitemaps"><span class="icon">🗺️</span> Sitemaps</a></li>
            <li><a href="#experience" class="menu-item" data-id="experience"><span class="icon">🌟</span> Experience</a></li>
            <li><a href="#enhancements" class="menu-item" data-id="enhancements"><span class="icon">✨</span> Enhancements</a></li>
            <li><a href="#security-manual-actions" class="menu-item" data-id="security-manual-actions"><span class="icon">🔒</span> Security & Manual Actions</a></li>
            <li><a href="#legacy-tools-reports" class="menu-item" data-id="legacy-tools-reports"><span class="icon">🛠️</span> Legacy Tools & Reports</a></li>
            <li><a href="#links" class="menu-item" data-id="links"><span class="icon">🔗</span> Links</a></li>
            <li><a href="#settings" class="menu-item" data-id="settings"><span class="icon">⚙️</span> Settings</a></li>
        </ul>
    </div>
    <div class="main-content">
        <h1>Welcome to Google Search Console</h1>
        <p>Select an item from the sidebar to see more details.</p>
    </div>
    <script >document.addEventListener('DOMContentLoaded', function() {
    const menuItems = document.querySelectorAll('.menu-item');
    
    menuItems.forEach(item => {
        item.addEventListener('click', function(e) {
            if (item.classList.contains('nested')) {
                e.preventDefault();
                item.classList.toggle('active');
            } else {
                item.classList.toggle('active');
            }
        });
    });

    const toggleButton = document.createElement('button');
    toggleButton.innerText = 'Toggle Sidebar';
    toggleButton.classList.add('toggle-button');
    document.body.appendChild(toggleButton);

    toggleButton.addEventListener('click', function() {
        document.querySelector('.sidebar').classList.toggle('active');
    });
});
</script>
</body>
</html>
