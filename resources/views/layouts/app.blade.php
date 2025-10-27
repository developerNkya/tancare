<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TanCare - Healthcare Quality Certification in Tanzania</title>
    <meta name="description" content="Tanzania National Certification for healthcare facilities, recognized by Ministry of Health and PHAB">
    
    <!-- Google Fonts - Geist -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&family=Geist+Mono:wght@100..900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Your custom CSS variables -->
    <style>
        :root {
            --background: oklch(0.99 0 0);
            --foreground: oklch(0.15 0 0);
            --card: oklch(1 0 0);
            --card-foreground: oklch(0.15 0 0);
            --popover: oklch(1 0 0);
            --popover-foreground: oklch(0.15 0 0);
            --primary: oklch(0.35 0.08 160);
            --primary-foreground: oklch(0.99 0 0);
            --secondary: oklch(0.95 0.01 160);
            --secondary-foreground: oklch(0.15 0 0);
            --muted: oklch(0.96 0.005 160);
            --muted-foreground: oklch(0.5 0.02 160);
            --accent: oklch(0.25 0.06 200);
            --accent-foreground: oklch(0.99 0 0);
            --destructive: oklch(0.577 0.245 27.325);
            --destructive-foreground: oklch(0.99 0 0);
            --border: oklch(0.9 0.01 160);
            --input: oklch(0.9 0.01 160);
            --ring: oklch(0.35 0.08 160);
            --radius: 0.5rem;
        }

        .dark {
            --background: oklch(0.15 0 0);
            --foreground: oklch(0.99 0 0);
            --card: oklch(0.18 0 0);
            --card-foreground: oklch(0.99 0 0);
            --popover: oklch(0.18 0 0);
            --popover-foreground: oklch(0.99 0 0);
            --primary: oklch(0.5 0.1 160);
            --primary-foreground: oklch(0.99 0 0);
            --secondary: oklch(0.25 0.02 160);
            --secondary-foreground: oklch(0.99 0 0);
            --muted: oklch(0.25 0.02 160);
            --muted-foreground: oklch(0.65 0.03 160);
            --accent: oklch(0.4 0.08 200);
            --accent-foreground: oklch(0.99 0 0);
            --destructive: oklch(0.396 0.141 25.723);
            --destructive-foreground: oklch(0.99 0 0);
            --border: oklch(0.25 0.02 160);
            --input: oklch(0.25 0.02 160);
            --ring: oklch(0.5 0.1 160);
        }

        /* Apply CSS variables to Tailwind classes */
        .bg-background { background-color: var(--background); }
        .text-foreground { color: var(--foreground); }
        .bg-card { background-color: var(--card); }
        .text-card-foreground { color: var(--card-foreground); }
        .bg-primary { background-color: var(--primary); }
        .text-primary-foreground { color: var(--primary-foreground); }
        .bg-secondary { background-color: var(--secondary); }
        .text-secondary-foreground { color: var(--secondary-foreground); }
        .bg-muted { background-color: var(--muted); }
        .text-muted-foreground { color: var(--muted-foreground); }
        .bg-accent { background-color: var(--accent); }
        .text-accent-foreground { color: var(--accent-foreground); }
        .border-border { border-color: var(--border); }

        body {
            background-color: var(--background);
            color: var(--foreground);
            font-family: 'Geist', sans-serif;
        }

        /* Custom animations for tw-animate-css equivalents */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideInUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .animate-fadeIn { animation: fadeIn 0.5s ease-out; }
        .animate-slideInUp { animation: slideInUp 0.5s ease-out; }
    </style>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen">
        @include('components.header')
        <main>
            @yield('content')
        </main>
        @include('components.footer')
    </div>
</body>
</html>