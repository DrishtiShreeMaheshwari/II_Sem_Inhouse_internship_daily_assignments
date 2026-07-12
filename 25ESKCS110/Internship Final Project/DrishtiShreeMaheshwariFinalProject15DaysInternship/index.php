<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SPACE PHOTO EXPLORER</title>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
<style>
body {
    background-color: #0d0f1d; /* Deep Cosmic Void */
    color: #ffffff;
    font-family: 'Ubuntu', sans-serif; 
    margin: 0;
    padding: 0;
    overflow-x: hidden;
}
header {
    background: linear-gradient(135deg, #141628 0%, #1a103c 100%); 
    padding: 25px 20px;
    border-bottom: 3px solid #00d2ff; /* Vibrant Electric Cyan Border */
    text-align: center;
    position: relative;
    z-index: 10;
}
.logo-container {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
}
.cosmic-logo {
    width: 25px;
    height: 25px;
    background: linear-gradient(45deg, #7928ca, #00d2ff); /* Glowing Nebula Orb */
    border-radius: 50%;
    border: 2px solid #ffffff;
}

header h1 {
    margin: 0;
    font-family: 'Rajdhani', sans-serif; 
    font-size: 32px;
    font-weight: 700;       
    color: #ffffff;
    text-transform: uppercase; 
    letter-spacing: 2px;
    text-shadow: 0 0 10px rgba(0, 210, 255, 0.2);
}
header p {
    margin: 5px 0 0 0;
    font-size: 14px;
    color: #00d2ff;
    font-weight: 500;
    letter-spacing: 0.5px;
}
.dev-badge {
    font-size: 11px;
    color: #ffffff; 
    background: linear-gradient(90deg, #7928ca, #00d2ff); /* Purple to Cyan Gradient */
    padding: 5px 12px;
    border-radius: 12px;
    display: inline-block;
    margin-top: 10px;
    font-weight: bold;
    letter-spacing: 0.5px;
    border: none;
    box-shadow: 0 2px 10px rgba(0, 210, 255, 0.2);
}
.app-container {
    display: flex;
    position: relative;
    min-height: calc(100vh - 140px);
}
.menu-toggle-btn {
    position: absolute;
    top: 20px;
    left: 20px;
    background-color: #141628;
    color: #00d2ff;
    border: 1px solid #00d2ff;
    font-size: 22px;
    padding: 6px 12px;
    border-radius: 4px;
    cursor: pointer;
    z-index: 100;
    transition: 0.2s;
    line-height: 1;
}
.menu-toggle-btn:hover {
    background: linear-gradient(45deg, #00d2ff, #00a8ff);
    color: #0d0f1d;
    box-shadow: 0 0 10px rgba(0, 210, 255, 0.4);
}
.sidebar {
    width: 240px;
    background-color: #141628; 
    border-right: 1px solid rgba(0, 210, 255, 0.25);
    padding: 70px 20px 20px 20px; 
    display: flex;
    flex-direction: column;
    gap: 12px;
    transition: transform 0.3s ease, width 0.3s ease, padding 0.3s ease;
    transform: translateX(0);
    box-sizing: border-box;
    overflow: hidden; 
}
.sidebar.collapsed {
    transform: translateX(-100%);
    width: 0;
    padding: 70px 0 20px 0;
    border-right: none;
}
.tab-btn {
    padding: 12px 15px;
    font-family: 'Rajdhani', sans-serif;
    font-size: 16px;
    font-weight: 700;
    background-color: #0d0f1d;
    color: #eaedf1;
    border: 1px solid rgba(0, 210, 255, 0.3);
    cursor: pointer;
    border-radius: 6px;
    transition: 0.2s;
    text-align: left;
    white-space: nowrap; 
}
.tab-btn:hover {
    background: rgba(0, 210, 255, 0.08);
    border-color: #00d2ff;
    color: #ffffff;
}
.tab-btn.active {
    background: linear-gradient(90deg, #7928ca, #1a103c); 
    border: 1px solid #00d2ff;
    color: #ffffff; 
    box-shadow: 0 0 10px rgba(121, 40, 202, 0.3);
}
.content {
    flex: 1;
    padding: 30px;
    margin-left: 0;
    transition: margin-left 0.3s ease;
}
.welcome-section {
    max-width: 650px;
    margin: 40px auto 20px auto;
    text-align: left;
}
.box {
    background-color: #141628; 
    padding: 25px;
    margin: 20px auto 20px auto; 
    max-width: 600px;
    border-radius: 8px;
    border: 1px solid rgba(0, 210, 255, 0.2); 
    text-align: left; 
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
}
.search-group {
    display: flex;
    gap: 10px;
    margin-top: 15px;
    margin-bottom: 15px;
}
input[type="text"] {
    flex: 1;
    padding: 10px;
    font-size: 15px;
    border-radius: 4px;
    border: 1px solid #00d2ff;
    background-color: #ffffff;
    color: #000000;
}
.search-btn {
    padding: 10px 20px;
    font-family: 'Rajdhani', sans-serif;
    font-size: 16px;
    font-weight: 700;
    background: linear-gradient(45deg, #00d2ff, #00a8ff); 
    color: #0d0f1d;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    box-shadow: 0 2px 8px rgba(0, 210, 255, 0.2);
    transition: 0.2s;
}
.search-btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(0, 210, 255, 0.4);
}
.profile-display-card {
    border-left: 4px solid #7928ca;
    padding-left: 12px;
    margin-bottom: 15px;
}
.nasa-redirect-btn {
    display: block;
    text-align: center;
    font-family: 'Rajdhani', sans-serif;
    font-size: 15px;
    font-weight: 700;
    background: linear-gradient(45deg, #7928ca, #1a103c); 
    color: #ffffff;
    border: 1px solid rgba(0, 210, 255, 0.4);
    padding: 14px;
    border-radius: 6px;
    text-decoration: none;
    transition: 0.2s;
    margin-top: 5px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
}
.nasa-redirect-btn:hover {
    transform: translateY(-1px);
    border-color: #00d2ff;
    box-shadow: 0 4px 12px rgba(121, 40, 202, 0.4);
}
h2 { 
    font-family: 'Rajdhani', sans-serif;
    color: #00d2ff; 
    font-size: 28px; 
    margin-top: 0;
    letter-spacing: 0.5px;
}
h3 { 
    font-family: 'Rajdhani', sans-serif;
    font-size: 18px;
    margin: 0;
}
p, li {
    color: #eaedf1;
    line-height: 1.6;
    font-size: 15px;
}
ul {
    padding-left: 20px;
}
li {
    margin-bottom: 8px;
}

.content img {
    max-width: 100%;
    height: auto;
    margin-top: 15px;
    border-radius: 6px;
    border: 2px solid #141628;
    transition: transform 0.2s; 
}
.content img:hover {
    transform: scale(1.01); 
    cursor: pointer;
}
.space-link {
    text-decoration: none;
    color: #00d2ff; 
    transition: color 0.2s;
}
.space-link:hover {
    color: #63dfff;
    text-decoration: underline;
}
.search-results-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin-top: 20px;
    justify-content: center; 
    max-width: 1000px;      
    margin-left: auto;
    margin-right: auto;
}
.result-card {
    background-color: #141628;
    border: 1px solid rgba(0, 210, 255, 0.2);
    padding: 15px;
    width: 280px; 
    border-radius: 6px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    text-align: left;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    transition: border-color 0.2s;
}
.result-card:hover {
    border-color: #00d2ff; 
}
.result-card img {
    width: 100%;
    height: 150px;
    object-fit: cover;
    margin-top: 0;
}
.result-card h4 {
    font-family: 'Rajdhani', sans-serif;
    margin: 8px 0 5px 0;
    font-size: 18px;
    line-height: 1.3;
}
.result-card .space-link {
    color: #ffffff; 
}
.result-card .space-link:hover {
    color: #00d2ff;
}
.result-date {
    font-size: 12px;
    color: #90cdf4; 
    font-weight: bold;
    margin-top: 8px;
    margin-bottom: 2px;
}

.result-desc {
    font-size: 12px;
    color: #a3aab4;
    margin: 5px 0 10px 0;
    line-height: 1.4;
}
.save-btn {
    font-family: 'Rajdhani', sans-serif;
    background: linear-gradient(45deg, #7928ca, #1a103c); 
    color: #ffffff;
    border: 1px solid rgba(0, 210, 255, 0.3);
    padding: 10px 15px;
    cursor: pointer;
    font-size: 15px;
    font-weight: 700;
    border-radius: 4px;
    width: 100%;
    margin-top: auto;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
    transition: 0.2s;
}
.save-btn:hover {
    transform: translateY(-1px);
    border-color: #00d2ff;
    box-shadow: 0 4px 12px rgba(121, 40, 202, 0.4);
}
.save-guideline-text {
    font-size: 11px;
    color: #a3aab4;
    text-align: center;
    margin-top: 8px;
    display: block;
    letter-spacing: 0.3px;
}
.modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(13, 15, 29, 0.9);
    backdrop-filter: blur(8px);
    z-index: 1000;
    display: flex;
    justify-content: center;
    align-items: center;
    animation: fadeIn 0.3s ease-in-out;
}
.modal-content {
    background-color: #141628;
    border: 1px solid rgba(0, 210, 255, 0.3);
    border-radius: 8px;
    width: 90%;
    max-width: 650px;
    max-height: 85vh;
    overflow-y: auto;
    position: relative;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
}
.close-modal-btn {
    display: block;
    padding: 12px 20px;
    background-color: #0d0f1d;
    color: #00d2ff;
    font-family: 'Rajdhani', sans-serif;
    font-weight: 700;
    text-transform: uppercase;
    cursor: pointer;
    border-bottom: 1px solid rgba(0, 210, 255, 0.15);
    transition: color 0.2s;
}
.close-modal-btn:hover {
    color: #ffffff;
}
.modal-content img {
    width: 100%;
    max-height: 380px;
    object-fit: cover;
    display: block;
    margin-top: 0;
    border-radius: 0;
    border: none;
}
.modal-content img:hover {
    transform: none;
    cursor: default;
}
.modal-body-text {
    padding: 25px;
    text-align: left;
}
footer {
    background-color: #141628;
    padding: 20px;
    font-size: 12px;
    color: #a3aab4;
    text-align: center;
    border-top: 1px solid rgba(0, 210, 255, 0.15);
}
.tab-content-section, #apod-tab, #search-tab {
    animation: fadeIn 0.4s ease-in-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(8px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>
</head>
<body>
<script>
    let currentSessionUser = localStorage.getItem("space_explorer_user");
    if (!currentSessionUser || currentSessionUser.trim() === "") {
        currentSessionUser = prompt("Welcome to Space Photo Explorer! Please enter your name to personalize your dashboard saves:", "Astronaut");
        if(!currentSessionUser) currentSessionUser = "Anonymous_Explorer";
        localStorage.setItem("space_explorer_user", currentSessionUser);
    }
</script>
    <header>
        <div class="logo-container">
            <div class="cosmic-logo"></div>
            <h1>Space Photo Explorer</h1>
        </div>
        <p>Powered by NASA Open API</p>
        <div class="dev-badge">Developed by Drishti Shree Maheshwari</div>
    </header>
    <div class="app-container">
                <button class="menu-toggle-btn" onclick="toggleSidebar()">&#9776;</button>
        <div class="sidebar" id="appSidebar">
            <button class="tab-btn active" id="btn-welcome" onclick="switchTab('welcome')">🏠 Home</button>
            <button class="tab-btn" id="btn-apod" onclick="switchTab('apod')">🌌 Photo of the Day</button>
            <button class="tab-btn" id="btn-search" onclick="switchTab('search')">🔍 Search Space Objects</button>
            <button class="tab-btn" id="btn-favorites" onclick="switchTab('favorites')">⭐ Stored Collection</button>
        </div>
        <div class="content">
            <div id="favorites-tab" style="display:none; max-width: 1000px; margin: 0 auto;">
                <div style="text-align: center; margin-bottom: 20px;">
                    <h2>Your Saved Interstellar Collection</h2>
                    <p>Displaying cosmic records synced under account profile name: <strong class="sync-profile-name" style="color: #00d2ff;"></strong></p>
                </div>
                <div class="search-results-grid" id="favorites-box">
                </div>
            </div>

            <div id="welcome-tab" class="tab-content-section">
                <!-- Clean, Boxless Welcome Introduction -->
                <div class="welcome-section">
                    <h2>Welcome to the Cosmos !</h2>
                    <p>This interactive portal links directly to NASA's open databases to bring the universe to your screen. Use the left side panel to navigate:</p>
                    <ul>
                        <li><strong>Photo of the Day:</strong> View the daily astronomical image featured by NASA scientists.</li>
                        <li><strong>Search Objects:</strong> Query NASA's master imagery archives to explore targeted deep-space objects like planets, nebulae, and constellations.</li>
                        <li><strong>Stored Collection:</strong> Review, explore, and access details of all your saved cosmic captures dynamically linked under your profile logs.</li>
                    </ul>
                </div>

                <div class="box">
                    <h2>Explorer Profile Settings</h2>
                    <div class="profile-display-card">
                        <p style="margin: 0 0 8px 0;">Logged In As: <strong id="home-profile-display" style="color: #00d2ff; font-size: 16px;"></strong></p>
                    </div>
                    <p style="font-size: 13px; color: #a3aab4; margin-top: 0;">Change your name below to load a different collection vault or alter the owner log for new saves:</p>
                    <div class="search-group" style="margin-bottom: 5px;">
                        <input type="text" id="change-profile-input" placeholder="Enter new profile name...">
                        <button class="search-btn" onclick="updateProfileName()">Update Name</button>
                    </div>
                </div>
                <div class="box">
                    <a href="https://science.nasa.gov/specials/your-name-in-landsat/" class="nasa-redirect-btn">
                        🌏 Spell Your Name with Satellite Images (Official NASA Feature)
                    </a>
                </div>
            </div>
            <div id="apod-tab" class="box" style="display:none; text-align: center;">
                <h2>NASA Photo of the Day</h2>
                <a id="apod-link" href="" class="space-link">
                    <h3 id="apod-title">Loading today's photo...</h3>
                    <img id="apod-img" src="" alt="APOD Image">
                </a>
                
                <p id="apod-desc" style="text-align: left; margin-top: 15px;"></p>
                
                <form action="save.php" method="POST">
                    <input type="hidden" id="form-apod-title" name="title">
                    <input type="hidden" id="form-apod-url" name="url">
                    <input type="hidden" id="form-apod-user" name="username">
                    <input type="hidden" id="form-apod-desc" name="description">
                    <input type="hidden" id="form-apod-date" name="date_created">
                    
                    <button type="submit" class="save-btn">Save APOD to Favorites</button>
                    <span class="save-guideline-text">✨ You can check and manage your saved files inside the Stored Collection Tab anytime!</span>
                </form>   
           </div>

            <div id="search-tab" style="display:none; max-width: 1000px; margin: 0 auto;">
                <div class="box" style="max-width: 600px;">
                    <h2>Search Space Objects</h2>
                    <p>Explore high-resolution captures from rovers, deep-space satellites, and telescopes.</p>
                    <div class="search-group">
                        <input type="text" id="search-term" placeholder="e.g. Mars, Orion, Saturn">
                        <button class="search-btn" onclick="searchSpace()">Search</button>
                    </div>
                    
                    <a href="https://images.nasa.gov" class="nasa-redirect-btn">
                        Explore NASA's Live Image Portal for More 🌐
                    </a>
                </div>

                <div id="search-results-section" style="margin-top: 20px; text-align: center;">
                    <h2 style="color: #ffffff; border-bottom: 1px solid #1f2833; padding-bottom: 5px;">Captured Views</h2>
                    <div class="search-results-grid" id="results-box">
                        <p style="color: #a3aab4; width: 100%;">Your search results will materialize here...</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="cosmicModal" class="modal-overlay" style="display:none;" onclick="closeModal()">
        <div class="modal-content" onclick="event.stopPropagation()">
            <span class="close-modal-btn" onclick="closeModal()">&larr; Back to Collection</span>
            <img id="modal-image" src="" alt="Cosmic Capture">
            <div class="modal-body-text">
                <div id="modal-date" class="result-date"></div>
                <a id="modal-nasa-link" href="#" class="space-link">
                    <h3 id="modal-title" style="margin-top: 4px; font-size: 22px; display: inline-block;"></h3>
                </a>
                <p id="modal-desc" style="margin-top: 15px; font-size: 14px; color: #eaedf1; line-height: 1.6;"></p>
            </div>
        </div>
    </div>

    <footer>
        &copy; 2026 Space Photo Explorer Project. All Rights Reserved.
    </footer>

    <script>
        let favoritesCache = [];

        function toggleSidebar() {
            const sidebar = document.getElementById('appSidebar');
            sidebar.classList.toggle('collapsed');
        }

        function syncProfileUIElements() {
            const currentName = localStorage.getItem("space_explorer_user") || "Anonymous_Explorer";
            
            document.getElementById("home-profile-display").innerText = currentName;
            
            const syncBadges = document.querySelectorAll(".sync-profile-name");
            syncBadges.forEach(badge => badge.innerText = currentName);

            const apodUserField = document.getElementById("form-apod-user");
            if (apodUserField) apodUserField.value = currentName;
        }
        
        window.addEventListener('DOMContentLoaded', () => {
            syncProfileUIElements();
        });

        function updateProfileName() {
            const nameInput = document.getElementById("change-profile-input");
            const newName = nameInput.value.trim();
            
            if (newName === "") {
                alert("Profile name cannot be completely empty!");
                return;
            }
            
            localStorage.setItem("space_explorer_user", newName);
            syncProfileUIElements();
            nameInput.value = ""; // Clear input field
            alert(`Profile name successfully updated to "${newName}"!`);
        }

        function switchTab(tabName) {
            document.getElementById('welcome-tab').style.display = 'none';
            document.getElementById('apod-tab').style.display = 'none';
            document.getElementById('search-tab').style.display = 'none';
            document.getElementById('favorites-tab').style.display = 'none';

            document.getElementById('btn-welcome').classList.remove('active');
            document.getElementById('btn-apod').classList.remove('active');
            document.getElementById('btn-search').classList.remove('active');
            document.getElementById('btn-favorites').classList.remove('active');

            if (tabName === 'welcome') {
                document.getElementById('welcome-tab').style.display = 'block';
                document.getElementById('btn-welcome').classList.add('active');
                syncProfileUIElements();
            } else if (tabName === 'apod') {
                document.getElementById('apod-tab').style.display = 'block';
                document.getElementById('btn-apod').classList.add('active');
                syncProfileUIElements();
            } else if (tabName === 'search') {
                document.getElementById('search-tab').style.display = 'block';
                document.getElementById('btn-search').classList.add('active');
            } else if (tabName === 'favorites') {
                document.getElementById('favorites-tab').style.display = 'block';
                document.getElementById('btn-favorites').classList.add('active');
                loadUserFavorites(); 
            }
        }

        function loadUserFavorites() {
            const user = localStorage.getItem("space_explorer_user") || "Anonymous_Explorer";
            syncProfileUIElements();
            
            const favBox = document.getElementById("favorites-box");
            favBox.innerHTML = "<p style='color: #00d2ff; width: 100%; text-align: center;'>Accessing database vaults...</p>";

            fetch("fetch_favorites.php?username=" + encodeURIComponent(user))
                .then(res => res.json())
                .then(data => {
                    favBox.innerHTML = "";
                    favoritesCache = data; // Save incoming structures to local scope memory
                    
                    if (!data || data.length === 0) {
                        favBox.innerHTML = "<p style='color: #a3aab4; width: 100%; text-align: center;'>No space captures saved under this profile name yet!</p>";
                        return;
                    }

                    data.forEach((item, index) => {
                        const showDate = item.date_created ? formatNasaDate(item.date_created) : "Date Record Logged";
                        favBox.innerHTML += `
                            <div class="result-card" style="cursor: pointer;" onclick="openModal(${index})">
                                <div>
                                    <img src="${item.img_url}" alt="Saved Cosmic Capture">
                                    <div class="result-date">${showDate}</div>
                                    <h4 style="color:#00d2ff;">${item.title}</h4>
                                </div>
                            </div>
                        `;
                    });
                })
                .catch(err => {
                    favBox.innerHTML = "<p style='color: #ef4444; width: 100%; text-align: center;'>Error connecting to data pipelines.</p>";
                    console.error(err);
                });
        }

        function openModal(index) {
            const item = favoritesCache[index];
            if (!item) return;

            document.getElementById("modal-image").src = item.img_url;
            document.getElementById("modal-title").innerText = item.title;
            document.getElementById("modal-desc").innerText = item.description || "No cosmic metadata description logged for this archive entry.";
            document.getElementById("modal-date").innerText = item.date_created ? formatNasaDate(item.date_created) : "Date Record Logged";
            
            let cleanNasaId = item.nasa_id || item.title;
            if (cleanNasaId.startsWith("details-")) {
                cleanNasaId = cleanNasaId.replace("details-", "");
            }
document.getElementById("modal-nasa-link").href = "https://images.nasa.gov/details/" + encodeURIComponent(cleanNasaId);
            document.getElementById("cosmicModal").style.display = "flex";
        }

        function closeModal() {
            document.getElementById("cosmicModal").style.display = "none";
        }

        function formatNasaDate(rawDateStr) {
            if (!rawDateStr) return "Date Created: N/A";
            
            const dateObj = new Date(rawDateStr);
            if (isNaN(dateObj.getTime())) return "Date Created: N/A";

            const day = dateObj.getDate();
            const year = dateObj.getFullYear();
            
            const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            const monthName = months[dateObj.getMonth()];

            let suffix = "th";
            if (day === 1 || day === 21 || day === 31) suffix = "st";
            else if (day === 2 || day === 22) suffix = "nd";
            else if (day === 3 || day === 23) suffix = "rd";

            return `Date Created: ${day}${suffix} ${monthName} ${year}`;
        }

        const apodUrl = "https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY";

        fetch(apodUrl)
            .then(response => {
                if (!response.ok) {
                    throw new Error("API limit reached or request failed");
                }
                return response.json();
            })
            .then(data => {
                document.getElementById("form-apod-desc").value = data.explanation || "";
                document.getElementById("form-apod-date").value = data.date || "";
                document.getElementById("apod-title").innerText = data.title || "Untitled Cosmic View";
                document.getElementById("apod-img").src = data.url || "";
                document.getElementById("apod-link").href = data.url || "#";
                document.getElementById("apod-desc").innerText = data.explanation || "No explanation provided.";

                document.getElementById("form-apod-title").value = data.title || "";
                document.getElementById("form-apod-url").value = data.url || "";
            })
            .catch(err => {
                document.getElementById("apod-title").innerText = "NASA API Limit Reached (DEMO_KEY)";
                document.getElementById("apod-desc").innerText = "The shared DEMO_KEY has run out of hourly requests. Try again in an hour, or generate your own free key at api.nasa.gov!";
                console.log(err);
            });

        function searchSpace() {
            var userQuery = document.getElementById("search-term").value;
            if(userQuery == "") {
                alert("Please type something to search!");
                return;
            }

            var nasaImagesUrl = "https://images-api.nasa.gov/search?q=" + userQuery + "&media_type=image";
            var resultsBox = document.getElementById("results-box");
            
            resultsBox.innerHTML = "<p style='color: #45f3ff;'>Searching deep space elements...</p>";

            fetch(nasaImagesUrl)
                .then(res => res.json())
                .then(data => {
                    resultsBox.innerHTML = ""; 
                    
                    var items = data.collection.items;
                    if(items.length == 0) {
                        resultsBox.innerHTML = "<p style='color: #a3aab4;'>No cosmic vectors matched that criteria. Try another keyword!</p>";
                        return;
                    }

                    for(var i = 0; i < 6; i++) {
    if(!items[i]) break; 

    var title = items[i].data[0].title;
    var imgLink = items[i].links[0].href;
    var nasaId = items[i].data[0].nasa_id;
    
    var rawDate = items[i].data[0].date_created;
    var formattedDate = formatNasaDate(rawDate);

   var officialWebpage = "https://images.nasa.gov/details/" + encodeURIComponent(nasaId);
    
    var rawDesc = items[i].data[0].description || "No metadata description recorded.";
    var shortDesc = rawDesc.length > 100 ? rawDesc.substring(0, 100) + "..." : rawDesc;

    var safeTitle = title.replace(/"/g, '&quot;').replace(/'/g, '&#39;');
    var safeDesc = rawDesc.replace(/"/g, '&quot;').replace(/'/g, '&#39;');

    resultsBox.innerHTML += `
        <div class="result-card">
            <div>
                <a href="${imgLink}">
                    <img src="${imgLink}">
                </a>
                <div class="result-date">${formattedDate}</div>
                <a href="${officialWebpage}" class="space-link">
                    <h4>${title}</h4>
                </a>
                <p class="result-desc">${shortDesc}</p>
            </div>
         <form action="save.php" method="POST">
    <input type="hidden" name="nasa_id" value="${nasaId}">
    <input type="hidden" name="title" value="${safeTitle}">
    <input type="hidden" name="url" value="${imgLink}">
    <input type="hidden" name="username" value="${localStorage.getItem('space_explorer_user') || 'Anonymous_Explorer'}">
    <input type="hidden" name="description" value="${safeDesc}">
    <input type="hidden" name="date_created" value="${rawDate}">
    
    <button type="submit" class="save-btn" style="font-size:12px; padding:6px 12px; width: 100%; margin-top:5px;">Save</button>
    <span class="save-guideline-text" style="font-size:10px; margin-top:4px;">✨ Viewable in Stored Collection Tab</span>
</form>
        </div>
    `;
}
                })
                .catch(err => {
                    resultsBox.innerHTML = "<p style='color: #ef4444;'>Error loading interstellar images.</p>";
                    console.log(err);
                });
        }
    </script>
</body>
</html>
