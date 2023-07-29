/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ["./app/templates/**/*.twig"],
	theme: {
		extend: {
			screens: {
				sm: "600px",
        md: "768px",
			},
		},
	},
	plugins: [],
}
  
  