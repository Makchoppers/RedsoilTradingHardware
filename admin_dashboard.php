<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashborad.css">
    </head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="logo">
                <img src="logo.png" alt="Logo"> </div>
            <nav class="main-nav">
                <ul>
                    <li class="nav-header">DISCOVER</li>
                    <li><a href="#"><i class="icon home"></i> Home</a></li>
                    <li class="active"><a href="#"><i class="icon dashboard"></i> Dashboard</a></li>
                    <li><a href="#"><i class="icon inventory"></i> Inventory</a></li>
                    <li class="nav-header">SETTINGS</li>
                    <li><a href="#"><i class="icon settings"></i> Settings</a></li>
                    <li><a href="#"><i class="icon help"></i> Help</a></li>
                    <li><a href="#"><i class="icon logout"></i> Log out</a></li>
                </ul>
            </nav>
        </aside>
        <main class="main-content">
            <header class="header">
                <h1 class="dashboard-title">DASHBOARD</h1>
                <div class="user-info">
                    <span class="user-name">Mark Pabaya</span>
                    <span class="user-role">Admin</span>
                    <div class="user-dropdown">
                        </div>
                </div>
            </header>
            <div class="overview-cards">
                <div class="card">
                    <div class="card-header">Total Products</div>
                    <div class="card-body">
                        <span class="metric">8,855</span>
                        <span class="trend positive">+6.23% from last week</span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Available Stock</div>
                    <div class="card-body">
                        <span class="metric">6598</span>
                        <span class="trend negative">-0.23% from last week</span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Out of Stock</div>
                    <div class="card-body">
                        <span class="metric">2257</span>
                        <span class="trend positive">+6.23% from last week</span>
                    </div>
                </div>
            </div>
            <div class="main-widgets">
                <div class="widget site-visits">
                    <div class="widget-header">Site Visits</div>
                    <div class="widget-body">
                        <div class="chart-container">
                            <img src="placeholder-chart.png" alt="Site Visits Chart"> </div>
                        <div class="chart-legend">
                            <span class="legend-item"><span class="legend-color visitors"></span> Visitors</span>
                        </div>
                    </div>
                </div>
                <div class="widget recent-activity">
                    <div class="widget-header">RECENT ACTIVITY</div>
                    <div class="widget-body">
                        <ul class="activity-list">
                            <li class="activity-item">
                                <div class="user-avatar"></div> <div class="activity-details">
                                    <span class="user-name">Mark Pabaya</span>
                                    <p class="activity-text">Updated stocks for Moldex Elbow 1/2 <span class="activity-time">5m PM</span></p>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="user-avatar"></div>
                                <div class="activity-details">
                                    <span class="user-name">Syrlck Layco</span>
                                    <p class="activity-text">Updated stocks for Moldex Elbow 1/2 <span class="activity-time">Yesterday</span></p>
                                </div>
                            </li>
                            </ul>
                    </div>
                </div>
                <div class="widget recent-reviews">
                    <div class="widget-header">RECENT REVIEWS</div>
                    <div class="widget-body">
                        <div class="review-grid">
                            <div class="review-item">
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar"></div>
                                    <span class="reviewer-name">Foreman</span>
                                    <span class="review-time">2 days ago</span>
                                </div>
                                <div class="rating">
                                    <span class="star filled"></span>
                                    <span class="star filled"></span>
                                    <span class="star filled"></span>
                                    <span class="star filled"></span>
                                    <span class="star"></span>
                                </div>
                                <p class="review-text">"Personally tested the products, and by that, they gain my trust."</p>
                            </div>
                            <div class="review-item">
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar"></div>
                                    <span class="reviewer-name">Foreman</span>
                                    <span class="review-time">2 days ago</span>
                                </div>
                                <div class="rating">
                                    <span class="star filled"></span>
                                    <span class="star filled"></span>
                                    <span class="star filled"></span>
                                    <span class="star filled"></span>
                                    <span class="star"></span>
                                </div>
                                <p class="review-text">"Personally tested the products, and by that, they gain my trust."</p>
                            </div>
                            <div class="review-item">
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar"></div>
                                    <span class="reviewer-name">Foreman</span>
                                    <span class="review-time">2 days ago</span>
                                </div>
                                <div class="rating">
                                    <span class="star filled"></span>
                                    <span class="star filled"></span>
                                    <span class="star filled"></span>
                                    <span class="star filled"></span>
                                    <span class="star"></span>
                                </div>
                                <p class="review-text">"Personally tested the products, and by that, they gain my trust."</p>
                            </div>
                            <div class="review-item">
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar"></div>
                                    <span class="reviewer-name">Foreman</span>
                                    <span class="review-time">2 days ago</span>
                                </div>
                                <div class="rating">
                                    <span class="star filled"></span>
                                    <span class="star filled"></span>
                                    <span class="star filled"></span>
                                    <span class="star filled"></span>
                                    <span class="star"></span>
                                </div>
                                <p class="review-text">"Personally tested the products, and by that, they gain my trust."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>