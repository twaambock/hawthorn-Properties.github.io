<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hawthorn Properties</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Hawthorn Properties</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#">Buy</a></li>
                <li><a href="#">Rent</a></li>
                <li><a href="#">Sell</a></li>
                <li><a href="#">Home Loans</a></li>
                <li><a href="#">Agent Finder</a></li>
                <li><a href="#">Manage Rentals</a></li>
                <li><a href="#">Advertise</a></li>
                <li><a href="#">Help</a></li>
            </ul>
        </nav>
        <div class="user-actions">
            <a href="#" id="sign-in-link">Sign In</a>
        </div>
    </header>

    
    <div id="auth-modal" class="modal">
		<div class="modal-content">
			<span class="close">&times;</span>
            <h2>Welcome to Hawthorn Properties</h2>
            <form id="sign-in-form">
                <input type="email" id="email" placeholder="Enter email" required>
                <input type="password" id="password" placeholder="Enter password" required>
                <button type="submit">Sign In</button>
            </form>
            <div class="divider">or</div>
            <div class="auth-options">
                <button class="social-auth" id="google-auth">Continue with Google</button>
				<button class="social-auth" id="facebook-auth">Continue with Facebook</button>
                <button class="social-auth" id="apple-auth">Continue with Apple</button>
            </div>
            <p>Don't have an account? <a href="#" id="switch-to-register">Register</a></p>
        </div>
    </div>

    <main>
        <section class="hero">
            <div class="hero-content">
                <h2>Agents. Tours. Loans. Homes.</h2>
                <div class="search-bar">
                    <form action="#" method="get">
                        <input type="text" placeholder="Enter an address, neighborhood, city, or ZIP code">
                        <button type="submit">Search</button>
                    </form>
                </div>
            </div>
        </section>

        <section class="listings">
            <div class="listing-card">
                <img src="house1.jpg" alt="House 1">
                <h2>Plot 132 Rd., Street</h2>
                <p>$0.0</p>
                <p>3 Beds | 2 Baths | 1,500 sqft</p>
            </div>
            <div class="listing-card">
                <img src="house2.jpg" alt="House 2">
                <h2>Plot 132 Rd., Street</h2>
                <p>$0.0</p>
                <p>4 Beds | 3 Baths | 2,000 sqft</p>
            </div>
            <div class="listing-card">
                <img src="house3.jpg" alt="House 3">
                <h2>Plot 132 Rd., Street</h2>
                <p>$0.0</p>
                <p>3 Beds | 2 Baths | 1,500 sqft</p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Hawthorn Properties. All rights reserved.</p>
        <nav>
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Use</a></li>
            </ul>
        </nav>
    </footer>

    <script>
document.addEventListener('DOMContentLoaded', () => {
    // Get the modal and close button
    const modal = document.getElementById('auth-modal');
    const closeButton = document.querySelector('.close');

    // Get the sign-in and register links
    const signInLink = document.getElementById('sign-in-link');
    const registerLink = document.getElementById('register-link');

    if (signInLink) {
        signInLink.addEventListener('click', (e) => {
            e.preventDefault();
            modal.style.display = 'flex';
        });
    }

    if (registerLink) {
        registerLink.addEventListener('click', (e) => {
            e.preventDefault();
            modal.style.display = 'flex';
        });
    }

    if (closeButton) {
        closeButton.addEventListener('click', () => {
            modal.style.display = 'none';
        });
    }

    // Close the modal when clicking outside the modal
    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
});

    </script>
</body>
</html>