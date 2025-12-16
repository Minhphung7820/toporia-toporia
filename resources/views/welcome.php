<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toporia - Modern PHP Framework</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #0f0f23 0%, #1a1a2e 50%, #16213e 100%);
            color: #e4e4e7;
            display: flex;
            flex-direction: column;
        }

        .container {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            text-align: center;
        }

        .logo {
            width: 100px;
            height: 100px;
            margin-bottom: 2rem;
            position: relative;
        }

        .logo-ring {
            position: absolute;
            width: 100%;
            height: 100%;
            border: 3px solid transparent;
            border-top-color: #6366f1;
            border-radius: 50%;
            animation: spin 2s linear infinite;
        }

        .logo-ring:nth-child(2) {
            width: 80%;
            height: 80%;
            top: 10%;
            left: 10%;
            border-top-color: #8b5cf6;
            animation-duration: 1.5s;
            animation-direction: reverse;
        }

        .logo-ring:nth-child(3) {
            width: 60%;
            height: 60%;
            top: 20%;
            left: 20%;
            border-top-color: #a855f7;
            animation-duration: 1s;
        }

        .logo-center {
            position: absolute;
            width: 40%;
            height: 40%;
            top: 30%;
            left: 30%;
            background: linear-gradient(135deg, #6366f1, #a855f7);
            border-radius: 50%;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        h1 {
            font-size: 3.5rem;
            font-weight: 700;
            letter-spacing: -0.02em;
            margin-bottom: 0.5rem;
            background: linear-gradient(135deg, #fff 0%, #a5b4fc 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .tagline {
            font-size: 1.25rem;
            color: #a1a1aa;
            margin-bottom: 3rem;
            font-weight: 400;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            max-width: 800px;
            width: 100%;
            margin-bottom: 3rem;
        }

        .feature {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            padding: 1.5rem;
            transition: all 0.3s ease;
        }

        .feature:hover {
            background: rgba(255, 255, 255, 0.05);
            border-color: rgba(99, 102, 241, 0.3);
            transform: translateY(-2px);
        }

        .feature-icon {
            font-size: 1.5rem;
            margin-bottom: 0.75rem;
        }

        .feature h3 {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #f4f4f5;
        }

        .feature p {
            font-size: 0.875rem;
            color: #71717a;
            line-height: 1.5;
        }

        .links {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            justify-content: center;
        }

        .link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-size: 0.9rem;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .link-primary {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            color: #fff;
        }

        .link-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 20px rgba(99, 102, 241, 0.4);
        }

        .link-secondary {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #e4e4e7;
        }

        .link-secondary:hover {
            background: rgba(255, 255, 255, 0.08);
            border-color: rgba(255, 255, 255, 0.2);
        }

        footer {
            padding: 1.5rem;
            text-align: center;
            color: #52525b;
            font-size: 0.875rem;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }

        footer a {
            color: #6366f1;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        .version {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            background: rgba(99, 102, 241, 0.1);
            border-radius: 9999px;
            font-size: 0.75rem;
            color: #a5b4fc;
            margin-left: 0.5rem;
        }

        @media (max-width: 640px) {
            h1 { font-size: 2.5rem; }
            .tagline { font-size: 1rem; }
            .features { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <div class="logo-ring"></div>
            <div class="logo-ring"></div>
            <div class="logo-ring"></div>
            <div class="logo-center"></div>
        </div>

        <h1>Toporia<span class="version">v1.0</span></h1>
        <p class="tagline">A Modern PHP Framework with Clean Architecture</p>

        <div class="features">
            <div class="feature">
                <div class="feature-icon">&#x1F3D7;</div>
                <h3>Clean Architecture</h3>
                <p>Domain-driven design with clear separation of concerns</p>
            </div>
            <div class="feature">
                <div class="feature-icon">&#x26A1;</div>
                <h3>High Performance</h3>
                <p>Optimized for speed with minimal overhead</p>
            </div>
            <div class="feature">
                <div class="feature-icon">&#x1F512;</div>
                <h3>Type Safe</h3>
                <p>Strict typing with PHP 8.1+ features</p>
            </div>
            <div class="feature">
                <div class="feature-icon">&#x1F4E6;</div>
                <h3>Modular Design</h3>
                <p>Install only what you need with optional packages</p>
            </div>
        </div>

        <div class="links">
            <a href="https://github.com/Minhphung7820/toporia" class="link link-primary" target="_blank">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                GitHub
            </a>
            <a href="https://github.com/Minhphung7820/toporia/tree/main/docs" class="link link-secondary" target="_blank">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                Documentation
            </a>
        </div>
    </div>

    <footer>
        Built with Toporia Framework &middot;
        <a href="https://github.com/Minhphung7820/toporia" target="_blank">View on GitHub</a>
    </footer>
</body>
</html>
