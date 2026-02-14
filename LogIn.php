<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Log In — Verdant</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&display=swap" rel="stylesheet" />
</head>
<body>

  <div class="page-wrapper">

    <!-- ═══════════════ LEFT PANEL ═══════════════ -->
    <aside class="left-panel">

      <!-- Decorative blobs -->
      <div class="blob blob-top"></div>
      <div class="blob blob-bottom"></div>

      <!-- Brand -->
      <div class="brand">
        <div class="brand-icon">
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 3C7 3 3 8 3 13c0 3.87 2.5 6.5 5 7.5L9 22h6l1-1.5C18.5 19.5 21 16.87 21 13c0-5-4-10-9-10z" fill="currentColor" opacity="0.25"/>
            <path d="M12 3c0 0-1 5 2 9s7 5 7 5-3-1-5-4-3-7.5-4-10z" fill="currentColor"/>
            <path d="M12 3C12 3 9 7 9 11s2 8 2 8-1-3-1-6 1-7 2-10z" fill="currentColor" opacity="0.6"/>
          </svg>
        </div>
        <span class="brand-name">Verdant</span>
      </div>

      <!-- Hero Text -->
      <div class="hero-content">
        <span class="hero-badge">
          <span class="badge-dot"></span>
          Platform v2.0
        </span>
        <h1 class="hero-heading">
          Your workspace,<br>
          <em class="accent">elevated.</em>
        </h1>
        <p class="hero-sub">
          A smarter way to manage projects, collaborate with your team,
          and ship work that matters — all in one place.
        </p>
      </div>

      <!-- Feature list -->
      <ul class="feature-list">
        <li class="feature-item">
          <span class="feature-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/>
            </svg>
          </span>
          <span class="feature-text">End-to-end encrypted workspaces</span>
        </li>
        <li class="feature-item">
          <span class="feature-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
            </svg>
          </span>
          <span class="feature-text">Real-time team collaboration</span>
        </li>
        <li class="feature-item">
          <span class="feature-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/>
            </svg>
          </span>
          <span class="feature-text">Advanced analytics &amp; reporting</span>
        </li>
      </ul>

      <!-- Footer note -->
      <p class="panel-footer">Trusted by 12,000+ teams worldwide</p>

    </aside>

    <!-- ═══════════════ RIGHT PANEL ═══════════════ -->
    <main class="right-panel">

      <!-- Grid overlay -->
      <div class="grid-overlay"></div>

      <div class="login-card">

        <!-- Header -->
        <div class="card-header">
          <h2 class="card-title">Welcome back</h2>
          <p class="card-subtitle">
            No account yet?
            <a href="#" class="link">Create one &rarr;</a>
          </p>
        </div>

        <!-- Form (static — no action) -->
        <form class="login-form" action="#" method="post" novalidate>

          <!-- Email -->
          <div class="form-group">
            <label for="email">Email address</label>
            <div class="input-wrap">
              <svg class="input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="4" width="20" height="16" rx="3"/>
                <path d="M2 7l10 7 10-7"/>
              </svg>
              <input type="email" id="email" name="email" placeholder="you@example.com" autocomplete="email" />
            </div>
          </div>

          <!-- Password -->
          <div class="form-group">
            <label for="password">Password</label>
            <div class="input-wrap">
              <svg class="input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="11" width="18" height="11" rx="2"/>
                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
              </svg>
              <input type="password" id="password" name="password" placeholder="••••••••" autocomplete="current-password" />
            </div>
          </div>

          <!-- Remember + Forgot -->
          <div class="form-meta">
            <label class="check-label">
              <input type="checkbox" name="remember" />
              <span class="check-box"></span>
              Remember me
            </label>
            <a href="#" class="forgot-link">Forgot password?</a>
          </div>

          <!-- Submit -->
          <button type="submit" class="btn-login">
            <span>Log In</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </button>

          <!-- Divider -->
          <div class="divider"><span>or continue with</span></div>

          <!-- Social buttons -->
          <div class="social-row">

            <a href="#" class="btn-social">
              <!-- Google -->
              <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/>
                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
              </svg>
              Google
            </a>

            <a href="#" class="btn-social">
              <!-- GitHub -->
              <svg viewBox="0 0 24 24" fill="currentColor" width="18" height="18">
                <path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0 1 12 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/>
              </svg>
              GitHub
            </a>

          </div>

        </form>

      </div><!-- /.login-card -->

    </main>

  </div><!-- /.page-wrapper -->

</body>
</html>