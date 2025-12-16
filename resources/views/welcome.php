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
            background: #fafafa;
            color: #1a1a1a;
            display: flex;
            flex-direction: column;
        }

        .header {
            background: #fff;
            border-bottom: 1px solid #e5e5e5;
            padding: 1rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header-brand {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-weight: 600;
            font-size: 1.25rem;
            color: #1a1a1a;
            text-decoration: none;
        }

        .header-brand svg {
            width: 32px;
            height: 32px;
        }

        .header-nav {
            display: flex;
            gap: 1.5rem;
        }

        .header-nav a {
            color: #666;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: color 0.2s;
        }

        .header-nav a:hover {
            color: #1a1a1a;
        }

        .container {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 4rem 2rem;
            text-align: center;
            max-width: 900px;
            margin: 0 auto;
        }

        .badge {
            display: inline-block;
            padding: 0.35rem 0.85rem;
            background: #f0f0f0;
            border-radius: 20px;
            font-size: 0.8rem;
            color: #666;
            margin-bottom: 1.5rem;
            font-weight: 500;
        }

        h1 {
            font-size: 2.75rem;
            font-weight: 700;
            letter-spacing: -0.02em;
            margin-bottom: 1rem;
            color: #1a1a1a;
            line-height: 1.2;
        }

        .tagline {
            font-size: 1.15rem;
            color: #666;
            margin-bottom: 2.5rem;
            font-weight: 400;
            max-width: 500px;
            line-height: 1.6;
        }

        .actions {
            display: flex;
            gap: 0.75rem;
            flex-wrap: wrap;
            justify-content: center;
            margin-bottom: 4rem;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            border-radius: 6px;
            font-size: 0.9rem;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.2s;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background: #1a1a1a;
            color: #fff;
        }

        .btn-primary:hover {
            background: #333;
        }

        .btn-secondary {
            background: #fff;
            border: 1px solid #ddd;
            color: #1a1a1a;
        }

        .btn-secondary:hover {
            background: #f5f5f5;
            border-color: #ccc;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            width: 100%;
        }

        .feature {
            text-align: left;
            padding: 1.5rem;
            background: #fff;
            border: 1px solid #e5e5e5;
            border-radius: 8px;
        }

        .feature-icon {
            width: 40px;
            height: 40px;
            background: #f5f5f5;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            font-size: 1.25rem;
        }

        .feature h3 {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #1a1a1a;
        }

        .feature p {
            font-size: 0.875rem;
            color: #666;
            line-height: 1.5;
        }

        footer {
            padding: 1.5rem;
            text-align: center;
            color: #999;
            font-size: 0.85rem;
            background: #fff;
            border-top: 1px solid #e5e5e5;
        }

        footer a {
            color: #666;
            text-decoration: none;
        }

        footer a:hover {
            color: #1a1a1a;
        }

        .code-block {
            background: #1a1a1a;
            color: #e5e5e5;
            padding: 1rem 1.5rem;
            border-radius: 8px;
            font-family: 'SF Mono', Consolas, monospace;
            font-size: 0.85rem;
            margin-bottom: 3rem;
            display: inline-block;
        }

        .code-block .comment {
            color: #6b7280;
        }

        .code-block .cmd {
            color: #34d399;
        }

        @media (max-width: 768px) {
            h1 { font-size: 2rem; }
            .tagline { font-size: 1rem; }
            .features {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
            .header {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <a href="/" class="header-brand">
            <svg viewBox="0 0 32 32" fill="none">
                <rect width="32" height="32" rx="8" fill="#1a1a1a"/>
                <path d="M8 12h16M8 16h12M8 20h8" stroke="#fff" stroke-width="2" stroke-linecap="round"/>
            </svg>
            Toporia
        </a>
        <nav class="header-nav">
            <a href="https://github.com/Minhphung7820/toporia/tree/main/docs" target="_blank">Docs</a>
            <a href="https://github.com/Minhphung7820/toporia" target="_blank">GitHub</a>
        </nav>
    </header>

    <div class="container">
        <span class="badge">v1.0 - PHP 8.1+</span>

        <h1>Build faster with<br>Clean Architecture</h1>
        <p class="tagline">A lightweight PHP framework designed for developers who value simplicity, performance, and well-structured code.</p>

        <div class="code-block">
            <span class="comment"># Create a new project</span><br>
            <span class="cmd">$</span> composer create-project toporia/toporia my-app
        </div>

        <div class="actions">
            <a href="https://github.com/Minhphung7820/toporia/tree/main/docs" class="btn btn-primary" target="_blank">
                Get Started
            </a>
            <a href="https://github.com/Minhphung7820/toporia" class="btn btn-secondary" target="_blank">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                View on GitHub
            </a>
        </div>

        <div class="features">
            <div class="feature">
                <div class="feature-icon">&#9881;</div>
                <h3>Clean Architecture</h3>
                <p>Domain-driven design with clear layer separation. Easy to test and maintain.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">&#9889;</div>
                <h3>Fast & Lightweight</h3>
                <p>Zero bloat. Only essential components. Optimized for production.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">&#128230;</div>
                <h3>Modular Packages</h3>
                <p>Add features as needed: OAuth, Webhooks, MongoDB, and more.</p>
            </div>
        </div>
    </div>

    <footer>
        &copy; <?= date('Y') ?> Toporia Framework &middot;
        <a href="https://github.com/Minhphung7820/toporia" target="_blank">GitHub</a>
    </footer>
</body>
</html>
