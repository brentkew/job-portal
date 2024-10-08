/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
  theme: {
    extend: {
        colors: {
            "black": "#060606",
            "logo-color": "#d1a201",
        },
        fontFamily: {
            "hanken-grotesk": ['Hanken Grotesk', 'sans-sarif']
        },
        fontSize: {
            "2xs": "10px"
        }
    },
  },
  plugins: [],
}

