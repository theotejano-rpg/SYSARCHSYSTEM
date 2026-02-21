<?php
session_start();

$error = '';
$success = '';

$demo_user = 'admin';
$demo_pass = 'password123';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($username) || empty($password)) {
        $error = 'Please fill in all fields.';
    } elseif ($username === $demo_user && $password === $demo_pass) {
        $_SESSION['user'] = $username;
        $success = 'Welcome back, ' . htmlspecialchars($username) . '!';
    } else {
        $error = 'Invalid username or password.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCS Portal — Sign In</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>

    <div class="bg-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
    </div>

    <header class="top-header">
        <img src="uclogo-removebg-preview.png" alt="University of Cebu" class="uc-logo">
        <div class="header-text">
            <span class="header-title">University of Cebu</span>
            <span class="header-sub">Student Information Portal</span>
        </div>
    </header>

    <main class="container">
        <div class="card">

            <div class="card-left">
                <div class="left-top">
                    <img src="ccsmainlogo-removebg-preview.png" alt="CCS Logo" class="ccs-logo">
                    <h2 class="ccs-title">College of Computer Studies</h2>
                    <p class="ccs-subtitle">Sign in to your student account</p>
                </div>

                <?php if ($error): ?>
                <div class="alert alert-error">
                    <span class="alert-icon">&#x2715;</span>
                    <?php echo htmlspecialchars($error); ?>
                </div>
                <?php endif; ?>

                <?php if ($success): ?>
                <div class="alert alert-success">
                    <span class="alert-icon">&#x2713;</span>
                    <?php echo $success; ?>
                </div>
                <?php endif; ?>

                <form method="POST" action="" class="login-form" novalidate>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <div class="input-wrapper">
                            <span class="input-icon">
                                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                    <circle cx="12" cy="7" r="4"/>
                                </svg>
                            </span>
                            <input
                                type="text"
                                id="username"
                                name="username"
                                placeholder="Enter your username"
                                value="<?php echo htmlspecialchars($_POST['username'] ?? ''); ?>"
                                autocomplete="username"
                            >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password">
                            Password
                            <a href="#" class="forgot-link">Forgot password?</a>
                        </label>
                        <div class="input-wrapper">
                            <span class="input-icon">
                                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                                </svg>
                            </span>
                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="Enter your password"
                                autocomplete="current-password"
                            >
                            <span class="toggle-password" onclick="togglePassword()" title="Show/hide password">
                                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                            </span>
                        </div>
                    </div>

                    <div class="form-options">
                        <label class="checkbox-label">
                            <input type="checkbox" name="remember">
                            <span class="checkmark"></span>
                            Remember me
                        </label>
                    </div>

                    <button type="submit" class="btn-submit">
                        <span>Sign In</span>
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </button>
                </form>

            </div>

            <div class="card-right">
                <div class="right-content">
                    <div class="right-decoration">
                        <div class="deco-circle c1"></div>
                        <div class="deco-circle c2"></div>
                        <div class="deco-circle c3"></div>
                    </div>
                    <div class="right-text">
                        <h1>Welcome<br>Back.</h1>
                        <p>Access your academic records, course schedules, grades, and more through the CCS Student Portal.</p>
                        <ul class="feature-list">
                            <li><span class="feat-icon">&#x1F4CB;</span> View grades &amp; transcripts</li>
                            <li><span class="feat-icon">&#x1F4C5;</span> Check class schedules</li>
                            <li><span class="feat-icon">&#x1F4AC;</span> Faculty announcements</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <script>
        function togglePassword() {
            const input = document.getElementById('password');
            input.type = input.type === 'password' ? 'text' : 'password';
        }
        document.querySelectorAll('.input-wrapper input').forEach(input => {
            input.addEventListener('focus', () => input.closest('.input-wrapper').classList.add('focused'));
            input.addEventListener('blur', () => input.closest('.input-wrapper').classList.remove('focused'));
        });
    </script>
</body>
</html>