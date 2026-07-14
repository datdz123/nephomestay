// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'./theme/**/*.php',
		'./theme/**/*.js',
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {
			colors: {
				primary: '#061b0e',
				secondary: '#755b00',
				"surface-tint": "#4d6453",
				"on-tertiary": "#ffffff",
				"on-primary-fixed-variant": "#364c3c",
				"surface": "#fff9e8",
				"on-secondary-container": "#735a00",
				"surface-bright": "#fff9e8",
				"error-container": "#ffdad6",
				"primary-fixed": "#d0e9d4",
				"inverse-surface": "#333124",
				"secondary-fixed": "#ffe08e",
				"on-tertiary-fixed": "#341100",
				"secondary-fixed-dim": "#ecc246",
				"secondary-container": "#fed255",
				"surface-container-high": "#eee8d5",
				"on-primary": "#ffffff",
				"outline-variant": "#c3c8c1",
				"background": "#fff9e8",
				"surface-container": "#f4eedb",
				"on-error": "#ffffff",
				"surface-container-highest": "#e8e2d0",
				"surface-variant": "#e8e2d0",
				"tertiary": "#2d0e00",
				"tertiary-fixed-dim": "#ffb691",
				"on-tertiary-container": "#d27d50",
				"on-secondary": "#ffffff",
				"on-surface": "#1e1c10",
				"surface-container-lowest": "#ffffff",
				"on-error-container": "#93000a",
				"on-primary-fixed": "#0b2013",
				"surface-container-low": "#faf3e0",
				"on-tertiary-fixed-variant": "#74340c",
				"outline": "#737973",
				"error": "#ba1a1a",
				"surface-dim": "#e0dac7",
				"tertiary-container": "#4d1d00",
				"inverse-primary": "#b4cdb8",
				"on-background": "#1e1c10",
				"primary-fixed-dim": "#b4cdb8",
				"on-secondary-fixed-variant": "#584400",
				"primary-container": "#1b3022",
				"inverse-on-surface": "#f7f1de",
				"tertiary-fixed": "#ffdbcb",
				"on-primary-container": "#819986",
				"on-secondary-fixed": "#241a00",
				"on-surface-variant": "#434843"
			},
			borderRadius: {
				"DEFAULT": "0.25rem",
				"lg": "0.5rem",
				"xl": "0.75rem",
				"full": "9999px"
			},
			spacing: {
				"margin-mobile": "20px",
				"margin-desktop": "64px",
				"gutter": "24px",
				"container-max": "1280px",
				"unit": "8px"
			},
			fontFamily: {
				body: ['SVN-Poppins', 'sans-serif'],
				"display-hero": ["Epilogue"],
				"body-md": ["Manrope"],
				"headline-md": ["Playfair Display"],
				"headline-lg-mobile": ["Playfair Display"],
				"headline-lg": ["Playfair Display"],
				"label-caps": ["Manrope"],
				"body-lg": ["Manrope"]
			},
			fontSize: {
				"display-hero": ["48px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "300"}],
				"body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
				"headline-md": ["28px", {"lineHeight": "1.3", "fontWeight": "600"}],
				"headline-lg-mobile": ["32px", {"lineHeight": "1.2", "fontWeight": "700"}],
				"headline-lg": ["40px", {"lineHeight": "1.2", "fontWeight": "700"}],
				"label-caps": ["12px", {"lineHeight": "1.2", "letterSpacing": "0.1em", "fontWeight": "700"}],
				"body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}]
			}
		},
		container: {
			center: true,
			padding: '1rem',
			screens: {
				sm: '600px',
				md: '728px',
				lg: '984px',
				xl: '1240px',
				'2xl': '1460px',
			},
		},
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Add Tailwind Typography (via _tw fork).
		require('@_tw/typography'),

		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson'),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require('@tailwindcss/forms'),
		// require('@tailwindcss/aspect-ratio'),
		// require('@tailwindcss/container-queries'),
	],
};

