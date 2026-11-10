{{-- Tailwind custom config from Stitch (needed because we use the CDN build) --}}
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    brand: {
                        main: '#0D1B2A',      // Deep dark navy
                        surface: '#1B263B',   // Card background
                        slate: '#415A77',     // Borders & glows
                        sage: '#778D7A',      // Accents & primary buttons
                        sand: '#D4C4A8',      // Badges & highlights
                        parchment: '#F4F1DE'  // Primary typography
                    }
                },
                fontFamily: {
                    sans: ['Inter', 'system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'sans-serif'],
                    mono: ['JetBrains Mono', 'Fira Code', 'monospace']
                },
                boxShadow: {
                    'glow-sm': '0 0 15px rgba(65, 90, 119, 0.25)',
                    'glow-md': '0 0 25px rgba(119, 141, 122, 0.2)',
                    'glow-sand': '0 0 20px rgba(212, 196, 168, 0.15)',
                }
            }
        }
    }
</script>
