/** @type {import('tailwindcss').Config} */
export default {
  content: [],
  theme: {
    extend: {},
  },
  plugins: [],
}
const withMT = require("@material-tailwind/html/utils/withMT");

module.exports = withMT({
  content: ["./resources/views/test.blade.php"],
  theme: {
    extend: {},
  },
  plugins: [],
});


